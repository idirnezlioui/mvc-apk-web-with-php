<?php
// charger automatiquemenet les methode des classe juse en faisant l'initialisation 

spl_autoload_register(function ($nom_classe) {
    include "../model/" . $nom_classe . ".php";
});
