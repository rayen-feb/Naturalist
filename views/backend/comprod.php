<?php 
  session_start();
  include_once '../../controllers/produits/comprodC.php';
?>

<?php require './header.php';?>
    <!-- Side Navbar -->
    <?php require './sideNavBar.php'?>
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
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French</span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="produits.html">Produits</a></li>
              </ul>
            </div>
            <div class="col-sm-9">
              
            </div>
        </div>          
        </div>
      </div>
      <section>
        <div>
        <div class="container-fluid">
          <div class="row">
          <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <!--a class="navbar-brand btn btn-primary btnSpecial" href="ajouterProduits.php">Ajouter</!--a-->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <!--form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="search_text" type="search" placeholder="Search" aria-label="Search">
              </§form-->
            </div>
          </nav>
          </div>
          <div class="row">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="search_text" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
          </nav>
          </div>
          <h1 class="titre1">GERER LES COMMENTAIRES SUR LES PRODUITS</h1>
          <table class="table  table-hover" id="table_data">
            <thead>
            <!-- <form method="POST" action="">
        <select name="colonne" class="form-control mr-sm-2"  style="width: 180px;">
        <option value="all" >Tous</option>
          <option value="date_reclamation">Date</option>
          <option value="Objet">Utilisateur</option>
        </select>
          <input type="text" name="recherche" placeholder="Rechercher" class="form-control mr-sm-2"> 
          <input type="submit" name="chercher" value="Valider" class="form-control mr-sm-2" style="width: 100px;">
          

       </form> -->
              <tr>
                <th scope="col"></th>
                <th scope="col">Nom</th>
                <th scope="col">Mail</th>
                <th scope="col">Commentaire</th>
              </tr>
            </thead>
            <?php
              $comprodCtrl = new comprodC();
              $rows = $comprodCtrl->getAllComprod();
              $i=1;
              foreach($rows as $row) :
            ?>
              <tbody>
                <td><?=$i++;?></td>
                
                <td><?=$row['nom']; ?></td>
                <td><?=$row['mail']; ?></td>
                <td><?=$row['comment'];?></td>
               
                <td>
                    <!--a href="../../public/util/processProd.php?edit=<?php echo $row['id_comment'] ?>">
                      <i class="far fa-edit"></i>
                    </!--a-->  
                    <a href="../../public/util/processComprod.php?delete=<?php echo $row['id_comment'] ?>">
                      <i class="fas fa-trash-alt"></i> 
                    <a>
                </td>
              </tbody>
            <?php endforeach ?>
          </table>
          <nav aria-label="...">
            <ul class="pagination d-flex flex-row-reverse ">
              <li class="page-item disabled">
                <span class="page-link">Previous</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">2</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
        </div>
      </section>
      <?php require './footer.php'; ?>
      
    <script type="text/javascript" >
    $(document).ready(function(){
    $("#search_text").keyup(function(){
        var search = $(this).val();
        $.ajax({
            url:'../../public/util/processComprod.php',
            method:'get',
            data:{query:search},
            success:function(response){
              console.log("response: " + response);

                $("#table_data").html(response);
            },
            error:function(response){
                alert(response);
                console.log('reponse:'+ response);
            }
        });
    });
});
    </script>
