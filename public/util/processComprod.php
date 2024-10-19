<?php

include '../../models/produits/comprod.php';
include '../../controllers/produits/comprodC.php';

$comprodCtrl = new comprodC();
$NomCom= $CommentProd= $MailComprod= $IdProduitCom= $id_comment= "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); 
    return $data;
}
// echo "hello world"

   
if(isset($_POST['envoyer'])){
    $NomCom = $_POST['nom'];
    $MailComprod = $_POST['mail'];
    $IdProduitCom= $_POST['id_article'];
    $CommentProd= test_input($_POST['comment']);
    
    $comprod = new comprod($NomCom, $CommentProd, $MailComprod, $IdProduitCom );
    var_dump($comprod);
    
    $comprodC = new comprodC();
    $comprodC->ajoutercomprod($comprod);
    header("location:../../views/frontend/product-details.php?idProd=".$IdProduitCom."");
}
if(isset($_GET['delete'])){
    $id_comment = test_input($_GET['delete']);

    $comprodCtrl->deleteComprod($id_comment);
    $_SESSION['message'] = "Comment has been deleted !";
    $_SESSION['msg_type'] = "danger";
    header("location:../../views/backend/comprod.php");
}
if ((isset($_POST["recherche"]))&& (isset($_POST["colonne"]))){
    if (!empty(isset($_POST["recherche"]))){
     $n=$_POST["colonne"];
     echo ("colonne = $n " );
      $listeconsultation=$consultationC->rechercher($_POST["recherche"],$n);
    } 
   }

   $output =$result= "";
   if(isset($_GET['query'])){
           $search = $_GET['query'];
           $result = $comprodCtrl->liveSearch($search);
   }
   else{
       $result = $comprodCtrl->getAllComprod();
   }
   
   if(count($result)>0){
       $output ="<thead>
       <th scope='col'></th>
       <th scope='col'>Nom Utilisateur</th>
       <th scope='col'>Mail Utilisateur</th>
       <th scope='col'>Commentaires</th>
       <th scope='col'>Action</th>
       </thead>
       <tbody>";
       $i =1;
       foreach($result as $result){
           $output .="
           <tr>
           <td>".$i++."</td>
                   <td> ".$result['nom']."</td>
                   <td> ".$result['mail']."</td>
                   <td> ".$result['comment']."</td>
                   <td>
                       <a href='../../public/util/processCath.php?delete=".$result['id_comment']."'>
                           <i class=far fa-edit'></i>
                       </a>
                       <a href='../../public/util/processCath.php?delete=".$result['id_comment']."'>
                           <i class='fas fa-trash-alt' style='color:#33b35a'></i>  
                       </a>
                   </td>
           </tr>
           ";    
       }
       $output .= "</tbody>";
       echo $output;
   }else{
       echo "<h3>Not record found</h3>";
   }
?>