<?php

/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 3:52 PM
 */

namespace  Test;
use  Cls\BusBoardingCard;

//require_once "init.php";

class BusBoardingCardTest  extends \PHPUnit_Framework_TestCase

{

	public  $busBordingCard;

	function __construct()
	{
		$this->busBordingCard = new BusBoardingCard();

		$this->busBordingCard->setBookingNo('Test123');
		$this->busBordingCard->setPassengerName('Test Test');


	}


	/**
	 * testSetDepartureLocation will test for
	 * invalid language and invalid location
	 * valid language and invalid location
	 *valid language and valid location
	 */
	public function testSetDepartureLocation()
	{

		$location = $lg = "";
		$retVal = $this->busBordingCard->setDepartureLocation($location,$lg);
		$this->assertEquals(1,$retVal,"Test for invalid location and language");

		$location = "";
		$lg = "en";
		$retVal = $this->busBordingCard->setDepartureLocation($location,$lg);
		$this->assertEquals(2,$retVal,"Test for invalid location and valid language");


		$location = "dubai";
		$lg = "en";
		$retVal = $this->busBordingCard->setDepartureLocation($location,$lg);
		$this->assertEquals(0,$retVal,"Test for valid location and valid language");

	}



	/**
	 * setArrivalLocation will test for
	 * invalid language and invalid location
	 * valid language and invalid location
	 *valid language and valid location
	 */
	public function testSetArrivalLocation()
	{

		$location = $lg = "";
		$retVal = $this->busBordingCard->setArrivalLocation($location,$lg);
		$this->assertEquals(1,$retVal,"Test for invalid location and language");

		$location = "";
		$lg = "en";
		$retVal = $this->busBordingCard->setArrivalLocation($location,$lg);
		$this->assertEquals(2,$retVal,"Test for invalid location and valid language");


		$location = "dubai";
		$lg = "en";
		$retVal = $this->busBordingCard->setArrivalLocation($location,$lg);
		$this->assertEquals(0,$retVal,"Test for valid location and valid language");

	}



}