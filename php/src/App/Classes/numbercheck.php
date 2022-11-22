<?php
    class PerfNumberCheck implements DataProcessor
    {
        public $number;
	    public $array;
	
        public function __construct(int $number)
        {
            $this->number = $number;
        }

        public function getErrors(): array
        {
            $error = [];
            
            if ($this->number <= 0) {
                $error[] = 'Zła liczba';
            }
            if ($this->number > 536870910) {
                $error[] = 'Za duża liczba';
            }
        
            return $error;
        }
        
        public function process(): void 
        {
            $array = [];
            for ($i = 1;$i < $this->number;$i++) {
                if ($this->number % $i==0) {
                    $array[] = $i;
                }
            }
            
            $this->array = $array;
        }
        
        public function getResult()
        {
            
            if (array_sum($this->array) == $this->number) {
                return "jest";
            } else {
                return "nie jest";
            }
        }
    }
