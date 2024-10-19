<?php
  
    require_once '../../controllers/blog/BlogC.php';
    
    $commentaireC = new CommentaireC();

    $listeR=$commentaireC;

if(isset($_POST['search1']))
{
  $listeR=$commentaireC->rechercherCommentaire($_POST['valueToSearch1']);
}

if(isset($_POST['DSC']))
{ 
  $listeR=$commentaireC->tridsc();
}
 
if(isset($_POST['ASC']))
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
                <li class="breadcrumb-item active"><a href="produits.html">Recherche Blog</a></li>
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
    <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Liste des Commentaires</h4> <br>
                  <form method="POST">
                  <input type="text" name="valueToSearch1" placeholder="valeur à chercher" style="width:150px; height:39px;">
                 
                 <button type="submit"  class="btn btn-dark" name="search1"  >  <i class="fa fa-search" > </i></button>
                 <button type="submit" class="btn btn-danger pull-right " name="ASC" value="ASC">  <i class="fa fa-sort-up"> </i></button>
                  <button type="submit" class="btn btn-danger pull-right" style="margin-right:10px;"  name="DSC" value="DSC" >  <i class="fa fa-sort-down"> </i></button><br><br>
                
              </form>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm">
                      <thead >
                        <tr>
                          <th></th>
                          <th>Date</th>
                          <th>Contenu</th>
                          <th>ID_BLOG</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                        <?php
                          $i=1;
                           foreach($listeR as $commentaire) {
                             ?> 
                           <tr>
                           <td><?php echo $i ?></td>  
                           <td><?php echo $commentaire["nom"];true ?></td>
                           <td><?php echo $commentaire["date"];true ?></td>
                           <td><?php echo $commentaire["contenu"];true ?></td>
                            <td>
                            <a href="../../public/util/processCommentaire.php?delete=<?php  echo $commentaire["id_du_blog"];true ?>">
                                <i class="fas fa-trash-alt"></i>  
                            </a>
                          </td>

                          </tr>
                           <?php
                          } ?>
                      
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          <div class="row">
            <div class="col-lg-6">
            <div class="card">               
        </div>
        
        </div>
        </div>
      </section>
      <?php require './footerContent.php'; ?>
    </div>
    <?php require './script.php' ?> 
  </body>
</html> 