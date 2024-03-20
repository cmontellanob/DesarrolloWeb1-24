<?php
 class Cola {
private  $primero;
private $ultimo;
private $elementos;

function __Cola(){
    $this->primero = 0;
    $this->ultimo = 0;
    $this->elementos = array();
}
 
function insertar($valor){
    $this -> elementos[$this->ultimo] = $valor;
    $this -> ultimo ++;
}
function  eliminar() {
    if($this->primero == $this->ultimo){
        return 'La cola esta vacia';
    }
    else{
        $valor = $this -> elementos[$this->primero];
        $this->primero++;
        return $valor;
    }

}
function mostrar(){
    if($this->primero == $this->ultimo){
        echo 'La cola esta vacia';
    }
    else{
        for($i = $this->primero; $i < $this->ultimo; $i++){
            echo $this->elementos[$i] .'<br>';
    }
    }


}
 }
?>

