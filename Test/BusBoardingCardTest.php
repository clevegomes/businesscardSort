<?php

/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 3:52 PM
 */

namespace  Test;
use  Cls\BusBoardingCard;
use Tst\AbstractBoardingCardTest;

//require_once "init.php";

class BusBoardingCardTest  extends AbstractBoardingCardTest

{



 /**
 * Setting up all the Card objects before the test can run
 */
    public function setUp()
    {
        $this->boardingCard = new BusBoardingCard();
        $this->boardingCard->setBusServiceName('Test');
        $this->boardingCard->setBookingNo('Test123');
        $this->boardingCard->setPassengerName('Test Test');
        $this->boardingCard->setDescription('This is a test bus service');

    }



    /**
     * Cleaning up all the card object after the test has completed
     */
	public  function tearDown()
    {
        unset($this->boardingCard);
    }




}