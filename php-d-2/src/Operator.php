<?php

namespace PhpD2\Operator;

class Ops
{

   public function Add()
   {
        $a = (int) readLine('Donner le premier nombre : ');
        $b = (int) readLine('Donner le deuxième nombre : ');
        return $a + $b;
   }

   public function Soustract()
   {
      $a = (int) readLine('Donner le premier à soustraire : ');
      $b = (int) readLine('Donner le deuxième pour soustraire : ');

      return $a - $b;
   }

   public function Mulitply()
   {
      $a = (int) readLine('Donner le premier nombre : ');
      $b = (int) readLine('Donner le deuxième nombre : ');
      return  $a * $b;
   }

   public function Division()
   {
      $a = (int) readLine('Donner le premier à diviser : ');
      $b = (int) readLine('Donner le deuxième pour diviser : ');
      return  $a / $b;
   }

}