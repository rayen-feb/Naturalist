 <?php
// session_start();
// die("je suis là");
?>
<nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/Naturalists jpeg.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">
               <?php   
               if(isset($_SESSION['nom']))
                                          {
             echo  '<p>'.$_SESSION['nom'].'</p>';

                 }
                 ?>
            </h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
            <li><a href="blogDash.php"> <i class="fas fa-blog"></i>Blog</a></li>
   <li><a href="commentairesDash.php"> <i class="fas fa-comment-dots"></i>Commentaires Blog</a></li>
         <li><a href="index.php"> <i class="fas fa-shopping-bag"></i>Commandes</a></li>
            <li><a href="e-consultation.php"> <i class="fas fa-user-md"></i>E-consulting</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fab fa-product-hunt"></i></i>Gestion Produit </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="cathegorieProd.php?page=1">Cathégorie</a></li>
                <li><a href="animalProd.php?page=1">Animal</a></li> 
                <li><a href="produits.php?page=1">Produits</a></li>
                <li><a href="comprod.php">Commentaires</a></li>
              </ul>
            </li>

            <li> <a href="afficheruser.php"> <i class="fas fa-users"></i>Utilisateurs</a></li>  
           <li><a href="forum.php"> <i class="fas fa-comments"></i>Forum </a></li>
          <li> <a href="contact.php"> <i class="fas fa-address-book"></i>Contact</a></li> 
           
               
            <li><a href="stat.php"> <i class="fas fa-chart-pie"></i>Statistiques</a></li> 
          </ul>
        </div>
      </div>
    </nav>
