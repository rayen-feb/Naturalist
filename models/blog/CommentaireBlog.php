
<?php
class Commentaire{

    private $id_user, $contenu, $id_commentaire;

    function __construct($id_user,  $contenu, $id_commentaire, $id_du_blog)
    {
        $this->id_user = $id_user;
        $this->contenu = $contenu;
        $this->id_commentaire = $id_commentaire;
        $this->id_du_blog = $id_du_blog;
    }

    function getid_user(){
        return  $this->id_user;
    }
   
    function getcontenu(){
        return $this->contenu;
    }
    function getId_commentaire(){
        return $this->id_commentaire;
    }
    function getId_du_blog(){
        return $this->id_du_blog;
    }
    function setid_user($id_user){
        $this->id_user = $id_user;
    }

    function setContenus($contenu){
        $this->contenu = $contenu;
    }
    function setImgBlog($email){
        $this->email = $email;
    }
}

?>