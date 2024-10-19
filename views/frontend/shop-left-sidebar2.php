<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';
include '../../controllers/produits/produitsController.php';
include '../../controllers/panier&commande/PanierC.php';
include '../../public/util/processPanier.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
$prod = new ProduitCtrl();
$fonctions = new PanierCtrl;

$page = $_GET['page'];
$next = $page + 1;
$previous = $page-1;
$tab_univ=array();
$temoin2=$fonctions->getAllProd2();
$tab_univ=$temoin2;
$url="shop-left-sidebar.php"; 

//calcul total du panier
$total1=0;
foreach ($tab_univ as $key => $produit){
  $total1=$total1+($produit['quantity']*$produit['prix']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <title>Produits</title>
</head>

<body class="">
    <div class="site-wrapper">
        <header class="header petmark-header-1">
            <div class="header-wrapper">
                <!-- Site Wrapper Starts -->
                <div class="header-top bg-ash">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6 text-center text-sm-left">
                                <p class="font-weight-300">Welcome to Acacia Pet Food</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="header-top-nav right-nav">
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Language:</span><a class="slide-down--btn" href="#" role="button">
                                            English<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">En</a></li>
                                            <li><a href="#">En</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Currency:</span><a class="slide-down--btn" href="#" role="button">
                                            USD<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">EUR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <!-- Template Logo -->
                            <div class="col-lg-3 col-md-12 col-sm-4">
                                <div class="site-brand  text-center text-lg-left">
                                    <a href="index.php" class="brand-image">
                                        <img src="image/main-logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7 order-3 order-md-2">
                                <form class="category-widget">
                                    <input type="text" name="search" id="search" placeholder="Search  products">
                                    <div class="search-form__group search-form__group--select">
                                        <select name="category " id="searchCategory"
                                            class="search-form__select nice-select">
                                            <option value="all">CATHEGORIES</option>
                                            <?php
                                            $rows = $cathProd->getAllCathProd();
                                            foreach($rows as $row):
                                        ?>
                                            <option><?=$row['designation'];?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button class="search-submit"><i class="fas fa-search"></i></button>
                                </form>
                                <div class="list-group"
                                    style="position: absolute ; width:94%; display:none; z-index:99">
                                    <div id="show-list">
                                        <a href="#" class="list-group-item list-group-item-action ">

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Call Login & Track of Order -->
                            <div class="col-lg-4 col-md-5 col-sm-8 order-2 order-md-3">
                                <div class="header-widget-2 text-center text-sm-right ">
                                    <div class="call-widget">
                                        <p>Appellez Nous: <i class="icon ion-ios-telephone"></i><span
                                                class="font-weight-mid">+216 52 73 93 85</span></p>
                                    </div>
                                    <ul class="header-links">
                                        <li><a href="cart.php"><i class="fas fa-car-alt"></i> Commandes</a></li>
                                        <li><a href="login-register.html"><i class="fas fa-user"></i> Se connecter</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav-wrapper">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="row no-gutters">
                            <!-- Category Nav -->
                            <div class="col-lg-3 col-md-8">
                                <!-- Category Nav Start -->
                                <div class="category-nav-wrapper bg-blue">
                                    <div class="category-nav">
                                        <h2 class="category-nav__title primary-bg" id="js-cat-nav-title"><i
                                                class="fa fa-bars"></i>
                                            <span>All Categories</span></h2>

                                        <ul class="category-nav__menu" id="js-cat-nav">
                                            <?php 
                                                $rows = $animalProd->getAllAnimalProdSelect();
                                                $i=1;
                                                foreach($rows as $row):
                                            ?>
                                            <li class="category-nav__menu__item has-children">
                                                <a href="shop.html"><?= $row['type_animal'] ?></a>
                                                <div class="category-nav__submenu">
                                                    <div class="category-nav__submenu--inner">
                                                        <ul>
                                                            <?php
                                                            $caths = $cathProd->getCathByTypeAnimal($row['type_animal']);
                                                            foreach($caths as $cath):
                                                            ?>
                                                            <li><a href="shop.html"><?=$cath['designation']; ?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; ?>

                                            <li class="category-nav__menu__item hidden-menu-item">
                                                <a href="shop.html">Jewlery &amp; watches</a>
                                            </li>
                                            <li class="category-nav__menu__item">
                                                <a href="shop.html" class="js-expand-hidden-menu"> Plus de
                                                    cathegories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Category Nav End -->
                                <div class="category-mobile-menu"></div>
                            </div>
                            <!-- Main Menu -->
                            <div class="col-lg-7 d-none d-lg-block">
                                <nav class="main-navigation">
                                    <!-- Mainmenu Start -->
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item">
                                            <a href="index.php" class="mainmenu__link">Accueil</a>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="e-consulting.php" class="mainmenu__link">e-consultation</a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="forum.php" class="mainmenu__link">Forum</a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="blog.php" class="mainmenu__link">Blog</a>

                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="shop-left-sidebar2.php?page=1" class="mainmenu__link">Produits</a>
                                            <ul class="megamenu three-column">
                                                <?php 
                                                    foreach($rows as $row):
                                                ?>
                                                <li>
                                                    <a href="shop.html"><?=$row['type_animal']; ?></a>
                                                    <ul>
                                                        <?php 
                                                            $caths = $cathProd->getCathByTypeAnimal($row['type_animal']);
                                                            foreach($caths as $cath):
                                                            ?>
                                                        <li>
                                                            <a
                                                                href="shop-left-sidebar.php?page=1"><?=$cath['designation'];?></a>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>

                                        </li>
                                    </ul>
                                    <!-- Mainmenu End -->
                                </nav>
                            </div>
                            <!-- Cart block-->
                            <div class="col-lg-2 col-6 offset-6 offset-md-0 col-md-3 order-3">
                                <div class="cart-widget-wrapper slide-down-wrapper">
                                    <div class="cart-widget slide-down--btn">
                                        <div class="cart-icon">
                                            <i class="ion-bag"></i>
                                            <span class="cart-count-badge">
                                                <?php echo count($tab_univ);  ?>
                                            </span>
                                        </div>
                                        <div class="cart-text">
                                            <span class="d-block">Your cart</span>
                                            <strong><span class="amount"><span class="currencySymbol">$
                                                        <?php  echo $total1;  ?></span></span></strong>
                                        </div>
                                    </div>
                                    <div class="slide-down--item ">
                                        <div class="cart-widget-box">
                                            <ul class="cart-items">
                                                <form method="POST">
                                                    <li class="single-cart">
                                                        <?php
                                                        $array=array();
                                                        $array=$tab_univ;
                                                        foreach($array as $produit):
                                                        ?>
                                                        <div href="#" class="cart-product">
                                                            <div class="cart-product-img">
                                                                <img src="../../public/img/produits/home-1/<?php echo $produit['image']; ?>"
                                                                    alt="Selected Products">
                                                            </div>
                                                            <div class="product-details">
                                                                <h4 class="product-details--title">
                                                                    <?php echo $produit['designation']; ?></h4>
                                                                <span class="product-details--price">
                                                                    <?php echo $produit['quantity']; ?> x $
                                                                    <?php echo $produit['prix'];?></span>

                                                            </div>
                                                            <a class="cart-cross"
                                                                href="shop-left-sidebar.php?action=delete&id=<?php echo $produit['id']?>&url=<?php echo $url?>"
                                                                style="font-weight: 500px">x</a>
                                                        </div>


                                                        <?php
                            endforeach
                            ?>
                                                    </li>
                                                </form>
                                                <li class="single-cart">
                                                    <div class="cart-product__subtotal">
                                                        <?php if (count($tab_univ)>0 and isset($total1)) {?>
                                                        <span class="subtotal--title">Total</span>
                                                        <span class="subtotal--price"> $ <?php
                              echo $total1;
                            }
                            else{
                              echo "<span style='text-align :center; margin-left: 25%;'>Votre panier est vide</span>";
                            }  ?></span>
                                                    </div>
                                                </li>
                                                <li class="single-cart">
                                                    <div class="cart-buttons">
                                                        <a href="cart.php" class="btn btn-outlined">View Cart</a>
                                                        <a href="checkout.php" class="btn btn-outlined">Check Out</a>
                                                    </div>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12 d-flex d-lg-none order-2 mobile-absolute-menu">
                                <!-- Main Mobile Menu Start -->
                                <div class="mobile-menu"></div>
                                <!-- Main Mobile Menu End -->
                            </div>
                        </div>
                    </div>


                    <div class="row">

                    </div>
                </div>
                <div class="fixed-header sticky-init">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <!-- Sticky Logo Start -->
                                <a class="sticky-logo" href="index.php">
                                    <img src="image/main-logo.png" alt="logo">
                                </a>
                                <!-- Sticky Logo End -->
                            </div>
                            <div class="col-lg-9">
                                <!-- Sticky Mainmenu Start -->

                                <ul class="mainmenu sticky-menu">
                                    <li class="mainmenu__item  ">
                                        <a href="index.php" class="mainmenu__link">Accueil</a>
                                    </li>
                                    <li class="mainmenu__item ">
                                        <a href="#" class="mainmenu__link">Forum</a>
                                    </li>
                                    <li class="mainmenu__item ">
                                        <a href="e-consulting.php" class="mainmenu__link">e-consultation</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="blog.php" class="mainmenu__link">Blog</a>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                        <a href="shop-left-sidebar2.php?page=1" class="mainmenu__link">Produits</a>
                                        <ul class="megamenu three-column">
                                            <?php 
                                                    foreach($rows as $row):
                                                ?>
                                            <li>
                                                <a href="product-details.html"><?=$row['type_animal']; ?></a>
                                                <ul>
                                                    <?php 
                                                        $cath1s = $cathProd->getCathByTypeAnimal($row['type_animal']);
                                                        foreach($cath1s as $cath1):
                                                        ?>
                                                    <li><a href="product-details.html"><?= $cath1['designation'];?></a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="sticky-mobile-menu  d-lg-none">
                                    <span class="sticky-menu-btn"></span>
                                </div>
                                </nav>
                                <!-- Sticky Mainmenu End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Modal -->
        <div class="modal modalBt fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="pm-product-details">
                        <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                            <!-- Blog Details Image Block -->
                            <div class="col-md-6">
                                <div class="image-block">
                                    <!-- Zoomable IMage -->
                                    <img id="zoom_03" src="image/product/product-details/product-details-1.jpg"
                                        data-zoom-image="image/product/product-details/product-details-1.jpg" alt="" />                      
                                </div>
                            </div>

                            <div class="col-md-6 mt-4 mt-lg-0">
                                <div class="description-block">
                                    <div class="header-block">
                                        <h3>Diam vel neque</h3>
                                    </div>
                                    <!-- Price -->
                                    <p class="price"><span class="old-price">250$</span>300$</p>
                                    <!-- Rating Block -->
                                    <div class="rating-block d-flex  mt--10 mb--15">
                                        <p class="rating-text"><a href="#comment-form">See all features</a></p>
                                    </div>
                                    <!-- Blog Short Description -->
                                    <div class="product-short-para">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est
                                            tristique auctor. Donec non est at libero vulputate rutrum.
                                        </p>
                                    </div>
                                    <div class="status">
                                        <i class="fas fa-check-circle"></i>300 IN STOCK
                                    </div>
                                    <!-- Amount and Add to cart -->
                                    <form action="https://demo.hasthemes.com/petmark-v5/petmark/" class="add-to-cart">
                                        <div class="count-input-block">
                                            <input type="number" class="form-control text-center" value="1">
                                        </div>
                                        <div class="btn-block">
                                            <a href="#" class="btn btn-rounded btn-outlined--primary">Add to cart</a>
                                        </div>
                                    </form>
                                    <!-- Sharing Block 2 -->
                                    <div class="share-block-2 mt--30">
                                        <h4>SHARE THIS PRODUCT</h4>
                                        <ul class="social-btns social-btns-3">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>//
        </div>

        <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </div>
        </nav>

        <main class="section-padding shop-page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9 order-lg-2 mb--40">
                        <div class="shop-toolbar mb--30">
                            <div class="row align-items-center">
                                <div class="col-5 col-md-3 col-xl-4">
                                    <!-- Product View Mode -->
                                    <div class="product-view-mode">
                                        <a href="#" class="sortting-btn" data-target="list "><i
                                                class="fas fa-list"></i></a>
                                        <a href="#" class="sortting-btn  active" data-target="grid"><i
                                                class="fas fa-th"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-9 col-xl-8 mt-3 mt-md-0  pr-md-0">
                                    <div class="sorting-selection">
                                        <div class="row align-items-center pl-md-0 pr-md-0 no-gutters">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="result"
                            class="shop-product-wrap grid with-pagination row border grid-four-column  mr-0 ml-0 no-gutters">
                            <?php 
                            $produits = $prod->getAllProdPagnFront();
                            foreach($produits as $produit):
                            ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="pm-product">
                                <form method="POST">
                                    <a href="product-details.php?idProd=<?= $produit['id_produit'];?>" class="image">
                                        <img src="../../public/img/produits/home-1/<?= $produit['img'];?>" alt="">
                                    </a>
                                    <div class="hover-conents">
                                        <ul class="product-btns">
                                            <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                            <li>
                                                <a href="./shop-left-sidebar.php?page=1?idProdMod<?= $produit['id_produit'];?>"
                                                    data-toggle="modal" data-target="#quickModal"><i
                                                        class="ion-ios-search loupe" id="<?= $produit['id_produit'];?>" value="<?= $produit['id_produit'];?>"></i></a>
                                                        
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <h3 class="font-weight-500"><a
                                                href="product-details.html"><?= $produit['designation'];?></a></h3>
                                        <div class="price text-red">
                                            <span class="old"><?= $produit['prix_vente'];?>$</span>
                                            <span><?= $produit['prix_achat'];?>$</span>
                                        </div>
                                        <div class="btn-block grid-btn" style="left:-15px;"> 
                                    <input type="submit" name="boutton" value="Add to Cart" class="btn btn-outlined btn-rounded">
                                    <input style="height: 30px; width: 30px;margin-left: 20px;border-radius: 30%;" type="number" name="quantite" value="1"/>
                                         </div>
                                        <input type="hidden" name="id_produit" value="<?= $produit['id_produit'];?>">
                                        <input type="hidden" name="designation" value="<?= $produit['designation'];?>">
                                        <input type="hidden" name="prix" value="<?= $produit['prix_achat'];?>">
                                        <input type="hidden" name="image" value="<?= $produit['img'];?>">

                                    </div>
                                </form>
                                </div>
                            </div>
                            <?php 
                            endforeach;
                            ?>
                        </div>
                        <div class="mt--30">
                            <div class="pagination-widget">
                                <div class="site-pagination">
                                    <?php 
                                    if($previous ==0):
                                    ?>
                                    <a class="page-link" tabindex="-1" aria-disabled="true">|&lt;&lt;</a>
                                    <?php else :?>
                                    <a class="single-pagination"
                                        href="./shop-left-sidebar2.php?page=<?=$previous;?>">|&lt;&lt;</a>
                                    <?php endif; ?>
                                    <?php 
                                        $countRow = $prod->countRowsFront();
                                        for($i=1; $i<=$countRow; $i++):
                                    ?>
                                    <a href="./shop-left-sidebar2.php?page=<?=$i;?>"
                                        class="single-pagination active"><?=$i;?></a>
                                    <?php endfor; ?>
                                    <?php
                                    if($next>$countRow):
                                    ?>
                                    <a class="page-link" tabindex="-1" aria-disabled="true">&gt;&gt;|</a>
                                    <?php
                                    else:
                                    ?>
                                    <a class="single-pagination"
                                        href="./shop-left-sidebar2.php?page=<?=$next ;?>">&gt;&gt;|</a>
                                    <?php endif;?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 order-lg-1">
                        <div class="sidebar-widget">
                            <div class="single-sidebar">
                                <h2 class="sidebar-title">PAR CATHEGORIES</h2>
                                <ul class="sidebar-filter-list">
                                    <?php 
                                        $rows = $cathProd->getAllCathProd();
                                        foreach($rows as $row):
                                    ?>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input product_check" id="cath"
                                                value="<?=$row['designation'];?>">
                                            <label class="form-check-label"><?=$row['designation'];?></label>
                                        </div>
                                    </li>
                                    <?php 
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                            <div class="single-sidebar">
                                <h2 class="sidebar-title">Marque</h2>
                                <ul class="sidebar-filter-list">
                                    <?php 
                                        $marqs = $prod->getAllBrand();
                                        foreach($marqs as $marq):
                                        ?>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input product_check" id="marq"
                                                value="<?=$marq['marque'];?>">
                                            <label class="form-check-label"><?=$marq['marque'];?></label>
                                        </div>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require './footerContent.php'; ?>
    </div>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="./js/autocompleteSearch.js"></script>
    <script src="./js/filterSystem.js" type="text/javascript"></script>
    <script src="./js/boiteModale.js" type="text/javascript"></script>
</body>

</html>