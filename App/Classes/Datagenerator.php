<?php
    
    class DataGenerator
    {   
        public $number;
        public $isLeapYear;

        public function __construct()
        {

        }

        public function validateData(int $number)
        {
            $error = ''; 
    
            if ($number<=0) {
                $error = 'Zła liczba';             
            }
    
            return $error;
        }

        public function checkLeapYearAndGetAllDates(int $number, bool $isLeapYear = true)
        {
            $array = array();
            
            for ($i=0; $i < $number; $i++) {
                $timestamp = mt_rand(1, time());
                $array[$i]= "<li>" . date("d.m", $timestamp) . "</li>";

                if ($isLeapYear !== true) {
                    while( $array[$i] == '<li>29.02</li>' ) {
                        $timestamp = mt_rand(1, time());
                        $array[$i] = "<li>" . date("d.m", $timestamp) . "</li>";
                    }
                }
            }
            return $array;
        }
    }