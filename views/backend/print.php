
<?php 
  include_once '../../controllers/produits/produitsController.php';
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="stylesheet" href="css/print.css" media="print">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>
  <body>
    <div class="page login-page">
      <div class="container">
      <h1 class="titre1">LISTE DES PRODUITS</h1>
          <table class="table  table-bordered" id="table_data">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Cathégorie</th>
                <th scope="col">Désignation</th>
                <th scope="col">Marque</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix Achat</th>
                <th scope="col">Prix vente</th>
                <th scope="col">Disponibilité</th>
              </tr>
            </thead>
            <?php
              $prodCtrl = new ProduitCtrl();
              $rows = $prodCtrl->getAllProd();
              $i=1;
              foreach($rows as $row) :
            ?>
              <tbody>
                <td><?=$i++;?></td>
                
                <td><?=$row['cathegorie']; ?></td>
                <td><?=$row['designation']; ?></td>
                <td><?=$row['marque']; ?></td>
                <td><?=$row['quantiteStock'];?></td>
                <td><?=$row['prix_achat'];?> &#36;</td>
                <td><?=$row['prix_vente'];?> &#36;</td>
                <td>
                  <?php 
                  if($row['quantiteStock']>0):
                  ?>
                  <i class="fas fa-check"></i>
                  <?php else :?>
                    <i class="fas fa-times"></i>
                  <?php endif ?>
                </td>
              </tbody>
            <?php endforeach ?>
          </table>
      <button onclick="window.print();" class="btn btn-primary" id="print-btn" >print</button>
      </div>
    </div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    
  </body>
</html>