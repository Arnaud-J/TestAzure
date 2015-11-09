<?php 

class DAL{


	/*static function  getUser($password,$login){
		$req='SELECT * FROM user WHERE login=? AND password=?';
		$param  = array(0 => array($login, PDO::PARAM_STR) , 
						1 => array($password, PDO::PARAM_STR));
		return BD::getInstance()->prepareAndExecuteQueryWithResult($req,$param);
	}*/
	

	public static function  getFlux()
	{
		$req='SELECT * FROM flux';
		$res=BD::getInstance()->prepareAndExecuteQueryWithResult($req,'');	

		foreach ($res as $value) {
			$flux[]=new Flux($value["id"],$value["titre"],$value["url"],$value["categorie"],$value["nomFichierCache"]);
		}
		return $flux;
	}	


	public static function ajouterFlux($flux){
		$req="INSERT INTO flux(titre,url,categorie,nomFichierCache) VALUES(?,?,?,?)";
		$param  = array(0  => array($flux->getTitre(), PDO::PARAM_STR), 
						1  => array($flux->getUrl(), PDO::PARAM_STR),
						2  => array($flux->getCategorie(), PDO::PARAM_STR),  
						3  => array($flux->getNomFichierCache(), PDO::PARAM_STR));
		//pas obligatoire le PARAM_STR mais aide l'injection.
		//Obliger si on fait un LIMIT, du coup autant le faire pour le cas général.
		BD::getInstance()->prepareAndExecuteQueryWithoutResult($req,$param);
	}

	public static function supprimerFlux($flux){
		$req="DELETE FROM flux WHERE id=?";
		$param  = array(0  => array($flux->getId(), PDO::PARAM_STR));
		BD::getInstance()->prepareAndExecuteQueryWithoutResult($req,$param);

	}


	//renvoie vrai si un champs est deja present dans la bdd
	//params : $nomAtttribut = attribut dans la bdd ( colonne )
	//		   $valeur = la valeur dans la bdd de l'attribut
	public static function verifAvantAjout($attribut,$valeur)
	{
		$req="SELECT count(*) as nombre FROM flux WHERE $attribut=?";
		$param= array(0  => array($valeur, PDO::PARAM_STR));
		$res=BD::getInstance()->prepareAndExecuteQueryWithResult($req,$param);

		if($res[0]['nombre'] ==0){
			return false;
		}
		
		return true;
	}


	//recupere dans la table param la valeur de nbNewsParPage
	//Stocké en base de donnée, comment faire autrement ?
	public static function getNbNewsParPage()
	{

		$req='SELECT * FROM param';
		$res=BD::getInstance()->prepareAndExecuteQueryWithResult($req,'');
		return $res[0]['nbNewsParPage'];

	}


	public static function modifierNbNewsParPage($nb)
	{
		$req="UPDATE param SET nbNewsParPage=?";
		$param  = array(0  => array($nb, PDO::PARAM_INT));
		BD::getInstance()->prepareAndExecuteQueryWithoutResult($req,$param);
	}
}
?>