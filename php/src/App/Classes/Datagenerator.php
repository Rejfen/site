<?php
    include ('DataProcessor.php'); //interface

    class DataGenerator implements DataProcessor
    {   
        public $number;
        public $isLeapYear;
        public $array;

        public function __construct(bool $isLeapYear, int $number)
        {
            $this->isLeapYear = $isLeapYear;
            $this->number = $number; 
        }

        public function getErrors(): array
        {
            $error = []; 

            if ($this->number == NULL) {
                $error[] = 'Wprowadź liczbę';
            } elseif ($this->number <= 0) {
                $error[] = 'Zła liczba';             
            }
    
            return $error;
        }

        public function process() : void
        {
            $array = [];

            if ($this->isLeapYear == true) {
                for ($i = 0; $i < $this->number; $i++) {
                    $start = strtotime("1 January 2020");
                    $end = strtotime("31 December 2020");
                    $timestamp = mt_rand($start, $end);
                    $array[$i] = date("d.m", $timestamp);
                } 
            } else {
                for ($i = 0; $i < $this->number; $i++) {
                    $start = strtotime("1 January 2021");
                    $end = strtotime("31 December 2021");
                    $timestamp = mt_rand($start, $end);
                    $array[$i] = date("d.m", $timestamp);
                }
            }
            $this->array = $array;
        }

        public function getResult()
        {
            
            return $this->array;
        }
    }