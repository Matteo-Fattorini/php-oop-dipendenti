<?php

require_once("impiegato.php");

class ImpiegatoSalariato extends Impiegato
{
    protected $giorni_lavorati;
    protected $compenso_giornaliero;
    public function __construct($init_imp, $compenso_giornaliero, $giorni_lavorati)
    {
        parent::__construct($init_imp);
        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
    }

    public function calcola_compenso()
    {
        $this->compenso = $this->compenso_giornaliero * $this->giorni_lavorati;
    }
}
