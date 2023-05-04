<?php
$teams = [
    [
        "teamcasa" => "Cleveland",
        "punticasa" =>  rand(55, 60),
        "puntiospite" => rand(55, 60),
    ],
     [
        "teamospite" => "Boston",
        "puntiospite" => rand(55, 60),
         "punticasa" =>  rand(55, 60),
    ]

     ];
     


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
     <?php foreach($teams as $game) : ?>
      <p><?= $game["teamcasa"] . " - " . $game["teamospite"] . " | " . $game["punticasa"] . " - " . $game["puntiospite"]?></p>
    <?php endforeach; ?>  
</body>
</html>