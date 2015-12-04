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
use Cls\tripAbstract;

//require_once "init.php";

/**
 * Class CardSortTest
 * @package Tst
 */
class CardSortTest extends \PHPUnit_Framework_TestCase{


	private $unsortedCards =[];

    function setUp()
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


    function  tearDown()
    {
        unset($this->unsortedCards);
    }

    private function validateSortArray($sortArry)
    {

        if(is_array($sortArry) && sizeof($sortArry) >0)
        {

            foreach($sortArry as $selelement)
            {
                if(!($selelement instanceof tripAbstract))
                {
                    return false;
                }
            }
            return true;

        }
        else
            return false;

    }

	public function testMergeSort()
	{

//        $sortObj->getSortedArray($this->unsortedCards)

		$sortObj = new CardSort();
        $this->assertTrue($this->validateSortArray($sortObj->getSortedArray($this->unsortedCards)),"Testing of Card Sort for valid unsorted array");
		$this->assertEquals(1,$sortObj->getSortedArray(null),"Testing of Card Sort for un valid sorted arrays ");


	}
}