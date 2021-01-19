<?php

require_once("persona.php");

class Impiegato extends Persona
{
    protected $codice_impiegato;
    protected $compenso;

    public function __construct($init_imp)
    {
        parent::__construct($init_imp["nome"], $init_imp["cognome"], $init_imp["codice_fiscale"]);
        $this->codice_impiegato = $init_imp["codice_impiegato"];
        $this->compenso = $init_imp["compenso"];
    }

    public function calcola_compenso()
    {
        print $this->compenso;
    }
}