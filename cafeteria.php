<?php

    include 'Controllers/cafeteria.controller.php';

?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cafeteria.css">
    <meta name="theme-color" content="rebeccapurple" />
    <title>Document</title>
</head>

<body>
    <main>
        <?php if($cafeteria_exists): ?>
            <a href="cafeteria.php?cafeteria=$" class="previous"><- arkorrnor</a>
            <h1><?php echo $selected_cafeteria ?></h1>
            <div class="meals-snacks">
                <!-- meals display -->
                <div class="meals">
                    <h2>Meals</h2>
                    <div>
                    <?php foreach(CAFETERIA["meals"] as $meal): ?>
                        <li><?php echo htmlspecialchars($meal['name']); ?></li>
                    <?php endforeach ?>
                    </div>
                </div>
                <!-- snacks display -->
                <div class="snacks">
                    <h2>Snacks</h2>
                    <div>
                        <?php foreach(CAFETERIA["snacks"] as $snack): ?>
                        <li><?php echo htmlspecialchars($snack['name']); ?></li>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- error page -->
            <?php else: ?>
                <div>
                    No such cafeteria exists
                </div>
        <?php endif ?>
    </main>
</body>
</html>