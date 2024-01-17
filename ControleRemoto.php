<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador{
    private $volume;
    private $ligando;
    private $tocando;

    public function __construct(){
        $volume = 50;
        $ligando = false;
        $tocando = false;
    }

    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($volume){
        $this->volume = $volume;
    }
    private function getLigando(){
        return $this->ligando;
    }
    private function setLigando($ligando){
        $this->ligando = $ligando;
    }
    private function getTocando(){
       return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }


    public function ligar(){
        echo "teste";
    }
    public function desligar(){

    }
    public function abrirMenu(){

    }
    public function fecharMenu(){

    }
    public function maisVolume(){
        $this->setVolume($this->getVolume()+5);
    }
    public function menosVolume(){

    }
    public function ligarMudo(){

    }
    public function desligarMudo(){

    }
    public function play(){

    }
    public function pause(){


    }
    public function mostrarVolume(){
        return $this->getVolume();
    }
}