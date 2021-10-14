<?php

include 'Models/cafeteria.model.php';

define("CAFETERIAS",["akonnor","bigben"]);

if(isset($_GET["cafeteria"]) && !empty($_GET["cafeteria"])){
    $selected_cafeteria = htmlspecialchars(trim($_GET['cafeteria']), ENT_QUOTES, 'UTF-8');

    $cafeteria_exists = in_array($selected_cafeteria,CAFETERIAS);

    if(!$cafeteria_exists){
        header("Location: index.php");
    }

    $cafeteria = new Cafeteria($selected_cafeteria);

    define("CAFETERIA", array("meals"=>$cafeteria->getMeals()->fetchAll(PDO::FETCH_ASSOC), "snacks"=>$cafeteria->getSnacks()->fetchAll(PDO::FETCH_ASSOC)));
}
else{
    header("Location: index.php");
}


?>