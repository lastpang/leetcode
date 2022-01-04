<?php
class Solution {
	
	/**
	 * @param Integer[] $nums
	 * @param Integer $target
	 * @return Integer[]
	 */
	function twoSum($nums, $target) {
		for($i=0; $i<count($nums)-1; $i++){
			for($j=$i+1; $j<count($nums); $j++){
				if($target === $nums[$i]+$nums[$j]){
					return array($i, $j);
				}
			}
		}
		
		return array();
	}
}