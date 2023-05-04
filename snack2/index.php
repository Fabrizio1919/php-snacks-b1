<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
var_dump($_GET);

if(strlen($name) < 3) {
    echo "la parola è meno di 3 caratteri";
} else {
    echo "è più lunga";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="name" id="name" placeholder="Name...">
        <input type="text" name="email" id="email" placeholder="Emai...">
        <input type="text" name="age" id="age" placeholder="Età...">
        <button>Start</button>
    </form>







</body>

</html>