<?php
class Pila {
    private $elementos;
    private $tope;
    function __construct()
    {
        $this->elementos=array();
        $this->tope=-1;
    }
    public function insertar($valor)
    {
        $this->tope++;
        $this->elementos[$this->tope]=$valor;
    }
    public function eliminar()
    {
        if($this->tope>=0)
        {
            $valor=$this->elementos[$this->tope];
            unset($this->elementos[$this->tope]);
            $this->tope--;
            return $valor;
        }
        else
        {
            return null;
        }
    }
   
    public function imprimir()
    {
        for($i=$this->tope;$i>=0;$i--)
        {
            echo $this->elementos[$i]."<br>";
        }
    }
}