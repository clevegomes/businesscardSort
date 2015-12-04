<?php
/**
 * Created by PhpStorm.
 * User: Cleve
 * Date: 12/3/15
 * Time: 12:36 AM
 */

namespace Tst;
use Cls\RailwayBoardingCard;
use Tst\AbstractBoardingCardTest;


class RailwayBoardingCardTest  extends AbstractBoardingCardTest {



    public function  setUp(){

        $this->boardingCard = new RailwayBoardingCard();
        $this->boardingCard->setRailRoadName('test');
        $this->boardingCard->setBoardingDate('12 Dec 2015');
        $this->boardingCard->setBoardingTime('12:30 pm');
        $this->boardingCard->setCarNo('56ERER');
        $this->boardingCard->setPassengerName('Test Test');
        $this->boardingCard->setRailRoadName('Test Company');
        $this->boardingCard->setRoute('Route XYZ');
        $this->boardingCard->setSeatType('Open');
        $this->boardingCard->setSeatNo('NA');
        $this->boardingCard->setDetails('Test details');


    }

    public function tearDown()
    {
        unset($this->boardingCard);
    }




} 