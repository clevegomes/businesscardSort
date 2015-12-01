<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 5:42 PM
 */

namespace  Cls;


class AirwaysBoardingCard extends tripAbstract {



	private $gate;
	private $gateclosingTime;
	private $seat;
	private $boardingCardDetails = "";
	private $firstname;
	private $lastname;

	/**
	 * Set the passengers first name
	 * @param string $firstname
	 */
	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;
	}

	/**
	 * Set the passengers last name
	 * @param string $lastname
	 */
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
	}

	/**
	 * Set the Gate no code
	 * @param String $gate
	 */
	public function setGate($gate)
	{
		$this->gate = $gate;
	}

	/**
	 * Set the time the gate will close
	 * @param string $gateclosingTime
	 */
	public function setGateclosingTime($gateclosingTime)
	{
		$this->gateclosingTime = $gateclosingTime;
	}

	/**
	 * Set the seat alpha numeric number
	 * @param string $seat
	 */
	public function setSeat($seat)
	{
		$this->seat = $seat;
	}


	/*
	 * Get the card details that is to be printed
	 */
	public function getCardDetails()
	{
		$this->boardingCardDetails = "British Airways \n";
		$this->boardingCardDetails.= "Passenger Details:".$this->firstname." ".$this->lastname."\n";
		$this->boardingCardDetails.= "From".$this->fromLocation."\n";
		$this->boardingCardDetails.= "To".$this->toLocation."\n";
		$this->boardingCardDetails.= "Gate No:".$this->gate;
		$this->boardingCardDetails.= "Gate closing time:".$this->gateclosingTime;
		$this->boardingCardDetails.= "Seat No:".$this->seat;

		return $this->boardingCardDetails;
	}



}