<?php
class Persona
{
    protected $nome;
    protected $cognome;
    protected $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale)
    {
    if (!is_string($nome) || !is_string($cognome)){
        throw new Exception ("Non puoi inserire cose diverse da stringhe nel nome o cognome");
    }
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
    }

    public function to_string()
    {
        foreach ($this as $key => $value) {
            print "$key : $value";
            print "<br>";
        }
    }
}
