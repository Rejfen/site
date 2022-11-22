<?php
    include(__DIR__ . '/App/Classes/DataGenerator.php');

    if (!empty($_POST) && array_key_exists('number', $_POST)) {
        $number = (int) $_POST["number"];
        $isLeapYear = (bool) (isset($_POST["leapyear"]) ? true : false);

        if (empty($error)) {
            $list = new DataGenerator($isLeapYear, $number);
            $error = $list->getErrors();
            $list->process();
        }
    }
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Generator dat</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
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
                            <input type="submit" name="submit" value="Wyślij">
                        </form>
                        <br />
                        <br />
                        <div class="list">
                            <?php
                                if (isset($number) == true) {
                                    if (!empty($error)) {
                                        echo "<div class=textmod>";
                                        
                                        foreach($error as $value) {
                                            echo $value;
                                        }

                                         echo"</div>"; 
                                    } 
                                    else {
                                        echo "<ul class=textmod>";

                                        $list->getResult();

                                        echo "</ul>";
                                    }
                                }
                            ?>
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