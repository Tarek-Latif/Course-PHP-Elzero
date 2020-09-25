<?php

/*
echo "<h2> Exp No.1  ( options )  </h2>";

$input = $_POST['test'];

$opt = array (

    'options' => array ( 'min_range' => 1, 'Max_range' => 999),
    'flags' => FILTER_FLAG_ALLOW_HEX
    );
    if ( filter_var($input, FILTER_VALIDATE_INT, $opt) !== FALSE) {

        echo 'Good The ' . $input . ' Is From 1-999';

    } else {
        echo 'Sorry The ' . $input . ' Is Not From 1-999';
    }
  */
    //////////////////////////////////////////////////////////////////////////////////////

    echo "<h2> Exp No.2  ( flags )  </h2>";
    $input = $_POST['test'];

$opt = array (

    'options' => array (
    ),
    'flags' => FILTER_FLAG_IPV4
);
  
    if ( filter_var($input, FILTER_VALIDATE_IP, $opt) !== FALSE) {

        echo 'Good The ' . $input . ' Is IP Versin 4';

    } else {

        echo 'Sorry The ' . $input . ' Is Not IP Version 4';
    }
    /////////////////////////////////////////////////////////////////////////////////////////