<?php
    function ifless($number)
    {
        if($number<1)
        {
            echo "Wprowadź inną liczbę";
        }
    }

    if(!empty($_POST))
    {       
        
            $number = $_POST["number"];
            $return=false;
            global $number, $return;
            echo "$number";
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
                            <label for="leapyear">Czy Rok ma być przestępny?</label>
                            <input type="checkbox" name="leapyear" id="leapyear">
                            <br /><br />
                            <input type="submit" name="submit" value="Wyślij">
                        </form>
                            
                        </br>
                        
                        <br />
                        <div class="list">
                            <ul class="textmod">
                                
                            </ul>
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