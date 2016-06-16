<?php
include "ProjectDAO.php";
abstract class ProjectClass /*extends Model*/ {
	
	private $name,$startDate,$description,$endDate,$rate,$Status;

	function __construct ($name,$startDate,$description,$endDate,$rate,$status){
		$this->name=$name;
		$this->startDate=$startDate;
		$this->description=$description;
		$this->endDate=$endDate;
		$this->rate=$rate;
		$this->status=$status;
	}
	public function __toString(){
		echo "<table>";
		echo "<tr><td>Name</td><td>".$this->name."</td></tr>";
		echo "<tr><td>starDate</td><td>".$this->startDate."</td></tr>";
		echo "<tr><td>description</td><td>".$this->description."</td></tr>";
		echo "<tr><td>endDate</td><td>".$this->endDate."</td></tr>";
		echo "<tr><td>rate</td><td>".$this->rate."</td></tr>";
		echo "<tr><td>status</td><td>".$this->status."</td></tr>";
		return "</table>";;
  }
	public function getName(){
		return $this->name;
	}
	public function setName($new){
		$this->name=$new;
	}
	public function getStartDate(){
		return $this->startDate;
	}
	public function setStartDate($new){
		$this->startDate=$new;
	}
	public function getDescription(){
		return $this->description;
	}
		public function setDescription($new){
		$this->description=$new;
	}
	public function getEndDate(){
		return $this->rate;
	}
	public function setEndDate($new){
		$this->endDate=$new;
	}
	public function getRate(){
		return $this->rate;
	}
	public function setRate($new){
		$this->rate=$new;
	}
	public function getStatus(){
		return $this->status;
	}
	public function setStatus($new){
		$this->status=$new;
	}
}

/*$projet=new ProjectClass("Lui","1990-01-01","il","1990-01-01",5,true);
echo $projet->getName();
echo $projet->getRate();
echo ProjectDAO::Create($projet);
$list=ProjectDAO::getList();
foreach($list as $test):
	echo "<br>".$test['name'];
endforeach;
ProjectDAO::changeStatus(30,true);  
echo $projet; Données test*/
?>