<?php 
include '../../layouts/admin-haut.php'; 
include '../controllers/requetesAdmin.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a>Produits</a></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="titre-ajout">
						<h4 class="header-title mt-0 mb-1">Liste des produits</h4>
						<a class="ml-auto btn btn-primary" href="./produits-create.php">Ajouter</a>
					</div>

					<div class="table-responsive">
						<table class="table mb-0 display">
							<thead>
								<tr>
									<th scope="col">N°</th>
									<th scope="col">Noms</th>
									<th scope="col">Prix</th>
									<th scope="col">Descriptions</th>
									<th scope="col">Photos</th>
									<th scope="col">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php while($produit = $getAllProducts->fetch()) { ?>
								<tr>
									<td><?= $produit["id"] ?></td>
									<td><?= $produit["nom_produit"] ?></td>
									<td><?= $produit["prix_produit"] ?></td>
									<td><?= $produit["description_produit"] ?></td>
									<td><?= $produit["photo_produit"] ?></td>
									<td>
										<a href="./produits-edit.php?id=<?= $produit['id']; ?>" class="btn btn-primary btn-sm">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="deleteProductAction.php?id=<?= $produit['id']; ?>" class="btn btn-danger btn-sm suppression">
											<i class="bi bi-trash"></i>
										</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require '../../layouts/admin-bas.php'; ?>