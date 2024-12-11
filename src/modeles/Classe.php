<?php

class Classe
{
    //private $id;
    //private $classe;
//    public $classe;
    private $data = [];

    public function __construct($id=null, $classe=null)
    {
        //$this->id = $id;
        //$this->classe = $classe;
    }

    public function __get($name)
    {
        print("Methode magique get: {$name}\n");
        return $this->data[$name];
    }

    public function __set($name, $valeur)
    {
        print("Methode magique set: {$name} = {$valeur}\n");
        $this->data[$name] = $valeur;
    }

    public function __call($name, $args)
    {
        print("Fonction magique call {$name}\n");
        print_r($args);
    }

/*
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
    */
}