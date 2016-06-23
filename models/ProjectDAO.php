<?php
include "Database.php";
/* abstract */class ProjectDAO {
	public static function create($project){ 
		$sql = "INSERT INTO Project(name,startDate,description,endDate,rate,stats,classe) values(:name,:startDate,:description,:endDate,:rate,:status,:classe)";
		$db=Database::getInstance(); // Recupere la base de données.
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
	  $stmt->execute(array(":name" => $project->getName(),
			":startDate"=>$project->getStartDate(),
			":description"=>$project->getDescription(),
     	":endDate"=>$project->getEndDate(),
			":rate"=>$project->getRate(),
			":classe"=>$project->getClasse(),
			":status"=>$project->getStatus()));
	  	return $db->lastInsertId();
	}
	public static function getFromId( $id ){
		$sql = "SELECT * FROM Project WHERE idProject=:id";
		$db=Database::getInstance();
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
		$stmt->execute(array(":idProject" => $id));
		$res=$stmt->fetch();
		$obj=ProjectClass::new Project($res['name'],$res['startDate'],$res['description'],$res['endDate'],$res['stats'],$res['classe']);
		return $obj;
	}
	public static function getFromName( $name ){
		$sql = "SELECT * FROM Project WHERE name=:name";
		$db=Database::getInstance();
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
		$stmt->execute(array(":name" => $name));
		return $stmt->fetch();
	}
	public static function getList(){
		$sql = "SELECT * FROM Project";
		$db=Database::getInstance();
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
		return $stmt->fetchAll();
	}
	public static function getPalmaresList(){
		$sql = "SELECT * FROM Project ORDER BY rate DESC LIMIT 5";
		$db=Database::getInstance();
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
		return $stmt->fetchAll();
	}
	public static function getProjectOnGoingList(){
		$sql = "SELECT * FROM Project where status=false";
		$db=Database::getInstance();
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
		return $stmt->fetchAll();
	}
	public static function changeStatus($id,$newStatus){                                                                                         
		$sql = "UPDATE Project SET status=:status WHERE id=:id";
		$db=Database::getInstance();
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
	  $stmt->execute(array(":status" =>$newStatus,
							":id" =>$id));
	}
	public static function deleteFromId($id){
		$sql = "DELETE FROM Project WHERE id=:id";
		$db=Database::getInstance();
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Project");
		$stmt->execute(array(":id" => $id));
	}
}

?>