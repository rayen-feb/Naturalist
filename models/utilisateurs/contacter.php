<?php
  
	class Contact
	{ 
		private  $id = null;
		private  $nom = null;
		private  $email = null;
		private  $sujet = null;
		private  $message = null;
		
		function __construct(int $id, $nom, $email,  $sujet, $message)
		{
			$this->id=$id;
			$this->nom=$nom;
	    	$this->email=$email;
	    	$this->sujet=$sujet;
	    	$this->message=$message;
		}
		
		public function getId()
		{
			return $this->id;
		}
		public function get_nom()
		{
			return $this->nom;
		}
		public function get_email()
		{
			return $this->email;
		}
		public function get_sujet()
		{
			return $this->sujet;
		}
        public function get_message()
		{
			return $this->message;
		}

		

		function setNom(string $nom): void
		{
			$this->nom=$nom;
		}
		
		function setEmail(string $email): void
		{
			$this->email=$email;
		}
		function setSujet(string $sujet): void
		{
			$this->sujet=$sujet;
		}
		function setMessageE(string $message): void
		{
			$this->message=$message;
		}
	}