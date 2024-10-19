<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

include '../../controllers/blog/blogC.php';


$blog = new blogC();
$commentaire = new CommentaireC();
$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
?>

<?php 
   
    require_once '../../controllers/utilisateurs/SujetFmC.php';
   
   require_once '../../controllers/utilisateurs/UtilisateurC.php';
   
    $userC = new UtilisateurC();
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

<?php

//blog

$id = $_GET['id_blog'];

$row = $blog->getBlogById($id);
foreach ($row as $ms) {
  $image_Blog = $ms['image_blog'];
  $nom_Blog = $ms['nom_blog'];
  $date_Blog = $ms['date_blog'];
  $contenu = $ms['contenu_blog'];
  
  ?> 
<!--ici-->
<section class="blog-page-section with-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-9 left-slide-margin">
				<div class="blog-post post-details single-block">
    
        <a  class="blog-image">
            <img src="../../public/img/blog/<?php echo $image_Blog; ?>" alt="">
        </a>
    
    
    
  
    <div class="blog-content mt--30">
        <header>
            
            <h3 class="blog-title"> <a href="blog-details.html"><?php echo $nom_Blog;?> </a></h3>
            
            <div class="post-meta">
                <span class="post-author">
                    <i class="fas fa-user"></i>
                    <span class="text-gray">Posted by : </span>
                    admin
                </span>
                <span class="post-separator">|</span>
                <span class="post-date">
                    <i class="far fa-calendar-alt"></i>
                    <span class="text-gray">On : </span>
                    <?php echo $date_Blog; ?>
                </span>
            </div>
        </header>
        <article>
            <h3 class="d-none sr-only">blob-article</h3>
            <p class="p-0"><?php echo $contenu; ?></p>
        </article>
        <?php
							}
								?>
        
    </div>
</div>
<h3>Comments</h3>
<?PHP


      $id_comm = $_GET['id_blog'];

        $commentaires = $commentaire->getCommentaireById($id_comm);
    
              foreach($commentaires as $comm):
            ?>
<div class="comment-block-wrapper single-block">
    
    <div class="single-comment">
  <div class="comment-avatar">
    <img src="<?php echo $userC->recupererUtilisateur1($comm['id_user'])['image']; ?>" alt="">
  </div>
  <div class="comment-text">
    <h5 class="author"> <?php echo $userC->recupererUtilisateur1($comm['id_user'])['nom']; ?></h5>
    <span class="time"><?= $comm['date'];?></span>
    <p> <?= $comm['contenu'];?></p>
  <?php
  if ( empty( $_SESSION['id'] )){

  } 

   else{if( $comm['id_user']==$_SESSION['id'] ): ?>
    <a href="../../public/util/processCommentaire.php?delete1=<?php echo $comm['id_commentaire']?>&idBlog=<?php echo $id_comm; ?>">
                          <i class="fas fa-trash-alt"></i>  
                      </a>
                      
  <?php  endif ; 
  }?>
  
  </div>
  
</div>
<?php endforeach; ?>
  
</div>
</div>

<div class="replay-form-wrapper single-block">
    <?php if ( empty( $_SESSION['id'] )){

} 

else{ ?>
    <h3 class="mt-0">LEAVE A REPLY</h3>
    <p>Your email address will not be published. Required fields are marked *</p>
    <form  action="../../public/util/processCommentaire.php?" method="post" class="blog-form">
    <?php
          
          $id_comm = $_GET['id_blog'];?>
    <div class="row">
    <div class="col-12">
      <div class="form-group">
        <label for="message">Comment</label>
        <textarea type="text" name="contenu" cols="30" rows="10" class="form-control"></textarea>
      </div>
    </div>
    
    <div class="col-lg-4">
      <div class="form-group">
        <label for="email"></label>
        <input type="hidden" name="id_user" value=<?php echo $_SESSION['id']; ?> class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label for="website"></label>
        <input type="hidden" name="id_du_blog" value=<?php echo $id_comm;?>  class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
    <button type="submit" name="ajouterCommentaire" class="btn btn-outline-success my-2 my-sm-0">Ajouter
                    Commentaire</button>
    </div>
  </div>
</form>
<?php } ?>
 
</div>
			
			</div>
      <?php if ( empty( $_SESSION['id'] )){?>	
        <h4><i><center> Veuillez vous connecter pour pouvoir ajouter un commentaire*</center></i></h4>	
        <?php }; ?>	
		</div>
	</div>
</section>


<?php require 'footer.php'; ?>
