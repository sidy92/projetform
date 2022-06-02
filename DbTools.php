<?php
/**
 * Instanciation de la connections à la base de donnée
 */
class DbTools{

	public $Host;
	public $Dbname;
	public $Username;
	public $Password;
	public $Dns;
    public $port;
    public $options;
	public $Connection = NULL; //$Db
	
	
	
	function __construct() {
           
		$this->Host = 'localhost';
		$this->Dbname = 'projet_php';
		$this->Username = 'root';
		$this->Password = '';
        $this->port = '';
        $this->Dns = "mysql:dbname=$this->Dbname;host=$this->Host;charset=utf8mb4";

  
		$this->connect();
		
		
		return true;
	}
        
        
        private function connect ()  {
	 // Connection principale à la base données
        try {
            $this->Connection = new PDO($this->Dns, $this->Username, $this->Password);
        } catch (PDOException $e) {

                echo 'Probleme de connexion à la base de données : ' . $e->getMessage();
                
        }

  
     return true;
          
}    

						


public function disconnect ()
{
  $this->Connection->disconnect();	
  	
}


	
        
         /*
        * Méthode de récupération d'occurences dans la base de données.
        *
        * La méthode traite la requête comme requête préparée par défaut,
        * $args peut être vide si la requête SQL le permet.
        *
        * @param string $sql Requête SQL vers la base de données.
        * @param array $args Tableau contenant les marqueurs de position. Laisser vide si la requête SQL le permet.
        * @return mixed ...->errorCode() Retourne le code erreur SQLState si une erreur survient, retourne True sinon.
        */
        public function query($sql, $args = null)
        { 
            $stmt = $this->Connection->prepare($sql);
            $req = $stmt->execute($args);
  
            return (!$req) ? $this->Connection->errorCode() : $stmt ;
        }
		
        
        /**
         * Methode qui retourne le dernier identifiant créé et enregistré 
         * @return int identifiant unique
         */
	public function lastInsertId() { 
		
		return $this->Connection->lastInsertId();
		
	}
	
	
	
} //class DBTools
	

?>