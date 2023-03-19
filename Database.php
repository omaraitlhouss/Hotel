<?php 
namespace PRJ;
use \PDO;
/**
 * 

 */
class Database
{
	static function execute($cmd){
		$pdo=new PDO('mysql:dbname=projetfin;host=localhost;','root');
		$c=$pdo->exec($cmd);
		return $c;
}
	static function liredonne($cmd){
		$pdo=new PDO('mysql:dbname=projetfin;host=localhost;','root');
		$v=$pdo->query($cmd);
		$res=$v->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}
	
}
?>