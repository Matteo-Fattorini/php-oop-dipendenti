<?php  

require_once ("persona.php");
require_once ("impiegato.php");
require_once ("impiegato_sal.php");
require_once ("impiegato_com.php");
require_once ("impiegato_ore.php");

$dataset = [
    "nome" => "Matteo",
    "cognome" => "Fattorini",
    "codice_fiscale" => "asdasdasd",
    "codice_impiegato" => "1354",
    "compenso" => 0,
];

$prova = new ImpiegatoSalariato($dataset,20,5);

$prova->calcola_compenso();
$prova->to_string();






?>