<?php

	class ValidatePasswordTest extends PHPUnit_Framework_TestCase{

		public function testValidLength(){
			$valPass = new ValidatePassword();
			$this->assertFalse($valPass->validLength('1234'));
		}

		public function testFail(){
			$this->assertTrue(false, "nix ist cool!");
		}

		public function testFail2(){
			$this->assertTrue(true, "Alles Cool");
		}



	}