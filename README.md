# Challenge-Retours-vers-le-futur
Wild Code Schol Challenge (PHP avancé) : Retour vers le futur

## Objectifs

- Découvrir les différentes fonctions PHP pour gérer les dates  &nbsp;
- Apprendre à les manipuler (création, comparaison)  &nbsp;
- Utiliser des fonctionnalités plus avancées (intervalles, périodicité)  &nbsp;

## Critères de validation

- La classe s'appelle TimeTravel et prend bien 2 paramètres DateTime à l'instanciation  &nbsp;  
- La méthode getTravelInfo() renvoie bien une phrase décrivant la différence de temps (de l'année à la seconde) entre les deux propriétés $start et $end  &nbsp;
- La méthode findDate() renvoie bien une date d'arrivée qui est $interval secondes avant la $date de départ. Pour une date de départ au 31/12/1985, le résultat renvoie une réponse autour de 1954  &nbsp;
- En Option :* La méthode findDate() fonctionne avec n'importe quel intervalle, positif ou négatif, donc pour un voyage dans le passé ou dans le futur  &nbsp;
- La méthode backToFutureStepByStep() renvoie un tableau de N objets DateTime correctement formatés  &nbsp;
- La méthode backToFutureStepByStep() utilise bien l'objet DatePeriod
