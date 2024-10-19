<?php
session_start();
include '../../models/blog/Blog.php';
include '../../controllers/blog/blogC.php';

$BlogCtrl = new BlogC();
$nomBlog = $contenus = $dateBlog =$idBlog="";
$update = false;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); 
    return $data;
}

if(isset($_POST['ajouterBlog'])){
    $nomBlog = $_POST['nomBlog'];
    $contenus = $_POST['contenuBLog'];
    $img = $_POST['img'];
    $blog = new BLog($nomBlog, $contenus, $img, $idBlog);
    $blogC = new blogC();
    $blogC->ajouterBlog($blog);
    header("location:../../views/backend/blogDash.php");
}
if(isset($_GET['delete']))
{   
    $idBlog = $_GET['delete'];
      
    $BlogCtrl->deleteBlog($idBlog);
    $_SESSION['message'] = "blog has been deleted !";
    $_SESSION['msg_type'] = "danger";
    header("location:../../views/backend/BlogDash.php");
}


if(isset($_GET['edit'])){
   $idblog = test_input($_GET['edit']);
    $row = $BlogCtrl->getBlogById($idblog);
    $update = true;
    // var_dump($row);
    // die("je vx des infos");
    foreach($row as $row){
        $nomBlog = $row['nom_blog'];
        $contenus = $row['contenu_blog'];
        $idBlog = $row['id_blog'];
    }

    header("location:../../views/backend/ajouterBlog.php?nomBlog=".$nomBlog."&contenuBlog=".$contenus."&update=".$update."&idBlog=".$idBlog." ");
}



if(isset($_POST['modifierBlog'])){

    $nomBlog = test_input($_POST['nomBlog']);
    $contenus = test_input($_POST['contenuBLog']);
    
    $img=  test_input($_POST['img']);
    $idBlog=  test_input($_POST['idBlog']);

    $Blog = new Blog($nomBlog, $contenus, $img, $idBlog);
    $BlogCtrl->updateBlog($Blog, $idBlog);

    header("location:../../views/backend/BlogDash.php");
}

if(isset($_POST['search']))
{
  $listeU=$BlogCtrl->rechercherBlog($_POST['valueToSearch']);

  header("location:../../views/backend/rechercherBlog.php");
}

if(isset($_POST['DSCU']))
{ 
  $listeU=$BlogCtrl->tridscu();
  header("location:../../views/backend/rechercherBlog.php");
}
 
if(isset($_POST['ASCU']))
{ 
  $listeU=$BlogCtrl->triascu();
  header("location:../../views/backend/rechercherBlog.php");
}



?>