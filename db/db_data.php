<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 16-12-2016
 * Time: 10:51
 */

namespace vendor\dkw\db;


class db_data
{
     public function __construct(){

     }

    /**
     *
     * Create string from array with connector / separator
     *
     * @author Dennis Kuijpers
     * @since 2016-11-24
     *
     * @param array $data Array of data that needs to turn into a string
     * @param string $connector The connector to use between the values of the array in the string
     *
     * @return boolean Returns FALSE when $data is not an array
     *
     * @return string This is the string that contains the values of the array with the connector between the values
     */

    public static function db_entry_create($data = [], $connector= "+") {
        // We start with an empty array
        $connected_data_from_array = "";
        // First check if the $data variable is an arry
        if(is_array($data)){
            // Now let's setup the string
            foreach ($data as $value) {
                // If nothing already happened we start with the first value
                if(empty($connected_data_from_array)){
                    $connected_data_from_array = $value;
                }else{
                    // When we already started with creating the string we continue with adding values
                    $connected_data_from_array = $connected_data_from_array.$connector.$value;
                }
            }
        }else{
            // When $data is not an array
            return FALSE;
        }
        // We finished creating our string and now send it back
        return $connected_data_from_array;
    }

}