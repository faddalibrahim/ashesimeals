<?php

include 'Database/database.class.php';

// $database = new Database();
// $pdo = $database->connect();

class Cafeteria{
    private $meals;
    private $snacks;
    private $cafeteria;
    private $pdo;

    public function __construct($cafeteria) {
        $this->cafeteria = $cafeteria;

        $database = new Database();
        $this->pdo = $database->connect();

        // if($this->pdo == null){
        //     header("Location: index.php");
        // }
    }

    public function getMeals(){
        $meals_table = "$this->cafeteria"."_meals";
       
        $sql_meals = "SELECT * FROM `$meals_table`";

        $this->meals = $this->pdo->query($sql_meals);
       
        return $this->meals;
    }

    public function getSnacks(){
        $snacks_table = "$this->cafeteria"."_snacks";

        $sql_snacks = "SELECT * FROM `$snacks_table`";

        $this->snacks = $this->pdo->query($sql_snacks);

        return $this->snacks;
    }

}


?>