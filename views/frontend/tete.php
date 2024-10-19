   <div class="site-wrapper">
        <header class="header petmark-header-1">
            <div class="header-wrapper">
                <!-- Site Wrapper Starts -->
                <div class="header-top bg-ash">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6 text-center text-sm-left">
                                <p class="font-weight-300">Welcome to Naturalia</p>
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
                                        <?php   
                                 if(isset($_SESSION['nom']))
                                          {
             echo  '<li><a ><i class="fas fa-user"></i> '.$_SESSION['nom'].' </a></li>';

              
                      
                        

                                  echo '<li><a href="logOut.php">Disconnect</a></li>';
                                                 
                                          }
                                           else
                                          {
                                     echo '<li><a href="login-register.php"><i class="fas fa-user"></i> Register or Sign in</a></li>';
                                          }
                                     ?>
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
                                        <a href="forum.php" class="mainmenu__link">Forum</a>
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