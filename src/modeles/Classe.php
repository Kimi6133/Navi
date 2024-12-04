<?php

class Classe
{
    private $id;
    private $classe;

    public function __construct($id, $classe)
    {
        $this->id = $id;
        $this->classe = $classe;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setID($id)
    {
        if(is_int($id) && $id > 0)
        {
            $this->id = $id;
        }
        
    }
    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe)
    {
        if(is_string($classe) && $classe !== '')
        {
            $this->classe = $classe;
        }
    }
}