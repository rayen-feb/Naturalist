<?php

include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/produitsController.php';
include '../../controllers/produits/animalProdController.php';


$animalProd = new AnimalProdController();
$cathProd = new CathProdController();
$prod = new ProduitCtrl();

$page = $_GET['page'];
$next = $page + 1;
$previous = $page-1;  
?>

<?php require './header.php'; ?>
    <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal"
      aria-hidden="true">
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
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
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
                      <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                      <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--end Modal box-->

    <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Produits</li>
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
                    <a href="#" class="sortting-btn" data-target="list "><i class="fas fa-list"></i></a>
                    <a href="#" class="sortting-btn  active" data-target="grid"><i class="fas fa-th"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div id="result" class="shop-product-wrap grid with-pagination row border grid-four-column  mr-0 ml-0 no-gutters">
              <?php 
              $produits = $prod->getAllProdPagnFront();
              foreach($produits as $produit):
              ?>
              <div class="col-lg-4 col-sm-6">
                <div class="pm-product">
                  <a href="product-details.php?idProd=<?= $produit['id_produit'];?>" class="image">
                    <img src="../../public/img/produits/home-1/<?= $produit['img'];?>" alt="">
                  </a>
                  <div class="hover-conents">
                    <ul class="product-btns">
                      <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                      <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                      <li>
                        <a href="./shop-left-sidebar.php?page=1?idProdMod<?= $produit['id_produit'];?>" data-toggle="modal" data-target="#quickModal"><i class="ion-ios-search"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="content">
                    <h3 class="font-weight-500"><a href="product-details.html"><?= $produit['designation'];?></a></h3>
                    <div class="price text-red">
                      <span class="old"><?= $produit['prix_vente'];?></span>
                      <span><?= $produit['prix_achat'];?></span>
                    </div>
                    <div class="btn-block grid-btn">
                      <a href="cart.php" class="btn btn-outlined btn-rounded btn-mid">Add to Cart</a>
                    </div>
                    
                  </div>
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
                  <a class="page-link"  tabindex="-1" aria-disabled="true">|&lt;&lt;</a>
                  <?php else :?>
                    <a class="single-pagination" href="./shop-left-sidebar.php?page=<?=$previous;?>">|&lt;&lt;</a>
                  <?php endif; ?>
                  <?php 
                    $countRow = $prod->countRowsFront();
                    for($i=1; $i<=$countRow; $i++):
                  ?>
                    <a href="./shop-left-sidebar.php?page=<?=$i;?>" class="single-pagination active"><?=$i;?></a>
                  <?php endfor; ?>
                  <?php
                    if($next>$countRow):
                    ?>
                    <a class="page-link"  tabindex="-1" aria-disabled="true">&gt;&gt;|</a>
                    <?php
                      else:
                    ?>
                    <a class="single-pagination" href="./shop-left-sidebar.php?page=<?=$next ;?>">&gt;&gt;|</a>
                    <?php endif;?>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xl-3 order-lg-1">
            <div class="sidebar-widget">
              <div class="single-sidebar">
                <h2 class="sidebar-title"> CATHEGORIES</h2>
                <ul class="sidebar-filter-list">
                  <?php 
                    $rows = $cathProd->getAllCathProd();
                    foreach($rows as $row):
                  ?>
                  <li>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input product_check" id="cath" value="<?=$row['designation'];?>">
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
                      <input type="checkbox" class="form-check-input product_check" id="marq" value="<?=$marq['marque'];?>">
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
    <?php include './footerContent.php'; ?>
  </div>
  <script src="js/plugins.js"></script>
  <script src="js/ajax-mail.js"></script>
  <!-- <script src="js/custom.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="./js/filterSystem.js" type="text/javascript">
  </script>
  <script type="text/javascript" src="./js/autocompleteSearch.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/shop-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:31 GMT -->

</html>