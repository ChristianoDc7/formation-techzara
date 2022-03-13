<?php

    /*
    tsy mandeha mihitsy ilay autoload ako fa mba jereo oe aiza ny problème stp
     */

    //require_once 'vendor/autoload.php';
    require_once 'src/Operator.php';

    use PhpD2\Operator\Ops;

    echo "Bonjour, \n"; 

    $a = (string) readLine("Veuillez choisir le type d'operation que vous voulez effectuer : \n 1 - Addition \n 2 - Soustraction \n 3 - Multiplication \n 4 - Division \n ");

    $operation = new Ops();

    switch($a)
    {
        case 1 :
            echo 'Résultat : ' . $operation -> Add();
            break;
        case 2 : 
            echo 'Résultat : ' . $operation -> Soustract();
            break;
        case 3 : 
            echo 'Résultat : ' . $operation -> Mulitply();
            break;
        case 4 : 
            echo 'Résultat : ' . $operation -> Division();
            break;
            
    }

    
