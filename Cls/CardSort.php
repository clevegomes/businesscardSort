<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 30/11/2015
 * Time: 11:58 AM
 */

namespace Cls;


class CardSort {



	/**
	 * Merge Sort Algorithm with a Twist .
	 *  At each stage in the stack there will be a sorted and unsorted array.(since sort is only is
	 * arrival 1st card = departure 2nd card )
	 *  At each stage in the stack the MergeSort will sort the unsorted array and merge the sorted array
	 * The best case would be there is no unsorted array at any level in the stack and time complexity will be nlog(n)
	 * The worst case would be there is no sorted array at any level in the stack and time complexity will be
	 * n+(n-1)+(n-2)+(n-3)+ .......+(n -(n-1))
	 * @param array $unsortedArry
	 * @return array|int   Sorted Array,1->Invalid Array
	 * @throws Exception
	 */
	function MergeSort($unsortedArry = array())
	{

		try{
			if(!is_array($unsortedArry) || sizeof($unsortedArry) ==0)
			throw new \Exception(1);


			return $unsortedArry;

		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}

	}

}