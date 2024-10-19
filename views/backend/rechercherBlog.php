<?php
    
    require_once '../../models/blog/Blog.php';
    require_once '../../controllers/blog/BlogC.php';
    

  $CBlog = new blogC();
  
  $listeU=$CBlog;

if(isset($_POST['search']))
{
  $listeU=$CBlog->rechercherBlog($_POST['valueToSearch']);
}

if(isset($_POST['DSCU']))
{ 
  $listeU=$CBlog->tridscu();
}
 
if(isset($_POST['ASCU']))
{ 
  $listeU=$CBlog->triascu();
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
    <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Liste des blogs</h4> <br>
                  <form method="POST" >
                  <input type="text" name="valueToSearch" placeholder="valeur à chercher" style="width:150px; height:39px;">
                 
                 <button type="submit"   class="btn btn-dark" name="search"  >  <i class="fa fa-search" > </i></button>
                 <button type="submit" id="button" class=" pull-right " name="ASCU" value="ASCU">  <i class="fa fa-sort-up"> </i></button>
                  <button type="submit" class="pull-right" style="margin-right:10px;"  name="DSCU" value="DSCU" >  <i class="fa fa-sort-down"> </i></button><br><br>
                
              </form>
                  
            
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm">
                      <thead  >
                        <tr>
                          <th></th>
                          <th>Nom</th>
                          <th>Date</th> 
                          <th>Action</th>
                        </tr>
                      </thead>
                        <?php
                        $i=1;
                           foreach($listeU as $blogg) {
                             ?> 
                           <tr>
                           <td><?php echo $i++;true ?></td>
                           <td><?php echo $blogg["nom_blog"];true ?></td>
                           <td><?php echo $blogg["date_blog"];true ?></td>
                           <td>
                             <form action="supression.php" method="POST">
                             <a href="../../public/util/processBlog.php?delete=<?php echo $blogg["id_blog"] ?>">
                              <i class="fas fa-trash-alt"></i>  
                             </form>
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