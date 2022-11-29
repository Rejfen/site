<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Generator dat</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <script src="scripts.js" language = "javascript" type = "text/javascript"></script>
    </head>
    <body>
        <?php
        include_once('visual/menu.html');
        ?>
        <div>
            <?php 
            include_once('visual/sidebarleft.html');
            ?>
                <div class="workspc">
                    <br /><br /><br /><br /><br /><hr /><br />
                    <div class="formmod">
                        <br />
                        <form  method="POST" class="textmod">
                            <label for="number">Podaj liczbę</label>
                            <input type="number" name="number" id="number">
                            <br /><br />
                            <label for="leapyear">Uwzględnij dni przestępne</label>
                            <input type="checkbox" name="leapyear" id="leapyear">
                            <br /><br />
                            <input type="button" name="button" value="Wyślij" onclick="dateGenRequest()">
                        </form>
                        <br />
                        <br />
                        <div class="list">
                            <ul class="textmod" id="result">

                            </ul>
                        </div>
                    </div>
                    <br /><br /><hr />
                </div>
            <?php 
            include_once('visual/sidebarRight.html');
            ?>
        </div>
    </body>
</html>