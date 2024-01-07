<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    session_start();
    if(!isset($_SESSION["ranNumber"])){
        $_SESSION["ranNumber"] = rand(1,10);
    }
    $ranNumber = $_SESSION["ranNumber"];
    echo "Random number: " . $ranNumber . "<br>";
    if($ranNumber == $_POST["number"]){
        echo "correct guess";
        session_destroy();
    }else if($ranNumber < $_POST["number"]){
        echo "too high guess";
    }else if($ranNumber > $_POST["number"]){
        echo "too low guess";
    }else{
        echo "guess gara pasa";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing game in php</title>
</head>
<body>
    <h1>Guess the number I am thinking pasa!</h1>
    <form method="post">
        <input autofocus type="number" name="number" />
        <button type="submit">check</button>
    </form>
</body>
</html>