<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 30/11/2015
 * Time: 12:41 PM
 */

namespace  Tst;


use  Cls\AirwaysBoardingCard;
use  Cls\BusBoardingCard;
use  Cls\CardSort;

//require_once "init.php";

class CardSortTest extends \PHPUnit_Framework_TestCase{


	private $unsortedCards =[];

	function __construct()
	{

		$airwaysBoardingCard =  new AirwaysBoardingCard();
		$airwaysBoardingCard->setFirstname('Firstname');
		$airwaysBoardingCard->setLastname('Lastname');
		$airwaysBoardingCard->setGate('D34');
		$airwaysBoardingCard->setGateclosingTime('29 Dec 2015');
		$airwaysBoardingCard->setSeat('29B');
		$this->unsortedCards[] =$airwaysBoardingCard;


		$busBordingCard = new BusBoardingCard();
		$busBordingCard->setBookingNo('Test123');
		$busBordingCard->setPassengerName('Test Test');
		$this->unsortedCards[] =$busBordingCard;





	}

	public function testMergeSort()
	{

		$sortObj = new CardSort();
		$this->assertAttributeGreaterThan(0,sizeof($sortObj->getSortedArray($this->unsortedCards)),"Testing of Card Sort for valid unsorted array");
		$this->assertEquals(1,$sortObj->getSortedArray(null),"Testing of Card Sort for un valid sorted arrays ");


	}
}