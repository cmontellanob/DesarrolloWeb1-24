<?php
class Operaciones{
   private $num1;
   private $num2;

   public function __construct($a, $b){
    $this->num1=$a;
    $this->num2=$b;
   }
   public function sumar(){
      return $this->num1+$this->num2;
   }
   public function restar(){
    return $this->num1-$this->num2;
 }
 public function dividir(){
    return $this->num1/$this->num2;
 }
 public function multiplicar(){
    return $this->num1*$this->num2;
 }
}
?>