<?php
/**
 * Created by PhpStorm.
 * User: Cleve
 * Date: 12/3/15
 * Time: 4:45 AM
 */
require_once("vendor/autoload.php");




$BusCard = new \Cls\BusBoardingCard();

$BusCard->setBusServiceName('Paras Kuljetus');
$BusCard->setPassengerName('Mohammad Malik');
$BusCard->setBookingNo('WE2232');
$BusCard->setDepartureLocation('Dubai','fi');
$BusCard->setArrivalLocation('Sharjah','fi');
$BusCard->setDescription("Luxury Bussikuljetus Dubai Sharjah.Snacks ja juomia tarjoillaan bussissa");

$CardList[]= $BusCard;


$AirCard = new \Cls\AirwaysBoardingCard();
$AirCard->setAiwaysDetails('French Airways');
$AirCard->setFirstname('Mohammad');
$AirCard->setLastname('Malik');
$AirCard->setGate('D2');
$AirCard->setGateclosingTime('1 Am');
$AirCard->setSeat('L 13');
$AirCard->setDepartureLocation("Sharjah",'fr');
$AirCard->setArrivalLocation("londres",'fr');
$AirCard->setDetails("Ceci est un vol direct de Sharjah UAE à Londres au Royaume-Uni. Nourriture et boissons seront servis sur le vol");

$CardList[] = $AirCard;


$BusCard = new \Cls\BusBoardingCard();

$BusCard->setBusServiceName('France service public de bus');
$BusCard->setPassengerName('Mohammad Malik');
$BusCard->setBookingNo('Na');
$BusCard->setDepartureLocation('toulouse','fr');
$BusCard->setArrivalLocation('lyon','fr');
$BusCard->setDescription("Ceci est un service de bus public de toulouse lyon");

$CardList[]= $BusCard;


$AirCard = new \Cls\AirwaysBoardingCard();
$AirCard->setAiwaysDetails('Emirates Airways');
$AirCard->setFirstname('Mohammad');
$AirCard->setLastname('Malik');
$AirCard->setGate('A12');
$AirCard->setGateclosingTime('3 Am');
$AirCard->setSeat('EK234');
$AirCard->setDepartureLocation("lyon",'en');
$AirCard->setArrivalLocation("liverpool",'en');
$AirCard->setDetails("This is a business class direct flight from Lyon in France to liverpool in UK .Drinks and food will be served on the flight");

$CardList[] = $AirCard;


$RailCard = new \Cls\RailwayBoardingCard();
$RailCard->setRailRoadName('English Railways');
$RailCard->setPassengerName('Mohammad Malik');
$RailCard->setSeatNo('T454');
$RailCard->setCarNo(3);
$RailCard->setSeatNo('45');
$RailCard->setSeatType('Reserved');
$RailCard->setRoute('London to Manchester shorted route');
$RailCard->setBoardingDate('25-12-2015');
$RailCard->setBoardingTime('12pm');
$RailCard->setDepartureLocation('london','en');
$RailCard->setArrivalLocation('manchester','en');
$RailCard->setDetails('Non stop journey from London to Manchester.');


$CardList[] = $RailCard;



$BusCard = new \Cls\BusBoardingCard();

$BusCard->setBusServiceName('Arabia');
$BusCard->setPassengerName('Mohammad Malik');
$BusCard->setBookingNo('BUS234');
$BusCard->setDepartureLocation('abu dhabi','en');
$BusCard->setArrivalLocation('dubai','en');
$BusCard->setDescription('Arabia Luxury  Bus service from Abu dhabi  to  Dubai');

$CardList[]= $BusCard;


$AirCard = new \Cls\AirwaysBoardingCard();
$AirCard->setAiwaysDetails('Finnish Airways');
$AirCard->setFirstname('Mohammad');
$AirCard->setLastname('Malik');
$AirCard->setGate('6Y2');
$AirCard->setGateclosingTime('3 pm');
$AirCard->setSeat('15');
$AirCard->setDepartureLocation("manchester",'fi');
$AirCard->setArrivalLocation("pariisi",'fi');
$AirCard->setDetails("Suomen Airways suoraa lentoa Manchester Britanniasta Pariisi Ranska. Juomia ja ruokaa tapana servered lennolla");

$CardList[] = $AirCard;




$RailCard = new \Cls\RailwayBoardingCard();
$RailCard->setRailRoadName('Chemins de fer francais');
$RailCard->setPassengerName('Mohammad Malik');
$RailCard->setSeatNo('U09');
$RailCard->setCarNo(1);
$RailCard->setSeatNo('NA');
$RailCard->setSeatType('Open seat');
$RailCard->setRoute('Paris a Toulouse longue route');
$RailCard->setBoardingDate('26-12-2015');
$RailCard->setBoardingTime('3pm');
$RailCard->setDepartureLocation('paris','fr');
$RailCard->setArrivalLocation('toulouse','fr');
$RailCard->setDetails('Voyage sans escale de Paris a Toulouse');


$CardList[] = $RailCard;






$cardSortObj =new \Cls\CardSort();

$CardList = $cardSortObj->getSortedArray($CardList);


foreach($CardList as $selCard)
{
    echo $selCard->getCardDetails();
}
