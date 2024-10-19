<?php
class BLog{

    private $nomBlog, $contenus, $imgBlog, $idBlog;

    function __construct($nomBlog,$contenus, $imgBLog, $idBlog)
    {
        $this->nomBlog = $nomBlog;
        $this->contenus = $contenus;
        $this->imgBlog = $imgBLog;
        $this->idBlog = $idBlog;
    }

    function getNomBlog(){
        return  $this->nomBlog;
    }
    function getContenus(){
        return $this->contenus ;
    }
    function getImgBLog(){
        return $this->imgBlog;
    }
    function getIdBlog(){
        return $this->idBlog;
    }
    function setNomBlog($nomBlog){
        $this->nomBlog = $nomBlog;
    }

    function setContenus($contenus){
        $this->contenus = $contenus;
    }
    function setImgBlog($imgBLog){
        $this->imgBlog = $imgBLog;
    }
}

?>