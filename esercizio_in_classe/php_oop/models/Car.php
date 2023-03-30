<?php

class Car {
  public $marca;
  public $modello;

  // cilindrata dovrebbe essere compresa tra 1000 e 10000
  public $cilindrata;

  // Setter - delle funzioni che si occupano 
  // solo di assegnare il valore ad una variabile.
  // Per ogi attributo della nostra classe, dovremmo avere un setter dedicato.
  // Il nome della funzione dovrebbe iniziare con "set" 
  // e poi continuare con il nome dell'attributo.
  public function setCilindrata($nuovoValore) {
    if ($nuovoValore < 1000 || $nuovoValore > 10000) {
      return;
    }

    $this->cilindrata = $nuovoValore;
  }
}
