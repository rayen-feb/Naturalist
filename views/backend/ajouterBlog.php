<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>
            <li><a href="forms.html"> <i class="icon-form"></i>Forms</a></li>
            <li><a href="blogDash.html"> <i class="icon-form"></i>Blog</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fab fa-product-hunt"></i></i>Gestion Produit </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="cathegorieProd.php?">Cathégorie</a></li>
                <li><a href="animalProd.php?page=1">Animal</a></li> 
                <li><a href="produits.php">Produits</a></li>
              </ul>
            </li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts</a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Tables</a></li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page</a></li> 
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French                                                         </span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="breadcrumb-holder">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="produits.html">Produits</a></li>
              </ul>
            </div>
        </div>          
        </div>
      </div>
      <section>
        <div>
        <?php
          if(isset($_SESSION['message'])):
        ?>
      <div class="alert-msg alert alert-<?=$_SESSION['msg_type'];?>">
      <p class = "alert-msg">
      <?php 
          echo $_SESSION['message'];
          unset($_SESSION['message']);
      ?>
      </p>
      </div>
      <?php endif ?>
    </div>
      
        <div class="container-fluid">
          <!-- formulaire ajouter produit-->
          <h1 class="titre1">BLOG</h1>
          <form class="form-size" action="../../public/util/processBLog.php" method="post">
                <div class="form-group">
                    <label for="exampleInputNom">NOM BLOG</label>
                    <input type="text" name="nomBlog" class="form-control" id="exampleInputNom" placeholder="Nom blog" value="<?php echo isset($_GET["nomBlog"]) ? $_GET["nomBlog"]:'';?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputNom">CONTENU BLOG</label>
                    <input type="text" name="contenuBLog" class="form-control" id="exampleInputNom" placeholder="Contenu du blog" value="<?php echo isset($_GET["contenuBlog"]) ? $_GET["contenuBlog"]:'';?>">
                </div>
                <div class="custom-file">
                    <input type="file" name="img" value="" class="custom-file-input" id="validatedCustomFile" >
                    <label class="custom-file-label" for="validatedCustomFile">choisir une image</label>
                  </div>
                
            
        
        <div class="col-12">
            <?php if(isset($_GET["update"]) and $_GET["update"]==true) :?>

              <input type="hidden" name="idBlog" value = "<?php  echo isset($_GET["idBlog"]) ? $_GET["idBlog"]:'';?>">
              <button type="submit" name="modifierBlog" class="btn btn-primary btn-engrst">Modifier</button>
              <?php else :?>
                <button type="submit" name="ajouterBlog" class="btn btn-primary btn-engrst">Ajouter</button>
              <?php endif ?>
            </div> 
          </form>
        </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2020</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html> 