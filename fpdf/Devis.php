<?php

define('EURO', chr(128));

class Devis extends FPDF{
    var $angle = 0;

    // En-tête du devis
    function Header(){
        // Infos société
        $nom_societe = 'gvw-tech';
        $adresse = '54, Rue de la Brouette';
        $cp = '5030';
        $ville = 'Gembloux';
        // Logo
        // var_dump('../public/images/logos/gvw-logo-nb.png');
        // die;
        $this->Image('../public/images/logos/gvw-logo-nb.png', 140, 6, 30);
        // Police Arial gras 15
        $this->SetFont('Arial', 'B', 15);

        // Titre
        $this->Cell(40, 10, $nom_societe, 0, 1);
        $this->Cell(40, 10, $adresse, 0, 1);

        $this->Cell(40, 10, $cp . ' ' . $ville, 0, 1);

        // Saut de ligne
        $this->Ln(20);
    }

    // Pied de page du devis
    function Footer(){
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial', 'I', 8);
        // Numéro de page
        $this->Cell(0, 10, utf8_decode('gvw-tech   -   Rue de la Brouette, 54   -   5030   Gembloux'), 0, 0, 'C');
    }


    // Permet de créer des rectangles arrondis
    function RoundedRect($x, $y, $w, $h, $r, $style = ''){
        $k = $this->k;
        $hp = $this->h;
        if ($style == 'F')
            $op = 'f';
        elseif ($style == 'FD' || $style == 'DF')
            $op = 'B';
        else
            $op = 'S';
        $MyArc = 4 / 3 * (sqrt(2) - 1);
        $this->_out(sprintf('%.2F %.2F m', ($x + $r) * $k, ($hp - $y) * $k));
        $xc = $x + $w - $r;
        $yc = $y + $r;
        $this->_out(sprintf('%.2F %.2F l', $xc * $k, ($hp - $y) * $k));

        $this->_Arc($xc + $r * $MyArc, $yc - $r, $xc + $r, $yc - $r * $MyArc, $xc + $r, $yc);
        $xc = $x + $w - $r;
        $yc = $y + $h - $r;
        $this->_out(sprintf('%.2F %.2F l', ($x + $w) * $k, ($hp - $yc) * $k));
        $this->_Arc($xc + $r, $yc + $r * $MyArc, $xc + $r * $MyArc, $yc + $r, $xc, $yc + $r);
        $xc = $x + $r;
        $yc = $y + $h - $r;
        $this->_out(sprintf('%.2F %.2F l', $xc * $k, ($hp - ($y + $h)) * $k));
        $this->_Arc($xc - $r * $MyArc, $yc + $r, $xc - $r, $yc + $r * $MyArc, $xc - $r, $yc);
        $xc = $x + $r;
        $yc = $y + $r;
        $this->_out(sprintf('%.2F %.2F l', ($x) * $k, ($hp - $yc) * $k));
        $this->_Arc($xc - $r, $yc - $r * $MyArc, $xc - $r * $MyArc, $yc - $r, $xc, $yc - $r);
        $this->_out($op);
    }
    // Crée des coins arrondis 
    function _Arc($x1, $y1, $x2, $y2, $x3, $y3){
        $h = $this->h;
        $this->_out(sprintf(
            '%.2F %.2F %.2F %.2F %.2F %.2F c ',
            $x1 * $this->k,
            ($h - $y1) * $this->k,
            $x2 * $this->k,
            ($h - $y2) * $this->k,
            $x3 * $this->k,
            ($h - $y3) * $this->k
        ));
    }
    // Permet de donner un angle au texte 
    function Rotate($angle, $x = -1, $y = -1){
        if ($x == -1)
            $x = $this->x;
        if ($y == -1)
            $y = $this->y;
        if ($this->angle != 0)
            $this->_out('Q');
        $this->angle = $angle;
        if ($angle != 0) {
            $angle *= M_PI / 180;
            $c = cos($angle);
            $s = sin($angle);
            $cx = $x * $this->k;
            $cy = ($this->h - $y) * $this->k;
            $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm', $c, $s, -$s, $c, $cx, $cy, -$cx, -$cy));
        }
    }
    // Permet de rajouter un commentaire (Devis temporaire) en sous-impression
    function temporaire($texte){
        $this->SetFont('Arial', 'B', 50);
        $this->SetTextColor(203, 203, 203);
        $this->Rotate(45, 55, 190);
        $this->Text(55, 190, $texte);
        $this->Rotate(0);
        $this->SetTextColor(0, 0, 0);
    }
    // Affiche un cadre avec la date du devis
    function addDate($date, $y1 = 20){
        $r1  = 10;
        $r2  = $r1 + 30;

        $y2  = 15;
        $mid = $y1 + 8;
        $this->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 3.5, 'D');
        $this->Line($r1, $mid, $r2, $mid);
        $this->SetXY($r1 + ($r2 - $r1) / 2 - 5, $y1 + 2);
        $this->SetFont("Arial", "B", 10);
        $this->Cell(10, 5, "DATE", 0, 0, "C");
        $this->SetXY($r1 + ($r2 - $r1) / 2 - 5, $y1 + 9);
        $this->SetFont("Arial", "", 10);
        $this->Cell(10, 5, $date, 0, 0, "C");
    }
    // Affiche la date de validité 
    function addValidite($date, $y1 = 20){
        $r1  = $this->w - 50;
        $r2  = $r1 + 40;

        $y2  = 15;
        $mid = $y1 + 8;
        $this->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 3.5, 'D');
        $this->Line($r1, $mid, $r2, $mid);
        $this->SetXY($r1 + 10  - 5, $y1 + 2);
        $this->SetFont("Arial", "B", 10);
        $this->Cell(30, 5, utf8_decode("Date d'expiration"), 0, 0, "C");
        $this->SetXY($r1 + 10 - 5, $y1 + 9);
        $this->SetFont("Arial", "", 10);
        $this->Cell(30, 5, $date, 0, 0, "C");
    }

    // Affiche un cadre avec les references du client
    function addClient($nom = '', $prenom = '', $email = '', $x1 = 0, $y1 = 60){

        $x2  = $x1 + 80;
        $y2  =  20;
        $mid = $y1 + 8.4;
        $this->RoundedRect($x1, $y1, ($x2 - $x1), $y2, 3.5, 'DF');
        $this->Line($x1, $mid, $x2, $mid);
        $this->SetXY($x1 + 10, $y1 + 1.5);
        $this->SetFont("Arial", "B", 10);
        $this->Cell(10, 5, "CLIENT", 0, 0, "");
        $this->SetXY($x1 + 10, $y1 + 9);
        $this->SetFont("Arial", "", 10);
        $this->Cell(10, 5, $prenom . ' ' . $nom, 0, 2, "");
        $this->Cell(10, 5, $email, 0, 0, "");
    }
    // Calcul le prix en additionnant la superficie
    function addSuperficie($libelle = '', $qty = 0.0, $x1 = 15){

        $this->Cell($x1);
        $this->SetFont("Arial", "", 12);

        $this->Cell($w = 70, $h = 5, utf8_decode($libelle), $bord = 0, $suite = 0, $align = '');
        $this->Cell(10, 5, $qty, 0, 0, 'R');
        $this->Cell(20, 5, utf8_decode(' m²'), 0, 1, 'C');
    }
    // Formatage du service demandé
    function addRouleaux($retrait, $libelle, $qty, $unit_qty, $prix, $unit_prix){
        // Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
        $this->Cell((int)$retrait);
        $this->SetFont("Arial", "", 12);
        // Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
        if (!empty($libelle)) {
            $this->Cell(45, 5, utf8_decode($libelle), 0, 0, 'L');
        }
        if ($qty > 0) {
            $this->Cell(20, 5, $this->Formatter($qty, 0, $unit_qty), 0, 0, 'R');
        } else {
            $this->Cell(20, 5, 'Forfait', 0, 0, 'R');
        }

        // $this->Cell(20, 5, ' ' . utf8_decode(' au m²'), 0, 0, 'C');
        $this->Cell(20, 5, $this->Formatter($prix, 2), 0, 0, 'R');
        $this->Cell(15, 5, utf8_decode($unit_prix), 0, 0, 'L');

        //$this->Cell(10, 5, (($forfait == '1') ? utf8_decode(' €') : utf8_decode(' €/m²')), 0, 0);
    }
    // Ajout des frais au prix
    function addFrais($libelle = '', $prix = 0.0, $forfait = '1', $x1 = 15){

        $this->Cell($x1);
        $this->SetFont("Arial", "", 12);
        // Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
        $this->Cell($w = 70, $h = 5, utf8_decode($libelle), $bord = 0, $suite = 0, $align = '');
        $this->Cell(10, 5, $this->Formatter($prix, 2), 0, 0, 'R');
        //$this->Cell(10, 5, ' ' . EURO . utf8_decode(' /m²'), 0, 0);

        $this->Cell(20, 5, (($forfait == '1') ? ('') : utf8_decode(' au m²')), 0, 0, 'C');
    }
    // Formatage d'un libellé avec un prix'
    function addSoit($retrait, $libelle, $prix, $format, $bold){
    
        $this->Cell((int)$retrait);
        if ($bold) {
            $this->SetFont("Arial", $format, 12);
        }        
        $this->Cell(30, 5, utf8_decode($libelle), 0, 0, '');
        if ($prix > 0) {
            $this->Cell(20, 5, $this->Formatter($prix, 2), 0, 1, 'R');
        } else {
            $this->Cell(20, 5, '', 0, 1, '');
        }

    }
    // Formatage des caractéristiques (prix HTVA,  sous-total HTVA , taux TVA , TVA, sous-total TVAC)
    function addTVA($retrait, $prixHTVA, $taux, $tva, $tvac, $format = ''){
        //$formatter = new \NumberFormatter("be-FR", \NumberFormatter::CURRENCY);
        //$result = $number->format(12345.12345); // outputs €12.345,12
        $this->Cell((int)$retrait);
        $this->SetFont("Arial", $format, 12);
        // Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
        // $this->Cell($w = 30, $h = 5, , $bord = 0, $suite = 0, $align = '');

        $this->Cell(20, 5, $this->Formatter($prixHTVA, 2), 0, 0, 'R');
        $this->Cell(15, 5, $this->Formatter($taux, 0, '%'), 0, 0, 'R');
        $this->Cell(20, 5, $this->Formatter($tva, 2), 0, 0, 'R');
        $this->Cell(25, 5, $this->Formatter($tvac, 2), 0, 1, 'R');
        //$this->Cell(10, 5, ' ' . EURO, 0, 1, 'C');
    }
    // Ajout des titres de la table du devis
    function addHeader($retrait, $libelle, $qty, $prix, $totHTVA, $taux, $tva, $totTVAC, $format, $fill){
        $this->Cell((int)$retrait);
        $this->SetFont("Arial", $format, 12);
        // Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
        // $this->Cell($w = 30, $h = 5, , $bord = 0, $suite = 0, $align = '');

        $this->Cell(45, 5, utf8_decode($libelle), 0, 0, 'C', $fill);
        $this->Cell(22, 5, utf8_decode($qty), 0, 0, 'C', $fill);
        $this->Cell(28, 5, utf8_decode($prix), 0, 0, 'C', $fill);
        $this->Cell(25, 5, utf8_decode($totHTVA), 0, 0, 'R', $fill);
        $this->Cell(20, 5, utf8_decode($taux), 0, 0, 'C', $fill);
        $this->Cell(18, 5, utf8_decode($tva), 0, 0, 'C', $fill);
        $this->Cell(25, 5, utf8_decode($totTVAC), 0, 1, 'R', $fill);
        $this->Cell(20, 5, '', 0, 1, 'C');
    }


    // Page de test pour les fonts de caractères
    function fact_dev($libelle, $num, $color = 200, $y1 = 60){
        $r1  = $this->w - 70;
        $r2  = $r1 + 60;      

        $y2  = 10;
        $mid = ($r1 + $r2) / 2;

        $texte  = $libelle . "   N° : " . $num;
        $szfont = 12;
        $loop   = 0;

        while ($loop == 0) {
            $this->SetFont("Arial", "B", $szfont);
            $sz = $this->GetStringWidth($texte);
            if (($r1 + $sz) > $r2)
                $szfont--;
            else
                $loop++;
        }

        $this->SetLineWidth(0.1);
        $this->SetFillColor($color);
        $this->RoundedRect($r1, $y1, ($r2 - $r1), $y2, 2.5, 'DF');
        $this->SetXY($r1 + 1, $y1 + 2);
        $this->Cell($r2 - $r1 - 1, 6, utf8_decode($texte), 0, 0, "C");
    }
    // Génere automatiquement un numero de devis
    function addTypeDocument($document, $numdev, $color = 180){
        $string = sprintf(" %04d", $numdev);
        $this->fact_dev($document, $string, $color);
    }
    // Formatage des unités de mesure
    function Formatter($number, $dec, $sigle = ''){
        $suite = '';
        if ($sigle == '') {
            $suite = ' ' . EURO;
        } elseif ($sigle == '%') {
            $suite = ' %';
        } elseif ($sigle == 'm²') {
            $suite = utf8_decode(' m²');
        } elseif ($sigle == 'm³') {
            $suite = utf8_decode(' m³');
        } elseif ($sigle == 'H') {
            $suite = ' H';
        } elseif ($sigle == '/m²') {
            $suite = ' ' . EURO . utf8_decode('/m²');
        } elseif ($sigle == '/m³') {
            $suite = ' ' . EURO . utf8_decode('/m³');
        } elseif ($sigle == '/H') {
            $suite = ' ' . EURO . utf8_decode('/H');
        } elseif ($sigle == 'U') {
            $suite = ' U';;
        } elseif ($sigle == '/U') {
            $suite = ' ' . EURO . utf8_decode('/U');
        } elseif ($sigle == '/m') {
            $suite = ' ' . EURO . utf8_decode('/m');
        } elseif ($sigle == 'm') {
            $suite = ' ' . utf8_decode('m');
        }
        return number_format($number, (int)$dec, ',', ' ') . $suite;
    }
}
