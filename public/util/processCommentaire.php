<?php
session_start();
include '../../models/blog/CommentaireBlog.php';
include '../../controllers/blog/BlogC.php';

$CommentaireCtrl = new CommentaireC();
$nom = $email = $contenu =$id_du_blog= $id_commentaire="";
$update = false;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); 
    return $data;
}


if(isset($_POST['ajouterCommentaire'])){
    $id_user = $_POST['id_user'];
    $contenu = $_POST['contenu'];
    $id_du_blog = $_POST['id_du_blog'];
    $commentaire = new Commentaire($id_user, $contenu, $id_commentaire, $id_du_blog);
    $commentaireC = new commentaireC();
    $commentaireC->ajouterCommentaire($commentaire);
    header("location:../../views/frontend/blog-detailsMod.php?id_blog=$id_du_blog");
}
if(isset($_GET['delete']))
{   
    $idCommentaire = $_GET['delete'];
      
    $CommentaireCtrl->deleteCommentaire($idCommentaire);
    $_SESSION['message'] = "Comment has been deleted !";
    $_SESSION['msg_type'] = "danger";
    header("location:../../views/backend/commentairesDash.php");
}
$output =$result= "";
    if(isset($_GET['query'])){
        $search = $_GET['query'];
        $result = $CommentaireCtrl->liveSearchComm($search);
         var_dump($result);

         die("manger");
}

if(isset($_GET['delete1']))
{   
    $idCommentaire = $_GET['delete1'];
    $idBlog = $_GET['idBlog'];
    
      
    $CommentaireCtrl->deleteCommentaire($idCommentaire);
  
    header("location:../../views/frontend/blog-detailsMod.php?id_blog=$idBlog");
}
$output =$result= "";
    if(isset($_GET['query'])){
        $search = $_GET['query'];
        $result = $CommentaireCtrl->liveSearchComm($search);
         var_dump($result);

         die("manger");
}


?>