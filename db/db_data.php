<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 16-12-2016
 * Time: 10:51
 * @author Dennis Kuijpers
 */

namespace kuijpers\dkw\db;


class DB_data
{
     public function __construct(){

     }

    public static function test(){
        echo "Dit is een testje vanuit db_data";
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

    /**
     *
     * Breakdown string to array with supplied data and connector / separator
     *
     * @author Dennis Kuijpers
     * @since 2016-12-16
     *
     * @param string $data Data in string format supplied
     * @param string $connector Connector in string format supplied
     *
     * @return array|bool If supplied information is in string format return the array else return false
     */

    public static function db_entry_breakup($data = "", $connector= "+"){
        // First check if the supplied data and connector are in a string format
        if(is_string($data) && is_string($connector)){
            // explode the string on the supplied connector
            $returning_array = explode($connector, $data);
        }else{
            // If supplied data or connector is not in a string format
            return FALSE;
        }
        return $returning_array;
    }

}