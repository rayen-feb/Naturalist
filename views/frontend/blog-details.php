<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

include '../../controllers/blog/blogC.php';


$blog = new blogC();
$commentaire = new CommentaireC();
$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
?>



<?php require './header.php'; ?>
    <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
        </ol>
      </div>
    </nav>
    <main class="product-details-section">
      <div class="container">
        <div class="pm-product-details">
          <div class="row">
            <div class="col-md-6">
              <?php

//blog

//require_once "./db.php"; //la connexion avec la bd




$id = $_GET['id_blog'];
// echo $id_comm ; 
// $sql1 = "SELECT * FROM blog where id_blog=:id_blog ";
// $stmt1 = $pdo->prepare($sql1);
// $stmt1->execute([
//   ':id_blog' => $id
// ]);
$row = $blog->getBlogById($id);
foreach ($row as $ms) {
  $image_Blog = $ms['image_blog'];
  $nom_Blog = $ms['nom_blog'];
  $date_Blog = $ms['date_blog'];
  $contenu = $ms['contenu_blog'];
  
  ?>
              <div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
                <!-- Block4 -->
                <div class="blo4 p-b-63">
                  <!-- - -->
                  <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative ">

                    <center> <img src="../../public/img/blog/<?php echo $image_Blog; ?>" alt="IMG-BLOG"></center>
                  </div>

                  <!-- - -->
                  <div class="text-blo4 p-t-33">
                    <h4 class="p-b-16">
                      <a h class="tit1"><?php echo $nom_Blog; ?></a>
                    </h4>
                    <?php
							}
								?>
                    <div class="txt32 flex-w p-b-24">
                      <p>
                        <text cols="30">date :<?php echo $date_Blog; ?> <span class="m-r-6 m-l-4"></text></span>
                        </span></p>
                    </div>

                  </div>
                  <p>
                    <text cols="30" rows="10"><?php echo $contenu; ?> </text></p>
                </div>
              </div>

              <div>

                <span><B>
                    <font size="+3"> commentaires</font>
                  </B></span>

                <?PHP


      $id_comm = $_GET['id_blog'];

        $commentaires = $commentaire->getCommentaireById($id_comm);
    
              foreach($commentaires as $comm):
            ?>
                <div class="image-block">
                  <!-- Zoomable IMage -->
                  <div>
                  <hr>
                    <span>
                      <font size="+1"> <b> <?= $comm['nom'];?></b></font>
                    </span>
                  </div>
                  <p><span> <?= $comm['date'];?></span></p>
                  <p><span> <text>
                        <font size="+0.5"> <?= $comm['contenu'];?></font>
                      </text></span></p>

                </div>
                <?php endforeach; ?>
              </div>

              <div class="container-fluid">
                <!-- formulaire ajouter commentaire-->
                <h1 class="titre1">Ajouter Commentaire</h1>
                <form class="form-size" action="../../public/util/processCommentaire.php?" method="post">
                  <?php
          
           $id_comm = $_GET['id_blog'];?>
                  <div class="form-group">
                    <label for="exampleInputNom">nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputNom" aria-describedby="emailHelp"
                      placeholder="Nom ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNom">email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputNom"
                      aria-describedby="emailHelp" placeholder="email ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNom">commentaire</label>
                    <input type="text" name="contenu" class="form-control" id="exampleInputNom"
                      aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">

                    <input type="hidden" name="id_du_blog" class="form-control" id="exampleInputNom"
                      aria-describedby="emailHelp" placeholder=" " value=<?php echo $id_comm; ?>>
                  </div>
                  <button type="submit" name="ajouterCommentaire" class="btn btn-outline-success my-2 my-sm-0">Ajouter
                    Commentaire</button>
                </form>
              </div>
              <!-- fin ajout commentaire-->
              <div class="col-lg-4 col-xl-3">

              </div>
            </div>
          </div>
          </section>
    </main>


    <?php require 'footer.php'; ?>