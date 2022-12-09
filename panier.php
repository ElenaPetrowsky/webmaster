<?php include 'layouts/navbar.php';
include 'controllers/database.php';
$produit = array();
if (isset($_SESSION["produit"]) && count($_SESSION["produit"]) > 0) {

    $ids = join(",", $_SESSION['produit']);
    $panier = $BDD->query("SELECT * FROM produits where id in (" .
        $ids . ")");
    $data = $panier->fetchAll();
    $montant = 0;


    foreach ($_SESSION["produit"] as $item) {

        foreach ($data as $art) {
            if ($art["id"] === $item) {
                array_push($produit, $art);
            }
        }
    }
}

?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Mon panier</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Accueil</a>
                            <span>Mon panier</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="panier spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th class="shoping__product">Produits</th>
                                <th>Prix</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($produit as $k => $it) { ?>

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5><?php echo $it["nom_produit"] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?php echo $it["prix_produit"] ?>
                                    </td>
                                    <!--<td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>-->

                                    <td class="delete_pr shoping__cart__item__close">
                                        <span class="id_pr" hidden><?php echo($k)?></span>
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__cart__btns">
                        <a href="./offres.php" class="primary-btn cart-btn">CONTINUER SHOPPING</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__payement">
                        <ul>
                            <li>Total commande
                                <span><?php if (isset($_SESSION["prix_pr"])) echo($_SESSION["prix_pr"]); else echo 0;
                                    ?> FCFA</span></li>
                        </ul>
                        <a href="./payement.php" class="primary-btn">PASSER AU PAYEMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <script>
        $(".delete_pr").click(function () {


           // console.log($(this).find(".id_pr").text());
           deleteAuPanier($(this).find(".id_pr").text())

        });


        function deleteAuPanier(id) {

            $.ajax({
                method: "POST",
                url: window.location.origin + "/commande/panier.php?action=2",
                data: {id: id}
            })
                .done(function (data) {

                    window.location.reload();
                });
        }

    </script>

<?php include 'layouts/footer.php'; ?>