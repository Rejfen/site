<?php
    include(__DIR__ . '/App/Classes/Datagenerator.php');

    if (!empty($_POST) && array_key_exists('number', $_POST)) {
        $number = (int) $_POST["number"];
        $isLeapYear = (bool) (isset($_POST["leapyear"]) ? true : false);

        $list = new DataGenerator($isLeapYear);
        $error = $list->validateData($number);
        $results = $list->checkLeapYearAndGetAllDates($number);
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
                                    if ($error !== '') {
                                        echo "<div class=textmod>".$error."</div>"; 
                                    } 
                                    else {
                                        echo "<ul class=textmod>";

                                        foreach ($results as $result) {
                                            echo "<li>" . $result . "</li>";
                                        }

                                        echo "</ul>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <br /><br /><hr />
                </div>
            <?php 
            include('visual/sidebarRight.html');
            ?>
        </div>
    </body>
</html>