<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 6:02 PM
 */

namespace  Test;




use   Cls\AirwaysBoardingCard;
use Tst\AbstractBoardingCardTest;

//require_once "init.php";

class AirwaysBoardingCardTest  extends AbstractBoardingCardTest {


	


/*
 * Setting up all the Card objects before the test can run
 */
    function setUp()
    {


        $this->boardingCard = new  AirwaysBoardingCard();
        $this->boardingCard->setFirstname('Firstname');
        $this->boardingCard->setLastname('Lastname');
        $this->boardingCard->setGate('D34');
        $this->boardingCard->setGateclosingTime('29 Dec 2015');
        $this->boardingCard->setSeat('29B');



    }


    /**
     * Cleaning up all the card object after the test has completed
     */
    public function tearDown()
    {
        unset($this->boardingCard);
    }






}