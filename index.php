<?php

require_once __DIR__. '/class/TimeTravel.php';

echo '<h1>Challenge Retour vers le futur</h1>';

// TimeTravel prend bien 2 paramètres DateTime à l'instanciation. 
$timeTravel = new TimeTravel('1985/12/31');
echo 'La propriété <strong>start</strong> vaut: ' . $timeTravel->getStart()->format('d/m/Y') . '<br/>';
echo 'La propriété <strong>end</strong> vaut: ' . $timeTravel->getEnd()->format('d/m/Y') . '<br/><br/>';

// Renvoie une date d'arrivée qui est $interval secondes avant la $date de départ
// Pas de bonus
$interval = new DateInterval('PT1000000000S');
echo 'La méthode <strong>findDate()</strong> renvoie: ' . $timeTravel->findDate($interval)->format('d/m/Y') . '<br/><br/>';


// Renvoie une phrase décrivant la différence de temps (de l'année à la seconde)
echo 'la méthode <strong>getTravelInfo()</strong> renvoie: ' . $timeTravel->getTravelInfo() . '<br/><br/>';

// Renvoie un tableau de N objets DateTime correctement formatés
$present = $timeTravel->getStart();
$interval = new DateInterval('P1M8D');
$past = $timeTravel->getEnd();

$period = new DatePeriod($past, $interval, $present);
$steps = $timeTravel->backToFutureStepByStep($period);
echo 'Exemple de date formatée renvoyé par la méthode <strong>backToFuturStepByStep()</strong>: ' . $steps[1];

// Décommenter le var_dump pour voir le contenu du tableau
// var_dump($steps);
