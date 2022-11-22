<?php require '../../layouts/admin-haut.php'; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
					<li class="breadcrumb-item"><a href="./commandes.php">Commandes</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a>Modifier</a></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex mb-2">
						<h4 class="header-title mt-0 mb-1">Modification d'une commande</h4>
					</div>

					<form method="post" action="">
						<div class="row">
							<div class="col">
								<div class="form-group row">
									<label class="col-lg-2 col-form-label" for="client">Client</label>
									<div class="col-lg-10">
										<input required type="text" class="form-control" id="client" name="client" value="client de la commande">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-2 col-form-label" for="etat">Etat</label>
									<div class="col-lg-10">
										<select name="etat" id="etat" class="form-control mb-3">
											<option value="mauvais">Non démarré</option>
											<option value="moyen">En cours</option>
											<option value="bon">Livré</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-2 col-form-label" for="photo">Photo</label>
									<div class="col-lg-10">
										<input required type="file" class="form-control" id="photo" name="photo">
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Enregistrer</button>
							</div>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>

</div>

<?php require '../../layouts/admin-bas.php'; ?>