<?php  

require ("persona.php");

$impiegato_salariato = new ImpiegatoSalariato("marco","boddi","asdasd","5555",30,30);

$impiegato_commissione = new ImpiegatoSuCommissione("Matteo","Fattorini","ffasdasdsadasd","136","Revamp_website",800);


$impiegato_commissione->to_string();
$impiegato_commissione->calcola_compenso();





?>