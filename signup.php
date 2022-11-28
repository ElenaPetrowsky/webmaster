<?php
require 'controllers/showProductsAction.php';
require 'layouts/navbar.php';
?>

<div class="container">
	<form method="post" class="auth">

		<div class="input-form">
			<input type="text" name="nom" id="nom" placeholder=" ">
			<label for="nom">Nom client</label>
		</div>
		<div class="input-form">
			<input type="email" name="email" id="email" placeholder=" ">
			<label for="email">Adresse email</label>
		</div>
		<div class="input-form">
			<input type="password" name="password" id="password" placeholder=" ">
			<label for="password">Mot de passe</label>
		</div>

		<div class="input-form">
			<input type="tel" name="contact" id="contact" placeholder=" " pattern="^[0-9]{10}$">
			<label for="contact">Contact</label>
		</div>
		<div class="submit-form">
			<button type="submit" name="validate">Inscription</button>
		</div>
	</form>
</div>

<?php require 'layouts/footer.php'; ?>