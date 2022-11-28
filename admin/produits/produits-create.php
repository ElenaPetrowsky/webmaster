<?php 
include '../../layouts/admin-haut.php'; 
include '../controllers/createProductAction.php';
?>

<div class="">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" class="float-right mt-1">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
							<li class="breadcrumb-item"><a href="./produits.php">produits</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a>Ajouter</a></li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="d-flex mb-2">
								<h4 class="header-title mt-0 mb-1">Ajouter un produit</h4>
							</div>

							<form method="post">
								<div class="row">
									<div class="col">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="nom">Nom</label>
											<div class="col-lg-10">
												<input required type="text" class="form-control" id="nom" name="nom">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="prix">Prix</label>
											<div class="col-lg-10">
												<input required type="number" min="0" class="form-control" id="prix" name="prix">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="description">Description</label>
											<div class="col-lg-10">
												<textarea name="description" id="description" class="form-control mb-3" cols="30" rows="5" placeholder="Description du produit"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-2 col-form-label" for="photo">Photo</label>
											<div class="col-lg-10">
												<input type="file" class="form-control" id="photo" name="photo">
											</div>
										</div>
										<button type="submit" class="btn btn-primary" name="validate">Enregistrer</button>
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