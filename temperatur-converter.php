<?php 
    class Temperatur {
    
        // Properties
        private $number;
        private $unit;
        private $result;
        private $fixTerm = 32;
        private $faktor = 1.8;

        private function calculate() {
            if (strtoupper($this->unit) === 'F') {
                $this->result = ($this->number - $this->fixTerm ) / $this->faktor;
            }
            
            if (strtoupper($this->unit) === 'C') {
                $this->result = ($this->number * $this->faktor) + $this->fixTerm;
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