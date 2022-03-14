<?php

    include "./database.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="./img/logo-small.svg" alt="logo Spotify">
    </header>

    <main>

        <?php

            //scorro dinamicamente il database e stampo le informazioni necessarie
            foreach($database as $film){
                
                $poster = $film['poster'];
                $title = $film['title'];
                $author = $film['author'];
                $year = $film['year'];
                
                echo "<div class='card'>
                        <img src=$poster>
                        <h2>$title</h2>
                        <p>$author</p>
                        <p>$year</p>
                    </div>" ;
            }

        ?>
        

    </main>
</body>
</html>