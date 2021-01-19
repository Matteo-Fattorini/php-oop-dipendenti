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


try {
    $impiegato_salariato = new ImpiegatoSalariato($dataset,0,10);
}
catch (Exception $e){
    echo("Non hai inserito i dati giusti nella creazione di Impiegato Salaritato");
    echo "<br>";
    echo ($e->getMessage());
    echo "<br>";
    echo "<br>" . "<br>";

}
try {
    $impiegato_commissione = new ImpiegatoSuCommissione($dataset,"",500);
}
catch (Exception $e){
    echo("Non hai inserito i dati giusti nella creazione di Impiegato su commissione");
    echo "<br>";
    echo ($e->getMessage());
    echo "<br>" . "<br>";
    

}





?>