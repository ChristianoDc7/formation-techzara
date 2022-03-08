<?php

    require_once('interface.php');

    class Volkswagen implements Cars
    {
        private $tire = 4 ;
        private $wheel = 'Plastic' ;
        private $door = 'Metal' ;

        public function getTire()
        {
            return $this -> tire;
        }

        public function getWheel()
        {
            return $this -> wheel;
        }

        public function getDoor()
        {
            return $this -> door;
        }



    }


    $volkswagen = new Volkswagen();