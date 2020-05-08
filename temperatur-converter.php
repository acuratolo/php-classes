<?php 
    class Temperatur {
    
        // Properties
        private $number;
        private $unit;
        private $result;

        private function calculate() {
            if (strtoupper($this->unit) === 'F') {
                $this->result = ($this->number - 32 ) * 5/9;
            }
            
            if (strtoupper($this->unit) === 'C') {
                $this->result = ($this->number * 9/5) + 32;
            }

            if ((strtoupper($this->unit) !== 'C') and (strtoupper($this->unit) !== 'F')) {
                $this->result = 0;
            }
        }

        // Methods
        function __construct($number, $unit) {
            $this->number = $number;
            $this->unit = $unit;
            $this->calculate();
        }

        function get_result() {
            return $this->result;
        }
    }
?>