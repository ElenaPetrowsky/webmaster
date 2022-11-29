<?php 
include 'controllers/requetesAdmin.php';
include '../layouts/admin-haut.php'; 
?>

<div class="container-fluid">
	<br>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		Bienvenue sur la page d'administration de Webmaster
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<div class="mb-4 mt-0">
		<h4>Dashboard</h4>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Clients
						</span>
						<h2 class="mb-0"><?= $getCountClients->fetch()[0] ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Produits
						</span>
						<h2 class="mb-0"><?= $getCountProducts->fetch()[0] ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Catégories
						</span>
						<h2 class="mb-0"><?= $getCountCategories->fetch()[0] ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-3 mb-3">
			<div class="card">
				<div class="card-body p-0">
					<div class="media p-3 media-body">
						<span class="text-muted text-uppercase font-size-12 font-weight-bold">Commandes
						</span>
						<h2 class="mb-0"><?= $getCountCommandes->fetch()[0] ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include '../layouts/admin-bas.php' ?>