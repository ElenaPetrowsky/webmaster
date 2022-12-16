<?php 
include 'layouts/navbar.php'; 
include 'controllers/loginAction.php'; 
?>

<div class="container">
	<form method="post" class="auth">

		<div class="input-form">
			<input type="email" name="email" id="email" placeholder=" ">
			<label for="email">Adresse email</label>
		</div>
		<div class="input-form">
			<input type="password" name="password" id="password" placeholder=" ">
			<label for="password">Mot de passe</label>
		</div>
		<div class="submit-form">
			<button type="submit" name="validate">Connexion</button>
		</div>
	</form>
</div>

<?php include 'layouts/footer.php'; ?>