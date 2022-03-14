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
        <img src="../assets/logo-small.svg" alt="logo Spotify">
    </header>

    <main>

        <?php

            foreach($database as $film){
                echo "<div>
                        <img src='$film["poster"]'>
                        <h2>$film["title"]</h2>
                        <p>$film["author"]</p>
                        <p>$film["year"]</p>
                    </div>"
            }

        ?>
        

    </main>
</body>
</html>