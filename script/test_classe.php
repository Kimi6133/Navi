<?php
// Mesure du temps d'execution
$index_start = microtime(true);

if (! empty($_SERVER['DOCUMENT_ROOT'])) {
    throw new \Exception("Fatal error: This application must be run in a CLI environnement.", 1);
}

// Configuration dossiers
$sBasepath = '/script/';
echo "Dossier base: {$sBasepath}\n";
$sClassPath = $sBasepath . 'src/';
require_once($sClassPath . "autoload.php");

$classe = new Classe();
$classe->id = "schmilblick";
print("|".$classe->id."|\n");
$classe->classe = "classe xyz";
print("\n|".$classe->classe."|\n");
//$classe->setClasse("classe xyz");
//print("|".$classe->getClasse()."|");

$classe->schmilblick([12, "truc"]);


// Calcul du temps d'exécution
$index_end = microtime(true);
$temps_execution = ($index_end - $index_start) * 1000;
echo "\nLe temps d'exécution de la page est de : " . number_format($temps_execution, 3, '.', '') . " ms\n";


