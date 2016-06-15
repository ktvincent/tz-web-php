<?php
 
class partClass {
  private $idPart;
  private $price;
  private $date;
  private $idInvestor;
  private $numProject;
    
  public function __construct($idPart,$idInvestor,$numProject,$price,$date) {
    $this->idPart = $idPart;
    $this->idInvestor = $idInvestor;
    $this->numProject = $numProject;
    $this->price = $price;
    $this->date = $date;
  }
  public function __construct() {}
  
  //Getteurs
  
  public function getidPart() {
    return $this->idPart;
  }
  public function getidInvestor() {
    return $this->idInvestor;
  }
  
  public function getnumProject() {
    return $this->numProject;
  }
  
  public function getPrice() {
    return $this->price;  
  }
  
  public function getDate() {
    return $this->date;  
  }
  
  //Setteurs
  public static function setidPart($id) {
    $this->idPart = $id;
  }
  
  public function setidInvestor($id) {
    $this->idInvestor = $id;
  }
  
  public function setnumProject($numProject) {
    $this->numProject = $numProject;
  }
  
  public function setPrice($price) {
    $this->price = $id;
  }
  
  public function setDate($date) {
    $this->date = $date;
  }
  
}
?>