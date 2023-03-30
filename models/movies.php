<?php

include_once __DIR__. '.\valutazione.php';

class Movies {

    public $title;
    public $regista;
    public $attori;
    public $valutazione;
    public $genere;

    function __construct($_title, $_regista, $_attori, Valutazione $_valutazione, $_genere) {
        $this->title = $_title;
        $this->regista = $_regista;
        $this->attori= $_attori;
        $this->valutazione = $_valutazione;
        $this->genere = $_genere;
    }
    
}