<?php
require_once('Falabella.php');
class FalabellaTest extends PHPUnit_Framework_TestCase {
    public function setUp() { }
    public function tearDown() { }

    public function testOutputIsValid() {
        // test to ensure that the object from an fsockopen is valid
        $obj = new Falabella();
        $result = "";
        for($i = 1; $i <= 100; $i++) {
            if($i%15 == 0) {
                $result .= "Linianos ";
            }
            else if($i%3 == 0) {
                $result .= "Linio ";
            }
            else if($i%5 == 0) {
                $result .= "IT ";
            }
            else {
                $result .= "$i ";
            }
        }
        $this->assertTrue($obj->printAsPerReq() === $result);
    }

}
?>