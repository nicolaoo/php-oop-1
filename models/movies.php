<?php


class Movies {

    public $title;
    public $regista;
    public $attori;
    public $valutazione;

    function __construct($_title, $_regista, $_attori, $_valutazione) {
        $this->title = $_title;
        $this->regista = $_regista;
        $this->attori= $_attori;
        $this->valutazione = $_valutazione;
    }
    
}