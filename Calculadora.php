<?php

    class Calculadora
    {
        public $x;
        public $y;

        public function __construct()
        {
            $this -> x = 0;
            $this -> y = 0;
        }
        public function soma($x, $y)
        {
            return $this -> x + $this -> y;
        }

        public function sub($x, $y)
        {
            return $x - $y;
        }

        public function mult($x, $y)
        {
            return $x * $y;
        }

        public function div($x, $y)
        {
            return $x / $y;
        }

        public function dobro($x, $y)
        {
            return $x * 2;
        }
        
           public function pot($x, $y)
        {
            $result = 1;
            for($i = 0; $i < $y; $i++){
                $result = $result * $x;
            }
            return $result;
        }
    }

?>