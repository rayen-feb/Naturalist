<?php


include_once "../../config.php";
class CommentaireC{


    function tridsc(){
        $query = "SELECT * FROM blog_commentaire ORDER BY id_du_blog DESC";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
        return $liste;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }

    function triasc(){
        $query = "SELECT * FROM blog_commentaire ORDER BY id_du_blog ASC";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
        return $liste;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }
    function ajouterCommentaire($commentaire){
        $conn = config::getConnexion();
        
        $sql = "INSERT INTO blog_commentaire (id_user, contenu, id_du_blog) values (:id_user, :contenu, :id_du_blog ) ";
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':id_user',$commentaire->getid_user());
            $req->bindValue(':contenu',$commentaire->getContenu());
            $req->bindValue(':id_du_blog',$commentaire->getId_du_blog());
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function getCommentaireById($id_du_blog){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM blog_commentaire WHERE id_du_blog=:id_du_blog";
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':id_du_blog', $id_du_blog);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            
            return $result;
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function getAllCommentaire(){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM blog_commentaire";
    
        try {
            $result=$conn->query($sql);
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
            if(!empty($rows)){
                return $rows[0];
            }
            
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function tridscu(){
        $query = "SELECT * FROM blog_commentaire ORDER BY id_du_blog DESC";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
        return $liste;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }

    function triascu(){
        $query = "SELECT * FROM blog_commentaire ORDER BY id_du_blog ASC";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
        return $liste;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }
    function deleteCommentaire($idCommentaire){
        $conn = config::getConnexion();
        $sql = "DELETE FROM blog_commentaire WHERE id_commentaire=:idCommentaire";
    
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idCommentaire', $idCommentaire);
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function liveSearchComm($search){
        $conn = config :: getConnexion();
        $sql = "SELECT * FROM blog_commentaire WHERE id_Commentaire LIKE '%" .$search."%' 
        OR nom LIKE '%" .$search."%' ";
        try{
            $req = $conn->query($sql);
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherCommentaire($valueToSearch1){
        $query = "SELECT * FROM blog_commentaire WHERE CONCAT(nom, email, id_du_blog) LIKE '%".$valueToSearch1."%'";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
            $rows = $liste->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }

}

class blogC{

    function rechercherBlog($valueToSearch){
        $query = "SELECT * FROM blog WHERE CONCAT( nom_blog, contenu_blog ) LIKE '%".$valueToSearch."%'";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
            $row = $liste->fetchAll(PDO::FETCH_ASSOC);
        return $row;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}}
    
    
        function tridscu(){
        $query = "SELECT * FROM blog ORDER BY date_blog DESC";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
        return $liste;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }

    function triascu(){
        $query = "SELECT * FROM blog ORDER BY date_blog ASC";
        $db= config::getConnexion();
        try { 
            $liste = $db->query($query);
        return $liste;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }
    function ajouterBlog($blog){
        $conn = config::getConnexion();
        
        $sql = "INSERT INTO blog (nom_blog, contenu_blog, image_blog) values (:nomBlog, :contenusBLog, :imgBLog) ";
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':nomBlog',$blog->getNomBlog());
            $req->bindValue(':contenusBLog',$blog->getContenus());
            $req->bindValue(':imgBLog',$blog->getImgBLog());
        
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    function deleteBlog($idBlog){
        $conn = config::getConnexion();
        $sql = "DELETE FROM blog WHERE id_Blog=:idBlog";
    
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idBlog', $idBlog);
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function getBlogById($idBlog){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM blog WHERE id_blog=:idBlog";
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idBlog', $idBlog);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            if(count($result)>1){
                 $this->error = "erreur";
                 return $this->error;
            }
            return $result;
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function afficherBlog(){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM blog"; 
        try {
            $result=$conn->query($sql);
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
            if(!empty($rows)){
                return $rows[0];
            }
            
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function afficherBlogg(){
        $sql = "SELECT * FROM blog";
        $db = config::getConnexion();
        try { $liste = $db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {die ('Erreur:'.$e->getMessage());}
    }
    
    function getAllBlog(){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM blog";
    
        try {
            $result=$conn->query($sql);
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
            if(!empty($rows)){
                return $rows[0];
            }
            
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    

    function updateBlog($blog, $idBlog){
        $conn = config::getConnexion();
        $sql="UPDATE blog SET nom_blog=:nomBlog, contenu_blog=:contenuBlog, image_blog=:imgBlog   WHERE id_blog=:idBlog";

        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idBlog', $idBlog);
            
            $req->bindValue(':nomBlog', $blog->getNomBlog());
            $req->bindValue(':contenuBlog', $blog->getcontenus());
            $req->bindValue(':imgBlog', $blog->getImgBlog());
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
   
}


?>