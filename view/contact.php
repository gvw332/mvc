<?php

	$nom    	= '';
	$prenom 	= '';
	$email  	= '';
	$message    = '';

	if (isset($_SESSION['reload'])) {
		$data   	= $_SESSION['reload'];

		$nom    	= $data['nom'];
		$prenom 	= $data['prenom'];
		$email  	= $data['email'];
		$message    = $data['message'];
		unset($_SESSION['reload']);
	}

?>

<!-------------- CONTENU DE LA PAGE "CONTACT.PHP" ------------------>
<main id="contenu-contact" role="main">
	
	<section class="contact w-full">		
		<div class="contact-box">
			<div class="contact-links">
				<h2>CONTACT</h2>
				<div class="links">
					<div class="link">					
						<a href="https://www.facebook.com/profile.php?id=100093059735175"><i class="fa-brands fa-facebook-f" style="color: #4caf50;"></i></a>
					</div>
					<div class="link">
						<a href="https://twitter.com/GaelWymeersch"><i class="fa-brands fa-twitter" style="color: #4caf50;"></i></a>
					</div>
				</div>
			</div>
			<div class="contact-form-wrapper">
			<form action="contact.ctrl" method="POST">
					<div class="form-floating mb-3">
						<input type="text" name="nom" class="form-control text-black bg-white" id="inputNom" placeholder="Nom" value="<?php echo $nom;?>">
						<label>Nom</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" name="prenom" class="form-control text-black bg-white" id="inputPrenom" placeholder="Prénom" value="<?php echo $prenom;?>">
						<label>Prénom</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" name="email" class="form-control text-black bg-white" id="inputEmail" placeholder="Email" value="<?php echo $email;?>">
						<label>Email</label>
					</div>
					<div class="form-item">
						<textarea name="message"><?php echo $message;?></textarea>
						<label>Message</label>
					</div>
					<button class="submit-btn">Envoyer</button>
				</form>
			</div>
		</div>
	</section>
</main>
<!-------------- FIN DU CONTENU DE LA PAGE "CONTACT.PHP" ------------------>