<?PHP

class Sujet
{
    private $id_sujet;
    private $id_utilisateur;
	private $type;
	private $message;
	private $date_p;
	
	function __construct(int $id_sujet, $id_utilisateur,$type,$message, $date_p)
	{		
		
		$this->id_sujet=$id_sujet;
		$this->id_utilisateur=$id_utilisateur;
		$this->type=$type;
		$this->message=$message;
		$this->date_p=$date_p;
		
		
	}

    function getid_sujet()
    {
		return $this->id_sujet;
	}
	function getid_user()
    {
		return $this->id_utilisateur;
	}
	
    function gettype()
    {
		return $this->type;
	}
	function getmessage()
	{
		return $this->message;
	}
	function getDate()
	{
		return $this->date_p;
	}


	
	function setid_sujet($id_sujet)
	{
		$this->id_sujet=$id_sujet;
	}
	function setid_user($id_utilisateur)
	{
		$this->id_utilisateur=$id_utilisateur;
	}
    function settype($type)
    {
		$this->type=$type;
	}
    function setmessage($message)
    {
		$this->message=$message;
	}
	function setdate($date_p)
	{
		$this->date_p=$date_p;
	}
	
}
