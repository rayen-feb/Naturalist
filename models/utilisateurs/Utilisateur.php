<?php

	class Utilisateur
	{ 
		private  $id = null;
		private  $nom = null;
		private  $pass = null;
		private  $email = null;
		private  $type = null;
		private  $image = null;
	function __construct(int $id, $nom, $pass, $email, $type, $image)
		{
			$this->id = $id;
			$this->nom=$nom;
	    	$this->pass=$pass;
	    	$this->email=$email;
	    	$this->type=$type;
	    	$this->image=$image;
		}

		
		public function getId()
		{
			return $this->id;
		}
		public function getNom()
		{
			return $this->nom;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getPassword()
		{
			return $this->pass;
		}

		public function getType()
		{
			return $this->type;
		}
        public function getImage()
		{
			return $this->image;
		}

		function setNom(string $nom): void
		{
			$this->nom=$nom;
		}
		
		function setEmail(string $email): void
		{
			$this->email=$email;
		}
		function setPassword(string $pass): void{
			$this->pass=$pass;
		}
		function setImage(string $image): void
		{
			$this->image=$image;
		}
	}