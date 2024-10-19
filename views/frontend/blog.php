<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';
include_once '../../controllers/blog/blogC.php';

$blogC = new blogC();
$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
?>
<?php require './header.php'; ?>
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
  </div>
</nav>

<section class="blog-page-section">
			<div class="container">
				    <div class="row">
        <?php 
            $rows = $blogC->getAllBlog();
            foreach($rows as $row):
        ?>
     <div class="col-xl-4 col-md-6 mb--30">
        <div class="blog-post">
          <a href="blog-details.html" class="blog-image">
          <img src="../../public/img/blog/<?= $row['image_blog'];?>" alt="">
          </a>
          <div class="blog-content mt--15 text-center">
            <header>
            <h3 class="blog-title"> <a href="blog-details.php"><?=$row['nom_blog']; ?></a></h3>
              <div class="post-meta">
                <span class="post-author">
                  <i class="fas fa-user"></i>
                  <span class="text-gray">Posted :<?=$row['date_blog']; ?> </span>
                  
                </span>
              </div>

            </header>
            <div class="blog-btn pb--10 pt--10">
              <a href="blog-detailsMod.php?id_blog=<?php echo $row['id_blog']; ?>"class="btn btn-rounded btn-outlined--primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
				<div class="mt--20 mb--20">
					<div class="pagination-widget">
    <div class="site-pagination">
        <a href="#" class="single-pagination">|&lt;</a>
        <a href="#" class="single-pagination">&lt;</a>
        <a href="#" class="single-pagination active">1</a>
        <a href="#" class="single-pagination">2</a>
        <a href="#" class="single-pagination">&gt;</a>
        <a href="#" class="single-pagination">&gt;|</a>
    </div>
</div>
   
				</div>
			</div>
		</section>
<?php require 'footer.php'; ?>