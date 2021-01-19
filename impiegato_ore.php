<?php

require_once("impiegato.php");



class ImpiegatoAdOre extends Impiegato
{
    protected $ore_lavorate;
    protected $compenso_orario;
    public function __construct($init_imp, $compenso_orario, $ore_lavorate)
    {
        if($ore_lavorate == 0){
            throw new Exception("Le ore lavorate non possono essere zero!");
        }
        parent::__construct($init_imp);
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
    }

    public function calcola_compenso()
    {
        $this->compenso = $this->compenso_orario * $this->ore_lavorate;
    }
}
