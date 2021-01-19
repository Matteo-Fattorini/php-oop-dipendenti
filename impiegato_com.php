<?php

require_once("impiegato.php");

trait Progetto
{
    protected $nome_progetto;
    protected $commissione_progetto;
}

class ImpiegatoSuCommissione extends Impiegato
{
    use Progetto;

    public function __construct($init_imp, $nome_progetto, $commissione_progetto)
    {
        if($nome_progetto == ""){
            throw new Exception ("Il nome progetto non può essere vuoto!");
        }
        parent::__construct($init_imp);
        $this->nome_progetto = $nome_progetto;
        $this->commissione_progetto = $commissione_progetto;
    }

    public function calcola_compenso()
    {
        $this->compenso = $this->commissione_progetto;
    }
}
