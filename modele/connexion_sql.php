<?php

global $bdd;

// Connexion à la base
try {
	$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
	$bdd->query("SET NAMES 'utf8'");
} catch(Exception $e) {
	die('Erreur : '.$e->getMessage());
}
