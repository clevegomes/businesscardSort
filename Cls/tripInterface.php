<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 29/11/2015
 * Time: 11:22 AM
 */

namespace  Cls;
/**
 * Interface tripInterface defines all the methods that need to exist in every Type of Card Class
 */
interface tripInterface
{
	/**
	 * Get the card details .It may be different for different types of cards. there fore needs to be defined in the Class
	 */
	public function getCardDetails();

	/**
	 *
	 * @param  string $location Name of the location
	 * @param  string $lg Language code
	 *
	 */
	public function setArrivalLocation($location,$lg);


	/**
	 * @param string $location Name of the location
	 * @param  string $lg Language code
	 *
	 */
	public function setDepartureLocation($location,$lg);


	/**
	 * Get the arrival id
	 * @return int
	 */
	public function getArrivalId();

	/**
	 *Get the departure id
	 * @return int
	 */
	public function getDepartureId();


}