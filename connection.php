<?php

final class singleton {

	private static $PDOInstance = null;

	private static $dsn = null;

	private static $username = null;

 	private static $password = null;

	private static $options = array(

		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

	);

	private function __construct(){



	}

    public static function getInstance(){

		if (self::$PDOInstance == null){
			self::$PDOInstance = new PDO('mysql:host=localhost;dbname=e-commerce;charset=utf8', 'root', 'exiacesi');
		}
		return self::$PDOInstance;
	}

	public static function setConfig($dsn, $username, $password, array $options = array()){
	/*Configuration de la connexion à la base.

	@param string $dsn DSN pour la connexion
	@param string $username Nom d'utilisateur pour la connexion
	@param string $password Mot de passe pour la connexion
	@param array $options Options du pilote

	@return void*/
	}

	private static function configDone(){

		/* pour vérifier que la conf de connexion est faite */

	}
}

$bdd = singleton::getInstance();
?>
