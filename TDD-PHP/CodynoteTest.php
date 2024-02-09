<?php
	use PHPUnit\Framework\TestCase;
	require('Codynote.php');
	class CodynoteTest extends TestCase {
		public function testAdd(){
			$codynote = new Codynote();
			$result = $codynote->codyweb(2, 3);
			$this->assertEquals(25, $result);
		}
	}
?>