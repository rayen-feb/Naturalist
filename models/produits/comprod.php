<?php
class Comprod{

    private $NomCom, $CommentProd, $MailComprod, $IdProduitCom ;

    function __construct($NomCom, $CommentProd, $MailComprod, $IdProduitCom)
    {
        $this->NomCom = $NomCom;
        $this->CommentProd = $CommentProd;
        $this->MailComprod = $MailComprod;
        $this->IdProduitCom = $IdProduitCom;
    }

    function getNomCom(){
        return  $this->NomCom;
    }
    function getCommentProd(){
        return $this->CommentProd ;
    }
    function getMailComprod(){
        return $this->MailComprod;
    }
    function getIdProduitCom(){
        return $this->IdProduitCom;
    }
    function setNomCom($NomCom){
        $this->NomCom= $NomCom;
    }

    function setCommentProd($CommentProd){
        $this->CommentProd = $CommentProd;
    }
    function setMailComprod($MailComprod){
        $this->MailComprod = $MailComprod;
    }
    function setIdProduitCom($IdProduitCom){
        $this->IdProduitCom = $IdProduitCom;
    }
}

?>