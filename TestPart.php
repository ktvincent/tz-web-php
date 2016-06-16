<?php
require_once'partClass.php';
require_once 'partDAO.php';

use PHPUnit\Framework\TestCase;

class TestPart extends PHPUnit_Framework_TestCase {
  
  public function testnewPart() {
    $part=new part(1,11,4,120,'2016-06-16');
    $this->assertNotEmpty($part);
  }

  public function testListDao() {
    $dao=new partDAO();
   	$list=$dao->getListPart();
    $this->assertNotNull($list);
  }
  
  
?>