<?php

    require_once('volkswagen.php');

    class Passat extends Volkswagen 
    {

    }

    $passat = new Passat();
    echo $passat -> getTire();