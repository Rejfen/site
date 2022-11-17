<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Strona Główna</title>
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
                    <div class="textmod">
                        Wybierz funkcję
                        <br /><br />
                        <img src="visual/smile.png" alt="Smile">
                    </div>
                    <br /><br /><hr />
                </div>
            <?php 
            include('visual/sidebarRight.html');
            ?>
        </div>
    </body>
</html>