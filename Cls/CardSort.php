<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 * Date: 30/11/2015
 * Time: 11:58 AM
 */

namespace  Cls;


class CardSort {




	/**
	 * Merge Sort Algorithm with a Twist .
	 *  At each stage in the stack there will be a sorted and unsorted array.(since sort is only is
	 * arrival 1st card = departure 2nd card )
	 *  At each stage in the stack the MergeSort will sort the unsorted array and merge the sorted array
	 * The best case would be there is no unsorted array at any level in the stack and time complexity will be nlog(n)
	 * The worst case would be there is no sorted array at any level in the stack and time complexity will be
	 * n+(n-1)+(n-2)+(n-3)+ .......+(n -(n-1))
	 * @param array $boardingCardArry
	 * @return array|int   Sorted Array,1->Invalid Array
	 * @throws Exception
	 */
	private function MergeSort($boardingCardArry = array())
	{


		try{
			if(!is_array($boardingCardArry['us']) || sizeof($boardingCardArry['us']) ==0)
			throw new \Exception(1);




            /**
             * Array is not empty
             */
            if(sizeof($boardingCardArry['us']) >1)
            {


                /**
                 * selecting a mid to divide the array
                 */
                $mid = sizeof($boardingCardArry['us'])/2;
                $leftarray = $rightarry = $newright= $newleft = array();


                /**
                 * creating the left and right arrays
                 */
                foreach($boardingCardArry['us'] as $key => $val)
                {
                    if($key <= ($mid-1))
                        $leftarray[]= $val;
                    else
                        $rightarry[]= $val;
                }



                /**
                 * Calling the Merge function on the left and right array
                 */
                if(sizeof($leftarray)>0)
                    $newleft =$this->MergeSort(array("s"=>array(),"us"=>$leftarray));

                if(sizeof($rightarry)>0)
                    $newright =$this->MergeSort(array("s"=>array(),"us"=>$rightarry));



                $cntLeft = $cntRight = 0;
                $leftSize = sizeof($newleft);
                $rightSize  = sizeof($newright);
                $returnArry = array();
                $sortedArry = array_merge($newleft["s"],$newright["s"]);
                $unSortedArry = array_merge($newleft["us"],$newright["us"]);



                /**
                 * Creating a list of sorted arrays and Merging the unsorted elements in the sorted array if possible
                 */
                $ignoreList = [];
                $sizeOfUnsortedArry = sizeof($unSortedArry);
                for($i=0;$i<$sizeOfUnsortedArry;$i++)
                {
                    $backElement= $frontElement =null;

                    /**
                     *  Creating a list of sorted arrays
                     */
                    for($j=$i+1;$j<$sizeOfUnsortedArry;$j++)
                    {
                        if(!in_array($j,$ignoreList))
                        {
                         if($unSortedArry[$i]->getArrivalId() == $unSortedArry[$j]->getDepartureId())
                         {
                             $frontElement = $j;
                         }
                         if($unSortedArry[$i]->getDepartureId() == $unSortedArry[$j]->getArrivalId())
                         {
                                $backElement = $j;
                         }

                         if($backElement != null && $frontElement != null)
                         {
                             $ignoreList[]= $backElement;
                             $ignoreList[]= $frontElement;
                             $ignoreList[]= $i;
                             $sortedArry[] = [$unSortedArry[$backElement],$unSortedArry[$i],$unSortedArry[$frontElement]];
                             $backElement= $frontElement =null;
                             break;
                         }
                        }
                    }
                    if($backElement != null)
                    {
                        $ignoreList[]= $backElement;
                        $ignoreList[]= $i;
                        $sortedArry[] = [$unSortedArry[$backElement],$unSortedArry[$i]];
                    }
                    if($frontElement != null)
                    {
                        $ignoreList[]= $frontElement;
                        $ignoreList[]= $i;
                        $sortedArry[] = [$unSortedArry[$i],$unSortedArry[$frontElement] ];
                    }

                    /**
                     * Add the unsorted elements in the sorted array if possible
                     */
                    if(!in_array($j,$ignoreList))
                    {
                    foreach($sortedArry as $selSortedArry)
                    {
                        $first = $selSortedArry[0];
                        $last  = $selSortedArry[(sizeof($selSortedArry)-1)];
                        if($last->getArrivalId() == $unSortedArry[$i]->getDepartureId())
                        {
                            //Append to end
                            $selSortedArry[] = $unSortedArry[$i];
                        }
                        else if($first->getDepartureId() == $unSortedArry[$i]->getArrivalId())
                        {
                            //Append to start
                            array_unshift($selSortedArry,$unSortedArry[$i]);

                        }
                    }
                    }

                }

                // New unsorted array
                $unSortedArry = array_diff_key($unSortedArry, array_flip($ignoreList));


                //all ids of list that need to be ignored
                $ignoreList = [];
                $sizeOfsortedArry= sizeof($sortedArry);
                $mergeflag=false;

                // New sorted list will be in this array
                $newSortedArry = [];

                //Each sorted element
                for($i=0;$i<$sizeOfsortedArry;$i++)
                {
                    //Skipping if in the ignore list
                    if(!in_array($i,$ignoreList))
                    {
                        //Getting the first and last element in the current list
                        $lastOfi =$sortedArry[$i][sizeof($sortedArry[$i]) -1];
                        $firstOfi =sizeof($sortedArry[$i][0]);

                        //Current sorted list
                        $currentSortArry[] = $sortedArry[$i];
                        /**
                         * Come back for second pass of merge was made
                         */
                        do
                        {
                            //iterating to the  full sorted list to see if the current sorted list can be merged
                            for($j=0;$j<$sizeOfsortedArry;$j++)
                            {
                                // proceed only if the selected sorted list was not processed before or if the selected sorted list is not same as the current sorted list
                                if(($i != $j) && !in_array($j,$ignoreList))
                                {
                                    //Getting the first and last element of the selected sorted list
                                    $lastOfj =$sortedArry[$j][sizeof($sortedArry[$j]) -1];
                                    $firstOfj =sizeof($sortedArry[$j][0]);

                                    // The first of i compare with the last of i
                                    if($firstOfi->getDepartureId() == $lastOfj->getArrivalId())
                                    {
                                        /**
                                         * Append to start
                                         */
                                        array_unshift($currentSortArry,$sortedArry[$j]);

                                        // Changing the first element in the current sorted list
                                        $firstOfi = $sortedArry[$j];
                                        $ignoreList[]= $j;
                                        $mergeflag = true;
                                    }
                                    // The last of i compare with the first of j
                                    else if($lastOfi->getArrivalId() == $firstOfj->getDepartureId())
                                    {
                                        /**
                                         * Append to end
                                         */
                                        $currentSortArry[] = $sortedArry[$j];

                                        // Changing ghe last element in the current sort list
                                        $lastOfi = $sortedArry[$j];
                                        $ignoreList[]= $j;
                                        $mergeflag =true;
                                    }
                                }


                            }


                        }
                        while($mergeflag == true);

                        $newSortedArry[] = $currentSortArry;
                    }
                }




                $returnArry = array("s"=>$newSortedArry,"us"=>$unSortedArry);
                return $returnArry;

            }


            /*
                * Last element in the error
                */
            else if(sizeof($boardingCardArry) ==1)
            {
                return array("s"=>array(),"us"=>$boardingCardArry);

            }
            /**
             * Invalid Array
             */
            else
            {
                echo "invalid sort array";
                exit;
             //   throw new Exception("Invalid unsorted Array in Merge Sort");
            }

		}
		catch(\Exception $e)
		{
			return array('error'=>$e->getMessage());
		}

	}


