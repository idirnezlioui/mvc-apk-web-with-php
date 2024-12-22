<?php
include "model/sql/connexionBD.php"; // Inclut le fichier connexionBD.php

// Test de la connexion
$bdd = connexion();
if ($bdd) {
    echo "Connexion réussie !";
} else {
    echo "Échec de connexion.";
}
