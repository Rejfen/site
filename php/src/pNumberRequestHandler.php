<?php
    include(__DIR__ . "/App/Classes/NumberCheck.php");

    $return = [];
    $json = $_POST['number'];
    $reciveddata = json_decode($json, true);
    $number = $reciveddata['number'];
    $pnumber= new PerfNumberCheck($number);
    $error = $pnumber->getErrors();
    
    if (empty($error)) {
        $pnumber->process();
        $return['result'] = $pnumber->getResult();
    } else {
        $return['result'] = $error;
    }

    $json = json_encode($return);
    echo $json;
    exit();