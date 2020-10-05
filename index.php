<?php
require_once 'classes/dipendenti.php';
require_once 'classes/straordinari.php';

$dipendente1 = new dipendenti('mattia','anzalone',23);
var_dump($dipendente1);
echo 'La retribuzione mensile è : '.' '.$dipendente1->retribuzioneMensile(29);
// modifico il nome
$dipendente1->setNome('mario');
var_dump($dipendente1);
echo 'La retribuzione mensile è : '.' '.$dipendente1->retribuzioneMensile(25);
// cambio il cognome
$dipendente1->setCognome('rossi');
var_dump($dipendente1);
echo 'La retribuzione mensile è : '.' '.$dipendente1->retribuzioneMensile(26);
// uso il GetContratto
$dipendente1->contratto = 'Full time';
var_dump($dipendente1);
// uso il traits
$dipendente1 = new straordinari('mattia','anzalone',23,3);
$dipendente1->contratto = 'Part time';
var_dump($dipendente1);
echo 'La retribuzione mensile è : '.' '.$dipendente1->retribuzioneMensile(26);
