<?php 
include '../../layouts/admin-haut.php'; 
include '../controllers/readClientAction.php';
include '../controllers/updateClientAction.php';
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb" class="float-right mt-1">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/ogani/admin/index.php">Accueil</a></li>
						<li class="breadcrumb-item"><a href="/clients">Clients</a></li>
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
							<h4 class="header-title mt-0 mb-1">Modification d'un client</h4>
						</div>

						<form method="post">

							<div class="row">
								<div class="col">
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="nom">Nom</label>
										<div class="col-lg-10">
											<input required type="text" class="form-control" id="nom" name="nom" value="<?= $clientInfos["nom_client"] ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="prenoms">Prénoms</label>
										<div class="col-lg-10">
											<input required type="text" class="form-control" id="prenoms" name="prenoms" value="<?= $clientInfos["prenoms_client"] ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="email">Email</label>
										<div class="col-lg-10">
											<input required type="email" class="form-control" id="email" name="email" value="<?= $clientInfos["email_client"] ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-2 col-form-label" for="contact">Téléphone</label>
										<div class="col-lg-10">
											<input required type="tel" name="contact" class="form-control" id="contact" placeholder="0748502093" pattern="[0-9]{10}" value="<?= $clientInfos["contact_client"] ?>">
										</div>
									</div>
									<button type="submit" class="btn btn-primary modification" name="validate">Modifier</button>
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