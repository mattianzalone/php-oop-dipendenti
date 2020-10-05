<?php

class straordinari extends dipendenti {
  public $GiorniStraordinari;

  public function __construct($_nome, $_cognome, $_eta,$_GiorniStraordinari, $_retribuzioneGiornaliera = 65){
    parent::__construct($_nome, $_cognome, $_eta, $_retribuzioneGiornaliera);
    $this->straordinari = $_GiorniStraordinari;
  }

  public function retribuzioneMensile($_GiorniMensili){
    return $this->retribuzioneGiornaliera * ($_GiorniMensili + $this->straordinari);
  }
}
