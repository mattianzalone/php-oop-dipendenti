<?php
require_once __DIR__.'/../traits/GetContratto.php';
class dipendenti{
    use GetContratto;
    public $nome;
    public $cognome;
    public $eta;
    public $retribuzioneGiornaliera;




    public function __construct($_nome, $_cognome, $_eta, $_retribuzioneGiornaliera = 65){
      $this->nome = $_nome;
      $this->cognome = $_cognome;
      $this->eta = $_eta;
      $this->retribuzioneGiornaliera = $_retribuzioneGiornaliera;

    }

    public function retribuzioneMensile($_GiorniMensili){
        return $this->retribuzioneGiornaliera * $_GiorniMensili;
    }

    public function setNome($_nome){
      $this->nome = $_nome;
    }

    public function getNome(){
      if(empty($this->nome)){
        die("Non hai inserito il nome");
      }
      return $this->nome;
    }

    public function setCognome($_cognome){
      $this->cognome = $_cognome;
    }

    public function getCognome(){
      if(empty($this->cognome)){
        die("Non hai inserito il cognome");
      }
      return $this->cognome;
    }

}
