<?php

class Valutazione {

    public $premi_oscar;
    public $golden_globes;
    public $bafta;
    public $box_office;

    public function __construct($_premi_oscar, $_golden_globes, $_bafta, $_box_office) {
        $this->premio_oscar = $_premio_oscar;
        $this->golden_globes = $_golden_globes;
        $this->bafta = $_bafta;
        $this->box_office = $box_office;
    }
}