    /**
     * This general sort is a modification of a bubble sort. Here every next sorted element tends to bubble to the top.
     * Best->n,Avg->n2,Worst->n2
     * @param tripAbstract $unsortedArray . This is an unsorted list of Boarding cards
     * @return tripAbstract array . Returns a sorted list of boarding cards
     */
    public function GeneralSort($unsortedArray)
    {
        try{
            if(!is_array($unsortedArray) || sizeof($unsortedArray) ==0)
                throw new \Exception(1);



            //all ids of list that need to be ignored
            $ignoreList = [];
            $sizeOfsortedArry= sizeof($unsortedArray);

            // New sorted list will be in this array
            $newSortedArry = [];

            //Each sorted element
//            for($i=0;$i<$sizeOfsortedArry;$i++)
//            {
//                //Skipping if in the ignore list
//                if(!in_array($i,$ignoreList))
//                {
                    $i=0;
                    //Getting the first and last element in the current list
                    $lastOfi =$firstOfi = $unsortedArray[$i];

                    //Current sorted list
                    $currentSortArry[] = $unsortedArray[$i];
                    /**
                     * Come back for second pass of merge was made
                     */
                    do
                    {
                        $mergeflag=false;

                        //iterating to the  full sorted list to see if the current sorted list can be merged
                        for($j=0;$j<$sizeOfsortedArry;$j++)
                        {
                            // proceed only if the selected sorted list was not processed before or if the selected sorted list is not same as the current sorted list
                            if(($i != $j) && !in_array($j,$ignoreList))
                            {
                                //Getting the first and last element of the selected sorted list
                                $lastOfj =$firstOfj = $unsortedArray[$j];

                                // The first of i compare with the last of i
                                if($firstOfi->getDepartureId() == $lastOfj->getArrivalId())
                                {
                                    /**
                                     * Append to start
                                     */
                                    array_unshift($currentSortArry,$unsortedArray[$j]);

                                    // Changing the first element in the current sorted list
                                    $firstOfi = $unsortedArray[$j];
                                    $ignoreList[]= $j;
                                    $mergeflag = true;
                                }
                                // The last of i compare with the first of j
                                else if($lastOfi->getArrivalId() == $firstOfj->getDepartureId())
                                {
                                    /**
                                     * Append to end
                                     */
                                    $currentSortArry[] = $unsortedArray[$j];

                                    // Changing ghe last element in the current sort list
                                    $lastOfi = $unsortedArray[$j];
                                    $ignoreList[]= $j;
                                    $mergeflag =true;
                                }
                            }


                        }


                    }
                    while($mergeflag == true);

                    $newSortedArry = $currentSortArry;

                //}
            //}

            return $newSortedArry;
        }
        catch(\Exception $e)
		{
            return array('error'=>$e->getMessage());
        }
    }


	/**
	 * @return mixed
	 */
	public function getSortedArray($unsortedArray = array())
	{

        $sortedArray = $this->GeneralSort($unsortedArray);
        if(isset($sortedArray['error']))
        {
            return $sortedArray['error'];
        }

        return $sortedArray;

//        $newSortList = ['us'=>$unsortedArray,'s'=>array()];
//		$sortedArray = $this->MergeSort($newSortList);
//        if(isset($sortedArray['error']))
//        {
//            return $sortedArray['error'];
//        }
//
//		return $sortedArray['us'];
	}



}