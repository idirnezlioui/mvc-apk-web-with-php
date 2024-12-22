<?php
$bdd_name = 'tp_arms';
$user_name = 'root';
$mdps = '';

//realise une fonction qui permet d'etablire une connexion a n'import qu'elle bdd
function connexionBD($dbname)
{
    // les parametre global
    global $user_name;
    global $mdps;
    $sgbd = "mysql";
    $host = "localhost";
    $charast = "utf8";

    // declare le data osurce name 
    $dns = $sgbd . ':host=' . $host . ';dbnme=' . $dbname . ';charasted=' . $charast;
    //connecte l'utilisateur a la bd
    $username = $user_name;
    $password = $mdps;

    //pour des erreure plus claire 
    $erreur = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    //decalares les exception en cas d'erreur de connexion 

    try {
        //si tous se passe bien la connexion est etablie 
        $bdd = new PDO($dns, $username, $password, $erreur);
        echo ("connexion etablie avec succe");
    } catch (PDOException $e) {
        echo ("connexion echoue " . $e->getMessage());
        return null;
    }
}

// declare une fonction dans le role est de de faire appelle connexionBD et a l'utilise a chaque moment
function connexion()
{
    global $nam_bdd;
    $bdd = connexionBD($nam_bdd);
    return $bdd;
}
