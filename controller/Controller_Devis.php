<?php

// Gère toutes les fonctions qui concernent les devis
class Controller_Devis extends Controller
{
    // Affichage de la page devis.php avec authentification
    public function Devis(){
        $session = new Session();
       
        $myView = new View('devis');
        $titre['titre'] = 'Devis';

        $myView->render($titre);
    }
    // Va générer un pdf avec la bibliothèque phpmailer et (class devis)
    public function genere_pdf(){
        // On charge la classe Session pour récupérer les infos : Nom, Prénom, email
        $session = new Session();

        // Récupération des data du formulaire
        // La fonction json_decode permet de décoder une chaîne JSON et de la convertir en un objet ou un tableau associatif en PHP. (qui se trouve dans devis.js)
        $qty = json_decode($_POST['qty']);
        $prix_recup = json_decode($_POST['prix']);
        $tot_recup = json_decode($_POST['tot']);
        $frais = json_decode($_POST['frais']);

        // Mise en format correct
        $prix = [];
        foreach ($prix_recup as $le_prix) {
            $prix[] = number_format($le_prix, 2);
        }
        $tot = [];
        foreach ($tot_recup as $le_tot) {
            $tot[] = floatval($le_tot);
        }
        $frais_transport = $frais[0];

        $nb_palette = $frais[2];
        $caution_palette = $frais[3];

        $libelle = [
            'Rouleaux de gazon', 'Débroussaillage', 'Tonte de gazon', 'Taille de haie',
            'Elagage', 'Tronçonnage', 'Evacuation des déchets', 'Nettoyage terrasse', 'Robot tondeuse + kit'
        ];

        // Date facture et Date échéance
        $date_actuelle = new DateTime();
        $date_facture = $date_actuelle->format('d/m/Y');
        $date_echeance = $date_actuelle->modify('+15 days');
        $date_echeance = $date_echeance->format('d/m/Y');

        // Récupération de session (nom, prenom ,email)
        $nom = '';
        $prenom = '';
        $email = '';
        if (isset($_SESSION['nom'])) {
            $nom = $_SESSION['nom'];
        }
        if (isset($_SESSION['prenom'])) {
            $prenom = $_SESSION['prenom'];
        }
        if (isset($_SESSION['mail'])) {
            $email = $_SESSION['mail'];
        };

        // Infos société
        $nom_societe = 'gvw-tech';
        $adresse = '58, rue de la brouette';
        $cp = '5030';
        $ville = 'Gembloux';


        // N° facture

        $numeroFacture = file_get_contents('../fpdf/facture.txt');

        // Incrémenter la valeur
        $numeroFacture++;

        // Écrire la nouvelle valeur dans le fichier 'facture.txt'
        file_put_contents('../fpdf/facture.txt', $numeroFacture);
        $numDoc = $numeroFacture;

        // Création du pdf
        $pdf = new Devis();
        $pdf->AliasNbPages();
        $pdf->AddPage();

        $pdf->SetFont('Courier', '', 12);
        // Affichage du message en diagonale
        $pdf->temporaire('Devis provisoire');

        // Type de document et son n° encadrés
        $pdf->addTypeDocument('Devis', $numDoc, 256);

        // Impression Date facture & Echéance
        $pdf->addDate($date_facture, $y = 90);
        $pdf->addValidite($date_echeance, $y = 90);

        // Renseignements Client
        $pdf->addClient($nom, $prenom, $email, $x = 10, $y = 60);

        $pdf->Ln(70);
        $debut = $pdf->GetY();
        $pdf->SetFillColor(0, 200, 0);

        // Rermise à zéro des Totaux
        $total_tva = 0;
        $total_htva = 0;
        $total = 0;

        // Impression de l'entête
        $pdf->addHeader(1, 'Libellé', 'Qtés', 'P.U.', '  Tot HTVA', 'Taux', 'TVA', '     Tot TVAC  ', '', true);
        for ($i = 0; $i < count($qty); $i++) {
            if ($qty[$i] > 0) {
                if ($i == 0) {
                    $base = $prix[$i];
                    // On teste $base pour savoir quelle est la répartition :
                    //  prix du gazon / prix de la main d'oeuvre
                    if ($base < 5.15) {
                        $prix_gazon = 2.60;
                        $prix_mo = 2.53;
                    } elseif ($base > 5.15 && $base < 5.23) {
                        $prix_gazon = 2.65;
                        $prix_mo = 2.53;
                    } else {
                        $prix_gazon = 2.71;
                        $prix_mo = 2.58;
                    }
                    // Ligne des rouleaux de gazon
                    $totHTVA = $qty[$i] * $prix_gazon;
                    $tva = $totHTVA * 0.06;
                    $totTVAC = $totHTVA + $tva;

                    $pdf->addRouleaux(5, $libelle[$i], $qty[$i], 'm²', $prix_gazon, '/m²');
                    $pdf->addTVA(1, $totHTVA, 6, $tva, $totTVAC);
                    // Mise à jour des totaux
                    $total_tva += $tva;
                    $total_htva += $totHTVA;
                    $total += $totTVAC;

                    // Ligne de la mise en oeuvre
                    $totHTVA = $qty[$i] * $prix_mo;
                    $tva = $totHTVA * 0.21;
                    $totTVAC = $totHTVA + $tva;

                    $pdf->addRouleaux(5, 'Mise en oeuvre', $qty[$i], 'm²', $prix_mo, '/m²');
                    $pdf->addTVA($pos = 1, $totHTVA, 21, $tva, $totTVAC);
                    // Mise à jour des totaux
                    $total_tva += $tva;
                    $total_htva += $totHTVA;
                    $total += $totTVAC;

                    // Ligne des palettes
                    if ($nb_palette > 0) {
                        $pu = $caution_palette / $nb_palette;
                        $totHTVA =  $caution_palette;
                        $tva = 0;
                        $totTVAC = $totHTVA;

                        $pluriel = $nb_palette > 1 ? 's' : '';
                        $article = $nb_palette > 1 ? 'les' : 'la';
                        $text = $nb_palette > 1 ? " $article $nb_palette palette$pluriel" : "la palette";
                        $text = str_replace('les', 'des', $text);
                        $text = str_replace('la', ' de la', $text);
                        $pdf->addRouleaux(5, "Caution palette$pluriel", $nb_palette, 'U', $pu, '/U');
                        $pdf->addTVA($pos = 1, $totHTVA, 0, $tva, $totTVAC);

                        $total_tva += $tva;
                        $total_htva += $totHTVA;
                        $total += $totTVAC;
                    }
                    // Ligne des frais de transport
                    $totHTVA = $frais_transport;
                    $tva = $totHTVA * 0.21;
                    $totTVAC = $totHTVA + $tva;

                    $pdf->addRouleaux(5, 'Frais de transport', -1, '-', $totHTVA, '');
                    $pdf->addTVA($pos = 1, $totHTVA, 21, $tva, $totTVAC);
                    // Mise à jour des totaux
                    $total_tva += $tva;
                    $total_htva += $totHTVA;
                    $total += $totTVAC;
                } else {
                    // Ligne des autres services
                    $totHTVA = $qty[$i] * $prix[$i];
                    $tva = $totHTVA * 0.21;
                    $totTVAC = $totHTVA + $tva;

                    $unit_qty = 'm²';
                    $unit_prix = '/m²';
                    if ($i == 6) {
                        $unit_qty = 'm³';
                        $unit_prix = '/m³';
                    } elseif ($i == 8) {
                        $unit_qty = 'm';
                        $unit_prix = '/m';
                    }
                    $pdf->addRouleaux(5, $libelle[$i], $qty[$i], $unit_qty, $prix[$i], $unit_prix);
                    $pdf->addTVA(1, $totHTVA, 21, $tva, $totTVAC);
                    // Mise à jour des totaux
                    $total_tva += $tva;
                    $total_htva += $totHTVA;
                    $total += $totTVAC;
                }
            }
        }
        $pdf->Cell(10);
        $pdf->Ln(10);
        $fauxprix = 0;
        if ($nb_palette > 0 && $qty[0]) {
            $pdf->Ln();
            $pdf->addSoit(5, "[ La caution vous sera rendue dès la restitution$text ]", $fauxprix, 'B', false);
            $pdf->Ln();
        }
        $pdf->SetX(137);
        $pdf->addSoit(10, 'Total HTVA :', $total_htva, '', true);
        $pdf->SetX(137);
        $pdf->addSoit(10, 'Total  TVA :', $total_tva, '', true);
        $pdf->SetX(137);
        $pdf->addSoit(10, 'Total TVAC :', $total, 'B', true);
        $fin = $pdf->GetY();


        // Cadre des détails
        $haut = $fin - $debut;

        $pdf->RoundedRect($x = 10, $debut - 8, 190, $haut + 16, $r = 5, $style = '');

        $pdf->Ln(20);

        ob_clean();
        $mon_devis = "devis" . $numDoc . ".pdf";
        $pdf->Output('D', $mon_devis, true);
        ob_start();
        $msg = "Votre devis a été généré avec succès.";
        $session->setFlash($msg, 'success');
        header("Location: devis");
        ob_end_clean();
        exit();
    }
}