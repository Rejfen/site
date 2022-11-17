<?php
    
    class DataGenerator
    {   
        public $number;
        public $isLeapYear;

        public function __construct(bool $isLeapYear)
        {
            $this->isLeapYear = $isLeapYear;
        }

        public function validateData(int $number)
        {
            $error = ''; 
    
            if ($number<=0) {
                $error = 'Zła liczba';             
            }
    
            return $error;
        }

        public function checkLeapYearAndGetAllDates(int $number)
        {
            $array = [];
            
            for ($i=0; $i < $number; $i++) {
                $timestamp = mt_rand(1, time());
                $array[$i]= date("d.m", $timestamp);

                if (($this->isLeapYear) !== true) {
                    while( $array[$i] == '29.02' ) {
                        $timestamp = mt_rand(1, time());
                        $array[$i] = date("d.m", $timestamp);
                    }
                }
            }
            return $array;
        }
    }