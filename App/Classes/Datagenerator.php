<?php
    require('..\..\index.php')
    
    class DataGenerator
    {
        $number = (int) $_POST["number"];
        $isLeapYear = (bool) (isset($_POST["leapyear"]) ? true : false);
    }
?>