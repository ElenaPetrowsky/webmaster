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


    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Catégories</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Toutes catégories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Que voulez-vous ?">
                                <button type="submit" class="site-btn">RECHERCHER</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Passer au payement</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Accueil</a>
                            <span>Payement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- payement Section Begin -->
    <section class="payement spad">
        <div class="container">
            <div class="payement__form">
                <h4>Détails de la commande</h4>
                <form action="#" class="auth">
                    <div class="row">
                        <!-- Facture -->
                        <div class="col-lg-6 col-md-6">
                            <div class="payement__order">
                                <h4>Votre commande</h4>
                                <div class="payement__order__products">Produits <span>Total</span></div>
                                <ul>
                                    <?php foreach ($produit as $k => $it) { ?>
                                        <li><?php echo $it["nom_produit"]?> <span><?php echo $it["prix_produit"]?>FCFA</span></li>
                                    <?php } ?>
                                </ul>
                                <div class="payement__order__total">Total <span><?php if(isset($_SESSION["prix_pr"])) echo ($_SESSION["prix_pr"]); else echo  0;
                                        ?>FCFA</span></div>
                                <div class="payement__input__checkbox">
                                    <label for="payment">
                                        J'ai lu les Conditions Générales de Vente du site
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <br>
                                <button type="submit" class="site-btn">VALIDER COMMANDE</button>
                            </div>
                        </div>
                        <!-- Infos client -->
                        <div class="col-lg-6 col-md-6">
                            <div class="input-form">
                                <input type="text" name="nom" id="nom" placeholder=" ">
                                <label for="nom">Nom client</label>
                            </div>
                            <div class="input-form">
                                <input type="text" name="prenom" id="prenom" placeholder=" ">
                                <label for="prenom">Prénom client</label>
                            </div>
                            <div class="input-form">
                                <input type="email" name="email" id="email" placeholder=" ">
                                <label for="email">Adresse email</label>
                            </div>
                            <div class="input-form">
                                <input type="text" name="ville" id="ville" placeholder=" ">
                                <label for="ville">Ville</label>
                            </div>
                            <div class="input-form">
                                <input type="text" name="adresse" id="adresse" placeholder=" ">
                                <label for="adresse">Adresse</label>
                            </div>
                            <div class="input-form">
                                <input type="tel" name="contact" id="contact" placeholder=" " pattern="^[0-9]{10}$">
                                <label for="contact">Contact</label>
                            </div>
                            <div class="submit-form">
                                <button type="submit" name="validate">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- payement Section End -->

<?php include 'layouts/footer.php'; ?>