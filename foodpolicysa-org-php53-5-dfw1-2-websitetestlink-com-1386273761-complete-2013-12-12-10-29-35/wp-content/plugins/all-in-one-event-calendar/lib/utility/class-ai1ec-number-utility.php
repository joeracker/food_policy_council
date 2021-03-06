<?php

/**
 * Numbers management utility library
 *
 * @author     Justas Butkus <justas@butkus.lt>
 * @since      2012.10.09
 *
 * @package    AllInOneCalendar
 * @subpackage AllInOneCalendar.Lib.Utilities
 */
class Ai1ec_Number_Utility
{

	/**
	 * map_to_integer method
	 *
	 * Return positive integer values from given array.
	 *
	 * @param array $input Allegedly list of positive integers
	 *
	 * @return array List of positive integers
	 */
	static public function map_to_integer( array $input ) {
		$output = array();
		foreach ( $input as $value ) {
			$value = (int)$value;
			if ( $value > 0 ) {
				$output[] = $value;
			}
		}
		return $output;
	}

	/**
	 * convert_to_int_list method
	 *
	 * Convert given input to array of positive integers.
	 *
	 * @param char  $separator Value used to separate integers, if any
	 * @param array $input     Allegedly list of positive integers
	 *
	 * @return array List of positive integers
	 */
	static public function convert_to_int_list( $separator, $input ) {
		return self::map_to_integer(
			Ai1ec_Utility_Array::opt_explode( $separator, $input )
		);
	}

	/**
	 * db_bool method
	 *
	 * Convert value to MySQL boolean
	 *
	 * @param int|bool $value
	 *
	 * @return int Value to use as MySQL boolean value
	 */
	static public function db_bool( $value ) {
		return (int)(bool)intval( $value );
	}

	/**
	 * index method
	 *
	 * Get valid integer index for given input.
	 *
	 * @param int $value   User input expected to be integer
	 * @param int $limit   Lowest acceptable value
	 * @param int $default Returned when value is bellow limit [optional=NULL]
	 *
	 * @return int Valid value
	 */
	static public function index( $value, $limit = 0, $default = NULL ) {
		$value = (int)$value;
		if ( $value < $limit ) {
			return $default;
		}
		return $value;
	}

	/**
	 * casts all the values of the array to int
	 * 
	 * @param array $data
	 * @return array:
	 */
	static public function cast_array_values_to_int( array $data ) {
		foreach( $data as &$value ) {
			$value = (int) $value;
		}
		return $data;
	}
}
