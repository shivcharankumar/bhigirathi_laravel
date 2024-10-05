<?php

///Importent function
if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
    }
}

if(!function_exists('get_formated_date')){
    function get_formated_date($date,$formate){
        $formatteddate = date($formate, strtotime($date));
        return $formatteddate;
    }
}