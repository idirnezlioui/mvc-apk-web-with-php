<?php
$bdd_name = 'tp_arms'; // Nom de la base de données
$user_name = 'root'; // Nom d'utilisateur
$mdps = ''; // Mot de passe

// Fonction pour établir une connexion à une base de données
function connexionBD($dbname)
{
    // Les paramètres globaux
    global $user_name;
    global $mdps;
    $sgbd = "mysql";
    $host = "localhost";
    $charset = "utf8"; // Correction : charset au lieu de charasted

    // Construire le Data Source Name (DSN)
    $dns = $sgbd . ':host=' . $host . ';dbname=' . $dbname . ';charset=' . $charset;

    // Gestion des erreurs PDO
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Activer les exceptions pour les erreurs PDO
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Mode de récupération par défaut
    );
    // Essayer d'établir la connexion
    try {
        $bdd = new PDO($dns, $user_name, $mdps, $options);
        return $bdd; // Retourne l'objet PDO en cas de succès
    } catch (PDOException $e) {
        // Retourne null et affiche un message en cas d'échec
        echo "Connexion échouée : " . $e->getMessage();
        return null;
    }
}

// Fonction pour utiliser la connexion sans spécifier à chaque fois le nom de la base
function connexion()
{
    global $bdd_name; // Correction : utiliser $bdd_name correctement
    return connexionBD($bdd_name);
}
