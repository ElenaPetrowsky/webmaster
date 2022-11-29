<?php include '../../layouts/admin-haut.php'; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
					<li class="breadcrumb-item"><a href="./categories.php">Caégories</a></li>
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
						<h4 class="header-title mt-0 mb-1">Ajouter une catégorie</h4>
					</div>

					<form method="post">
						<div class="row">
							<div class="col">
								<div class="form-group row">
									<label class="col-lg-2 col-form-label" for="nom">Nom de la catégorie</label>
									<div class="col-lg-10">
										<input included type="text" class="form-control" id="nom" name="nom">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-2 col-form-label" for="photo">Photo</label>
									<div class="col-lg-10">
										<input included type="file" class="form-control" id="photo" name="photo">
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

<?php include '../../layouts/admin-bas.php'; ?>