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
        <title>Strona</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="menu"></div>
        <div>
            <div class="left-sblock1"></div>
            <div class="opacity left-sblock1"></div>
            <div class="opacity1 left-sblock1"></div>
            <div class="opacity2 left-sblock1"></div>
            <div class="opacity3 left-sblock1"></div>
                <div class="workspc">
                    <br /><br />
                    <h1 class="textmod">STRONA</h1>
                    <br /><hr /><br />
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
                                            echo $result;
                                        }

                                        echo "</ul>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <div class="right-sblock1"></div>
            <div class="opacity right-sblock1"></div>
            <div class="opacity1 right-sblock1"></div>
            <div class="opacity2 right-sblock1"></div>
            <div class="opacity3 right-sblock1"></div>
        </div>
        
    </body>
</html>