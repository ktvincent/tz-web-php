<?php 

class partDAO {

	public static function getListPart() {
		$db = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=carlu', 'carlu', 'ludo1811');
    $sql = "SELECT * FROM part";
		$stmt = $db->query($sql);
		return $stmt->fetchAll;
  }
	
	public static function getPartFromId($id) {
		$db = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=carlu', 'carlu', 'ludo1811');
    $sql = "SELECT * FROM part WHERE idPart=".$id;
		$stmt = $db->query($sql);
		return $stmt->fetch;
	}
  
	public static function getPartFromIdInvestor($id) {
		$db = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=carlu', 'carlu', 'ludo1811');
    $sql = "SELECT * FROM part WHERE idInvestor=".$id;
		$stmt = $db->query($sql);
		return $stmt->fetch;
	}
	
	public static function createPart($idPart,$idInvestor,$numProject,$price,$date) {
		$db = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=carlu', 'carlu', 'ludo1811');
		$sql = "INSERT INTO part VALUES (:idPart,:idInvestor,:numProject,:price,:date)";
		$stmt = $db->prepare($sql);
		$stmt->execute (
			':idPart'=>$idPart,
			':idInvestor'=>$idInvestor,
			':numProject'=>$numProject,
			':price'=>$price,
			':date'=>$date
		);
		return $idPart;
		
	}
	
	public static function deletePartFromId($id) {
		$db = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=carlu', 'carlu', 'ludo1811');
    $sql = "DELETE FROM part WHERE idPart=".$id;
		$stmt = $db->query($sql);
	}
	
	public static function deletePartFromIdInvestor($id) {
		$db = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=carlu', 'carlu', 'ludo1811');
    $sql = "DELETE FROM part WHERE idInvestor=".$id;
		$stmt = $db->query($sql);
	}
		public static function deletePartFromNumProject($num) {
		$db = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=carlu', 'carlu', 'ludo1811');
    $sql = "DELETE FROM part WHERE numProject=".$num;
		$stmt = $db->query($sql);
	}
	
	
}