<?php
    include(__DIR__ . '/App/Classes/');

    
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Sprawdzacz liczb doskonałych</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        include('visual/menu.html');
        ?>
        <div>
            <?php 
            include('visual/sidebarleft.html');
            ?>
                <div class="workspc">
                    <br /><br /><br /><br /><br /><hr /><br />
                    <div class="formmod">
                        <br />
                        <form  method="POST" class="textmod">
                            <label for="number">Podaj liczbę perfekcyjną</label>
                            <input type="number" name="number" id="number">
                            <br /><br />
                            <input type="submit" name="submit" value="Wyślij">
                        </form>
                        <br />
                        <br />
                        
                    </div>
                    <br /><br /><hr />
                </div>
            <?php 
            include('visual/sidebarRight.html');
            ?>
        </div>
    </body>
</html>