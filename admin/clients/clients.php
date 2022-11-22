<?php require '../../layouts/admin-haut.php'; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb" class="float-right mt-1">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../index.php">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a>clients</a></li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="titre-ajout">
						<h4 class="header-title mt-0 mb-1">Liste des clients</h4>
						<a class="ml-auto btn btn-primary" href="./clients-create.php">Ajouter</a>
					</div>

					<div class="table-responsive">
						<table class="table mb-0 display">
							<thead>
								<tr>
									<th scope="col">N°</th>
									<th scope="col">Noms et prénoms</th>
									<th scope="col">Emails</th>
									<th scope="col">Téléphones</th>
									<th scope="col">Actions</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td>client->id</td>
									<td>client->nom_client client->prenoms_client</td>
									<td>client->email_client</td>
									<td>client->tel_client</td>
									<td>
										<a href="./clients-edit.php" class="btn btn-primary btn-sm">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="./clients-delete" class="btn btn-danger btn-sm suppression">
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