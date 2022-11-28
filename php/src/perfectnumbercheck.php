<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Sprawdzacz liczb doskonałych</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8"><script src="scripts.js" language = "javascript" type = "text/javascript"></script>
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
                        <form class="textmod">
                            <label for="number">Podaj liczbę perfekcyjną</label>
                            <input type="number" name="number" id="number">
                            <br /><br />
                            <input type="button" name="button" value="Wyślij" onclick="pNumberCheckRequest()">
                        </form>
                        <br />
                        <br />
                      
                        <div id="result" class=textmod></div>
                    </div>
                    <br /><br /><hr />
                </div>
            <?php 
            include('visual/sidebarRight.html');
            ?>
        </div>
        
    </body>
</html>