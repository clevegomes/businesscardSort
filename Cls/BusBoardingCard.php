<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 3:30 PM
 */

namespace Cls;


class BusBoardingCard extends tripAbstract {


	private $boardingCardDetails = "";
	private $passengerName;

	private $fromLocation;
	private $toLocation;
	private $bookingNo;

/*
 * Get the card details that is to be printed
 */
	public function getCardDetails()
	{
		$this->boardingCardDetails = "Malaga Bus Service \n";
		$this->boardingCardDetails.= "Name of Passenger:".$this->passengerName."\n";
		$this->boardingCardDetails.= "From".$this->fromLocation."\n";
		$this->boardingCardDetails.= "To".$this->toLocation."\n";
		$this->boardingCardDetails.= "Booking No:".$this->bookingNo;

		return $this->boardingCardDetails;
	}


	/**
	 *
	 * @param string $passengerName  Set the passenger name
	 */
	public function setPassengerName($passengerName)
	{
		$this->passengerName = $passengerName;
	}

	/**
	 *
	 * @param mixed $bookingNo Set the booking No
	 */
	public function setBookingNo($bookingNo)
	{
		$this->bookingNo = $bookingNo;
	}






}