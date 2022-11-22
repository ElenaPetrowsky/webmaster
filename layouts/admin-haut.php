<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<!-- Jquery css -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

	<!-- Perso css -->
	<link rel="stylesheet" href="../css/app.css"/>
	<link rel="stylesheet" href="../../css/app.css"/>

	<title>Admin</title>
</head>

<body>
	<div class="d-flex align-items-stretch">
		<nav id="sidebar" class="active">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="bi bi-list"></i>
				</button>
			</div>
			<div class="p-4">
				<h1><a href="/ogani" class="logo">Webmaster</a></h1>
				<ul class="list-unstyled components mb-5">
					<li class="nav-item">
						<a class="nav-link" href="/ogani/admin/index.php">
							<i class="bi bi-house-door"></i>
							<span>Administration</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/ogani/admin/clients/clients.php">
							<i class="bi bi-person"></i>
							<span>Clients</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/ogani/admin/produits/produits.php">
							<i class="bi bi-people"></i>
							<span>Produits</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/ogani/admin/categories/categories.php">
							<i class="bi bi-calendar4-week"></i>
							<span>Catégories</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/ogani/admin/commandes/commandes.php">
							<i class="bi bi-book"></i>
							<span>Commandes</span>
						</a>
					</li>
					<li class="nav-item logout">
						<a class="nav-link" href="/logout">
							<i class="bi bi-escape"></i>
							<span>Déconnexion</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">

