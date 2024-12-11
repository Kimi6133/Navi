<?php 

class Classe {
    private array $data = [];

    public function __set(string $name, $value): void {
        $this->data[$name] = $value;
    }

    public function __get(string $name) {
        return $this->data[$name] ?? null;
    }
}

$objet = new Classe();
$objet->classe = "valeur"; // Pas d'erreur ici
echo $objet->classe; // "valeur"
