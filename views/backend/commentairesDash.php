<?php
    
require_once '../../models/blog/Blog.php';
require_once '../../controllers/blog/BlogC.php';
include_once '../../controllers/blog/commentaireBlogC.php';
require_once '../../controllers/utilisateurs/UtilisateurC.php'; 


$commentaireC = new CommentaireC();
$userC =  new UtilisateurC();
$listeR=$commentaireC;

if(isset($_POST['search1']))
{
  $listeR=$commentaireC->rechercherCommentaire($_POST['valueToSearch1']);
}
 
if(isset($_POST['DSC']))
{ 
  $listeR=$commentaireC->tridsc();
}
 
if(isset($_POST['ASCU']))
{ 
  $listeR=$commentaireC->triasc();
}

?>
<?php require './header.php'; ?>
    <!-- Side Navbar -->
    <?php require './sideNavBar.php'?>
    <div class="page">
      <!-- navbar-->
      <?php require './headerContent.php'; ?>
      <div class="breadcrumb-holder">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Commentaires Blog</li>
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
      <p class="alert-msg">
        <?php echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
      </p>
      </div>
      <?php endif ?>
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
           
            <a class="navbar-brand btn btn-primary btnSpecial" href="rechercherCommentaire.php">Rechercher</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              
            </div>
          </nav>
          <h1 class="titre1">GERER VOS COMMENTAIRES</h1>
          <form method="POST">
                  
                 
                
              </form>
          <table class="table table-hover" id="table_data">
            <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">NOM </th>
              <th scope="col">DATE </th>
              <th scope="col">COMMENTAIRE</th>
              <th scope="col">ACTION</th>
            </tr>
            </thead>
            <?php
              $commentaireC = new commentaireC();
              $rows = $commentaireC->getAllCommentaire();
              // var_dump($rows);
              // die("je suis là");
              $i=1;
              foreach($rows as $row):
            ?>
              <tbody>
                  <tr>
                    <td><?=$i++;?></td>
                    <td><?php echo $userC->recupererUtilisateur1($row['id_user'])['nom']; ?></td>
                    <td><?=$row['date'];?></td>
                    <td><?=$row['contenu'];?></td>
                    <td>
                      <a href="../../public/util/processCommentaire.php?delete=<?php echo $row['id_commentaire'] ?>">
                          <i class="fas fa-trash-alt"></i>  
                      </a>
                    </td>
                </tr>
              </tbody>
            <?php endforeach ?>
          </table>
        </div>
        </div>
      </section>
      <?php require './footer.php';?> 