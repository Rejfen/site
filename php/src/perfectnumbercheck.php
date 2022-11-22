<?php
    include(__DIR__ . '/App/Classes/NumberCheck.php');

    if (!empty($_POST) && array_key_exists('number', $_POST)) {
        $number = (int) $_POST["number"];

        $pnumber= new PerfNumberCheck($number);
        $error = $pnumber->getErrors();
        if (empty($error)) {
            $pnumber->process();
            $results = $pnumber->getResult();
        }
    }
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
                        <?php
                        if (isset($number) == true) {
                            if (!empty($error)) {
                                echo "<div class=textmod>";
                                foreach($error as $value) {
                                    echo $value;
                                }
                                echo "</div>"; 
                            } else {
                                echo "<div class=textmod>".$results."</div>";
                            }
                        }
                        ?>
                    </div>
                    <br /><br /><hr />
                </div>
            <?php 
            include('visual/sidebarRight.html');
            ?>
        </div>
    </body>
</html>