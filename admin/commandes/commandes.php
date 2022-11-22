<?php require '../../layouts/admin-haut.php'; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a>Commandes</a></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="titre-ajout">
						<h4 class="header-title mt-0 mb-1">Liste des commandes</h4>
						<a class="ml-auto btn btn-primary" href="./commandes-create.php">Ajouter</a>
					</div>

					<div class="table-responsive">
						<table class="table mb-0 display">
							<thead>
								<tr>
									<th scope="col">N°</th>
									<th scope="col">Clients</th>
									<th scope="col">Etats</th>
									<th scope="col">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>commande->id</td>
									<td>commande->client_commande</td>
									<td>commande->etat_commande</td>
									<td>
										<a href="./commandes-edit.php" class="btn btn-primary btn-sm">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="./commandes-delete" class="btn btn-danger btn-sm suppression">
											<i class="bi bi-trash"></i>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php require '../../layouts/admin-bas.php'; ?>