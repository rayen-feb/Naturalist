<?php
include '../../config.php';
include_once '../../controllers/produits/produitsController.php';

$prod = new ProduitCtrl();
$conn = config::getConnexion();

if(isset($_POST['action'])){
    $sql = "SELECT * FROM produits WHERE marque !='' ";
    if(isset($_POST['marq'])){
        $brand = implode("','", $_POST['marq']);
        $sql .= "AND  marque IN('".$brand."')";
    }
    if(isset($_POST['cath'])){
        $cath = implode("','", $_POST['cath']);
        $sql .= "AND  cathegorie IN('".$cath."')";
    }
    

    $result = $conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    $output ='';

    if(count($rows)>0){
        foreach($rows as $row){
            $output .='<div class="col-lg-4 col-sm-6">
            <div class="pm-product">
              <a href="product-details.php?idProd='.$row['id_produit'].'" class="image">
                <img src="../../public/img/produits/home-1/'.$row['img'].'" alt="">
              </a>
              <div class="hover-conents">
                <ul class="product-btns">
                  <li><a href="wishlist.html"><i class="ion-ios-heart-outline"></i></a></li>
                  <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                  <li><a href="#" data-toggle="modal" data-target="#quickModal"><i class="ion-ios-search"></i></a>
                  </li>
                </ul>
              </div>
              <div class="content">
                <h3 class="font-weight-500"><a href="product-details.html"> '.$row['designation'].'</a></h3>
                <div class="price text-red">
                  <span class="old">'.$row['prix_vente'].'></span>
                  <span>'.$row['prix_achat'].'</span>
                </div>
                <div class="btn-block grid-btn">
                  <a href="cart.php" class="btn btn-outlined btn-rounded btn-mid">Add to Cart</a>
                </div>
                
              </div>
            </div>
          </div>';
        }
    }
    else{
        $output = "<h3>Aucun produit n'a été trouver</h3>";
    }
    echo $output;
}

if (isset($_POST['query'])) {
  
  $inpText = $_POST['query'];
  $lim = 3;
  $sql = "SELECT designation, id_produit FROM produits WHERE designation OR marque LIKE :dsign LIMIT $lim";
  $stmt = $conn->prepare($sql);
  $stmt->execute(['dsign' => '%' . $inpText . '%']);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ($result) {
    foreach ($result as $row) {
      echo '<a href="product-details.php?idProd='.$row['id_produit'].'" class="list-group-item list-group-item-action border-1">' . $row['designation'] . '</a>';
    }
  } else {
    echo '<p class="list-group-item border-1">No Record</p>';
  }
}

if(isset($_GET['query1'])){

$idProd = $_GET['query1'];
$row =  $prod->getProdById($idProd);

$output ='';
foreach($row as $row){
  $output .='<div class="modal-dialog" role="document">
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
                          <img id="zoom_03" src="../../public/img/produits/home-1/'.$row['img'].'"
                              data-zoom-image="../../public/img/produits/home-1/'.$row['img'].'" alt="" />                      
                      </div>
                  </div>

                  <div class="col-md-6 mt-4 mt-lg-0">
                      <div class="description-block">
                          <div class="header-block">
                              <h3>'.$row['designation'].'</h3>
                          </div>
                          <!-- Price -->
                          <p class="price"><span class="old-price">'.$row['prix_vente'].'$</span>'.$row['prix_achat'].'$</p>
                          
                          <!-- Blog Short Description -->
                          <div class="product-short-para">
                              <p>
                              '.$row['descriptionProd'].'
                              </p>
                          </div>
                          <div class="status">
                              <i class="fas fa-check-circle"></i>'.$row['quantiteStock'].' IN STOCK
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
  </div>';
}

echo $output;


}

?>