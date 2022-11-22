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
    
            if ($number <= 0) {
                $error = 'Zła liczba';             
            }
    
            return $error;
        }

        public function checkLeapYearAndGetAllDates(int $number)
        {
            $array = [];

            switch ($this->isLeapYear) {
                case true:
                    for ($i = 0; $i < $number; $i++) {
                        $start = strtotime("1 January 2020");
                        $end = strtotime("31 December 2020");
                        $timestamp = mt_rand($start, $end);
                        $array[$i] = date("d.m", $timestamp);
                    }
                    break;
                case false:
                    for ($i = 0; $i < $number; $i++) {
                        $start = strtotime("1 January 2021");
                        $end = strtotime("31 December 2021");
                        $timestamp = mt_rand($start, $end);
                        $array[$i] = date("d.m", $timestamp);
                    }
                    break;
            }
            return $array;
        }
    }