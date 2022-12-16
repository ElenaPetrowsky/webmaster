<?php
include '../controllers/database.php';
if (session_id() == '') {
    session_start();
}
if (isset($_GET["action"])) {


    switch ($_GET["action"]) {
        case 1 :
            $produit = array();
            if (isset($_SESSION["produit"]))
                $produit = $_SESSION["produit"];

            array_push($produit, $_POST["id"]);
            $montant = 0;
            $_SESSION["produit"] = $produit;
            if (count($_SESSION["produit"]) > 0) {
                $ids = join(",", $_SESSION['produit']);
                $panier = $BDD->query("SELECT * FROM produits where id in (" .
                    $ids . ")");
                $data = $panier->fetchAll();


                foreach ($_SESSION["produit"] as $item) {

                    foreach ($data as $art) {
                        if ($art["id"] === $item) {
                            $montant += $art["prix_produit"];
                        }
                    }
                }
            }
            $_SESSION["prix_pr"] = $montant;
            header("Content-Type: application/json");
            echo json_encode(array("total" => count($_SESSION["produit"]), "prix_pr" => $_SESSION["prix_pr"]));
            exit();

        case 2:
            $produit = array();
            if (isset($_SESSION["produit"]))
                $produit = $_SESSION["produit"];

            unset($produit[$_POST["id"]]);


            $_SESSION["produit"] = $produit;
            $montant = 0;
            if (count($_SESSION["produit"]) > 0) {
                $ids = join(",", $_SESSION['produit']);
                $panier = $BDD->query("SELECT * FROM produits where id in (" .
                    $ids . ")");
                $data = $panier->fetchAll();


                foreach ($_SESSION["produit"] as $item) {

                    foreach ($data as $art) {
                        if ($art["id"] === $item) {
                            $montant += $art["prix_produit"];
                        }
                    }
                }
            }
            $_SESSION["prix_pr"] = $montant;
            header("Content-Type: application/json");
            echo json_encode(array("total" => count($_SESSION["produit"]), "prix_pr" => $_SESSION["prix_pr"]));
            exit();
        case 3:
            if(isset($_SESSION['auth'])){
                $id_cl = $_SESSION['id'];
                foreach ($_SESSION["produit"] as $item) {

                    $BDD->exec("INSERT INTO `commandes` (`id_client`, `id_produit`, `quantite`, `etat`) 
                    VALUES ( $id_cl, $item, 1, 0)");
                }

                $_SESSION["prix_pr"] = 0;
                $_SESSION["produit"] = array();

                header("Content-Type: application/json");
                echo json_encode(array("success" => true, "message" => "Votre commande a été enregistrée!"));

            }else{
                header("Content-Type: application/json");
                echo json_encode(array("success" => false, "message" => "vous devez d'abord vous connecter!"));

            }
            break;
    }
}





function updatePanier()
{


}