<?php

$eleve = [
	'prenom' => 'Ali',
	'nom' =>'Ben Salah',
	'age' => 21
];

// Transformation des données en JSON et envoi dans la réponse HTTP.
echo json_encode($eleve);