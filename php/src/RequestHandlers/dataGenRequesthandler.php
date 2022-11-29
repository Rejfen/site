<?php
    include(__DIR__ . "/../App/Classes/DataGenerator.php");

    $return = [];
    $json = $_POST['inputdata'];
    $reciveddata = json_decode($json, true);
    $number = $reciveddata['number'];
    $leapyear = $reciveddata['leapyear'];
    $randdata= new DataGenerator($leapyear, $number);
    $error = $randdata->getErrors();
    
    if (empty($error)) {
        $randdata->process();
        $return = $randdata->getResult();
    } else {
        $return = $error;
    }

    $json = json_encode($return);
    echo $json;
    exit();