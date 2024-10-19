<?PHP

class Rsujet
{
	private $id;
    private $id_sujet;
    private $id_utilisateur;
	private $reponse;
	private $date_R;

	
	function __construct($id, $id_sujet, $id_utilisateur,$reponse, $date_R)
	{		
		$this->id=$id;
		$this->id_sujet=$id_sujet;
		$this->id_utilisateur=$id_utilisateur;
		$this->reponse=$reponse;
		$this->date_R=$date_R;
		
		
	}

     function getid()
    {
		return $this->id;
	}
    function getid_sujet()
    {
		return $this->id_sujet;
	}
	function getid_user()
    {
		return $this->id_utilisateur;
	}
	
	function getreponse()
	{
		return $this->reponse;
	}
	function getDate()
	{
		return $this->date_R;
	}


	function setid($id)
	{
		$this->id=$id;
	}
	function setid_sujet($id_sujet)
	{
		$this->id_sujet=$id_sujet;
	}
	function setid_user($id_utilisateur)
	{
		$this->id_utilisateur=$id_utilisateur;
	}
    function setreponse($reponse)
    {
		$this->reponse=$reponse;
	}
	function setdate($date_R)
	{
		$this->date_R=$date_R;
	}
	
}
