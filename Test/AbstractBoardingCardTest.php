<?php
/**
 * Created by PhpStorm.
 * User: Cleve
 * Date: 12/3/15
 * Time: 12:38 AM
 */

namespace Tst;


Abstract  class AbstractBoardingCardTest  extends \PHPUnit_Framework_TestCase {



    public $boardingCard;



    /**
     * testSetDepartureLocation will test for
     * invalid language and invalid location
     * valid language and invalid location
     *valid language and valid location
     */
    public function testSetDepartureLocation()
    {

        $location = $lg = "";
        $retVal = $this->boardingCard->setDepartureLocation($location,$lg);
        $this->assertEquals(1,$retVal,"Test for invalid location and language");

        $location = "";
        $lg = "en";
        $retVal = $this->boardingCard->setDepartureLocation($location,$lg);
        $this->assertEquals(2,$retVal,"Test for invalid location and valid language");


        $location = "dubai";
        $lg = "en";
        $retVal = $this->boardingCard->setDepartureLocation($location,$lg);
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
        $retVal = $this->boardingCard->setArrivalLocation($location,$lg);
        $this->assertEquals(1,$retVal,"Test for invalid location and language");

        $location = "";
        $lg = "en";
        $retVal = $this->boardingCard->setArrivalLocation($location,$lg);
        $this->assertEquals(2,$retVal,"Test for invalid location and valid language");


        $location = "dubai";
        $lg = "en";
        $retVal = $this->boardingCard->setArrivalLocation($location,$lg);
        $this->assertEquals(0,$retVal,"Test for valid location and valid language");

    }


} 