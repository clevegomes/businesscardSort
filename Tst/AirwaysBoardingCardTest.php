<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 6:02 PM
 */

namespace Tst;




use Cls\AirwaysBoardingCard;
//require_once "init.php";

class AirwaysBoardingCardTest  extends \PHPUnit_Framework_TestCase {


	public $airwaysBoardingCard;

	function __construct()
	{

		$this->airwaysBoardingCard = new  AirwaysBoardingCard();
		$this->airwaysBoardingCard->setFirstname('Firstname');
		$this->airwaysBoardingCard->setLastname('Lastname');
		$this->airwaysBoardingCard->setGate('D34');
		$this->airwaysBoardingCard->setGateclosingTime('29 Dec 2015');
		$this->airwaysBoardingCard->setSeat('29B');



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
		$retVal = $this->airwaysBoardingCard->setDepartureLocation($location,$lg);
		$this->assertEquals(1,$retVal,"Test for invalid location and language");

		$location = "";
		$lg = "en";
		$retVal = $this->airwaysBoardingCard->setDepartureLocation($location,$lg);
		$this->assertEquals(2,$retVal,"Test for invalid location and valid language");


		$location = "dubai";
		$lg = "en";
		$retVal = $this->airwaysBoardingCard->setDepartureLocation($location,$lg);
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
		$retVal = $this->airwaysBoardingCard->setArrivalLocation($location,$lg);
		$this->assertEquals(1,$retVal,"Test for invalid location and language");

		$location = "";
		$lg = "en";
		$retVal = $this->airwaysBoardingCard->setArrivalLocation($location,$lg);
		$this->assertEquals(2,$retVal,"Test for invalid location and valid language");


		$location = "dubai";
		$lg = "en";
		$retVal = $this->airwaysBoardingCard->setArrivalLocation($location,$lg);
		$this->assertEquals(0,$retVal,"Test for valid location and valid language");

	}


}