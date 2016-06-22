<?php
include "Database.php";
class projectTaskDAO {
	public $db;
	
	public function __construct(){
		$this->db = Database::getInstance();
	}
	
	public static function createPT($projectTask){ 
		$createPT = "INSERT INTO ProjectTask (idProject, attendee,description,title,price,duration,status,percent) VALUES (:idProject, :attendee, :description, :title, :price, :duration, :status, :percent)";
		$stmt = $db->prepare($createPT);
		$stmt->setFetchMode(PDO::FETCH_CLASS,"ProjectTask");
		$stmt->execute(array (":idProject" => $projectTask->getIdProject(),
													":attendee" => $projectTask->getAttendee(),
													":description" => $projectTask->getDescription(),
													":title" => $projectTask->getTitle(),
													":price" => $projectTask->getPrice(),
													":duration" => $projectTask->getDuration(),
													":status" => $projectTask->getStatus(),
													":percent" => $projectTask->getPercent()));
		return $db->lastInsertId();
	}
	
	// Trouver 
	
	public static function getFromProject($idProject){
		$sql = "SELECT * FROM ProjectTask WHERE idProject=:idProject";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
		$stmt->execute(array(":idProject" => $idProject));
		return $stmt->fetchAll();
	}

	public static function getFromTitle($title){
		$sql = "SELECT * FROM ProjectTask WHERE title=:title";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
		$stmt->execute(array(":title" => $title));
		return $stmt->fetchAll();
	}
	
	public static function getFromAttendee($attendee){
		$sql = "SELECT * FROM ProjectTask WHERE attendee=:attendee";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
		$stmt->execute(array(":attendee" => $attendee));
		return $stmt->fetchAll();
	}
	
	// Modifier
	
	public static function updateDescription($projectTask, $description){
		$sql = "UPDATE ProjectTask SET description=:description WHERE id=:id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
	  $stmt->execute(array(":description" =>$description,
													":id" => $projectTask->getIdProject()));
		}
	
	public static function updateTitle($projectTask, $title){
		$sql = "UPDATE ProjectTask SET title=:title WHERE id=:id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
		$stmt->execute(array(":title" =>$title,
													":id" => $projectTask->getIdProject()));
	}
	
	public static function updatePrice($projectTask, $price){
		$sql = "UPDATE ProjectTask SET price=:price WHERE id=:id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
	  $stmt->execute(array(":price" =>$price,
													":id" => $projectTask->getIdProject()));
		}
	
	public static function updateDuration($projectTask, $duration){
			$sql = "UPDATE ProjectTask SET duration=:duration WHERE id=:id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
			$stmt->execute(array(":price" =>$price,
														":id" => $projectTask->getIdProject()));
		}
	
		public static function updateStatus($projectTask, $status){
			$sql = "UPDATE ProjectTask SET status=:status WHERE id=:id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
			$stmt->execute(array(":status" =>$status,
														":id" => $projectTask->getIdProject()));
		}
	
		public static function updatePercent($projectTask, $percent){
			$sql = "UPDATE ProjectTask SET percent=:percent WHERE id=:id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
			$stmt->execute(array(":percent" =>$percent,
														":id" => $projectTask->getIdProject()));
		}
	
		// Supprimer 
	
		public static function deleteFromProject($projectTask){
			$sql = "DELETE FROM ProjectTask WHERE id=:id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "ProjectTask");
			$stmt->execute(array(":id" => $projectTask->getIdProject()));
		}
	
	
}

