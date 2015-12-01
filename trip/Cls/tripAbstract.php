<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 11:42 AM
 */

namespace Cls;

/**
 * tripAbstract extends the tripInterface so as to define few methods to be be used in the child classes
 *
 * Class tripAbstract
 * @abstract
 * @package Trip
 *
 *
 *
 */
Abstract class  tripAbstract implements tripInterface{


	/**
	 * Location to id mapping in Engish
	 * @var array
	 */
	private $locationMapEN = ['dubai'=>1,'abu dhabi'=>2,'sharjah'=>3,'london'=>4,'manchester'=>5,'liverpool'=>6,
							'Paris'=>7,'Lyon'=>8,'Toulouse'=>9,'Marseille'=>10];


	/*
	 * Location to id mapping in French
	 * @var array
	 */
	private $locationMapFR = ['dubai'=>1,'abu dhabi'=>2,'sharjah'=>3,'londres'=>4,'manchester'=>5,'liverpool'=>6,
		'Paris'=>7,'Lyon'=>8,'Toulouse'=>9,'Marseille'=>10];


	/*
	 * Location to id mapping in Arabic
	 * @var array
	 */
	private $locationMapAR = ['دبي'=>1,'أبوظبي'=>2,'الشارقة'=>3,'لندن'=>4,'مانشستر'=>5,'ليفربول'=>6,
		'باريس'=>7,'ليون'=>8,'تولوز'=>9,'مرسيليا'=>10];

	/**
	 * Arrival location id holder
	 * @var int
	 */
	private $arrivalLocationId;


	/**
	 * Arrival location city
	 * @var String
	 */
	private  $arrivalLocationCity;


	/**
	 * Departure location id holder
	 * @var int
	 */
	private $departureLocationId;


	/**
	 * Departure location city
	 * @var String
	 */
	private  $departureLocationCity;

	/*
	 *  Methods need to be defined in the different card classes
	 */
	abstract public function getCardDetails();


	/**
	 * @param string $location  Name of the Arrival location (city)
	 * @param string $lg    Code of the language the location is in
	 * @return int     1 Invalid Language, 2 Invalid City , 0 Valid language and city
	 */
	public function setArrivalLocation($location,$lg)
	{
		$lg = strtoupper($lg);
		try{
			if(!isset($this->{"locationMap$lg"}))
				throw new \Exception(1);

			if(!isset($this->{"locationMap$lg"}[$location]))
				throw new \Exception(2);

			$this->arrivalLocationId = $this->{"locationMap$lg"}[$location];
			$this->arrivalLocationCity = $location;

			return 0;


		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}


	}

	/**
	 * @param string $location  Name of the Departure location (city)
	 * @param string $lg    Code of the language the location is in
	 * @return int     1 Invalid Language, 2 Invalid City , 0 Valid language and city
	 */
	public function setDepartureLocation($location,$lg)
	{
		$lg = strtoupper($lg);


		try{
			if(!isset($this->{"locationMap$lg"}))
				throw new \Exception(1);

			if(!isset($this->{"locationMap$lg"}[$location]))
				throw new \Exception(2);

			$this->departureLocationId = $this->{"locationMap$lg"}[$location];
			$this->departureLocationCity = $location;

			return 0;


		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}


	/**
	 * Getter to get the Arrival location Id
	 * @return int
	 */
	 public function getArrivalId()
	{
		return $this->arrivalLocation;
	}


	/**
	 * Getter to get the Departure location Id
	 * @return int
	 */
	public function getDepartureId()
	{
		return $this->departureLocation;
	}
}