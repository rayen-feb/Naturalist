<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
?>

<?php require './header.php'; ?>
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">E-consulting</li>
    </ol>
  </div>
</nav>

<section class="blog-page-section">
  <div class="container">
    <div class="row">

      <form action="../../public/util/processConsultation.php" class="form-size" method="post">

        <h1 class="login-title titre1">VOTRE VETERINAIRE EN LIGNE</h1>
        <div class="login-form">
          <div class="row">
            <div class="col-md-12 col-12 mb--20">
              <label>Objet</label>
              <input class="mb-0" name="objet" type="text" placeholder="sujet">
            </div>
            <div class="col-md-12 col-12 mb--20">
              <label>Type animal</label>
              <input class="mb-0" type="text" name="typeAnimal" placeholder="type de votre animal">
            </div>
            <div class="col-12 mb--20">
              <label>age</label>
              <input class="mb-0" type="text" name="age" placeholder="age (exp: 1 mois / 2 ans ...)">
            </div>
            <div class="col-12 mb--20">
              <label>Description</label>
              <textarea class="form-control" name="descrp" id="validationTextarea"
                placeholder="Expliquez d'avantage"></textarea>
            </div>
            <div class="col-md-12">
              <div class="d-flex align-items-center flex-wrap">
                <button type="submit" name="envoyer" class="btn btn-black   mr-3">envoyer</button>
              </div>
            </div>

          </div>
        </div>

      </form>
    </div>
  </div>
</section>
<?php require 'footer.php'; ?>