<?php
require_once ("moviedata.php");

echo "<!DOCTYPE html>
<html lang='en'>";
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./icons/video-camera.png">
    <link rel="stylesheet" href="./CSS/movie.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battelship</title>
</head>

<body>
    <button id="back" class="login" onclick="location.href='index.php'">back to main page</button>
    <div class="flex1">
        <?php 
        $count = 1;
        while ($count <= 100){
            echo("<img class='seat' src='./pictures/armchair.svg' alt='Cinemachair'>");
            echo("<t class='con'>$count</t>");


            if ($count % 10 == 0){
                echo "<br>";
            } 
            $count++;
        }
        ?>
    </div>


    <form id="all" action="Movie1.php" method="POST">
            <input id="one" type="text" name="username" placeholder="username">
            <input id="two" type="text" name="email" placeholder="email">
            <input id="three" type="text" name="seat" placeholder="seat">
            <button id="four" type="submit" name="button">Reserve</button>
    </form>
</body>

</html>