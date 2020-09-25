<?php

echo "<h2> Exp No.1  ( FILTER_VALIDATE_INT )  </h2>";
$input = $_POST['test'];

if ( filter_var($input, FILTER_VALIDATE_INT) !== FALSE) {
    echo 'Good The ' . $input . 'You Enter Is Int';
} else {
    echo 'Sorry The ' . $input . 'You entered Is Not Integer';
}
////////////////////////////////////////////////
echo "<h2> Exp No.2  ( FILTER_VALIDATE_EMAIL )  </h2>";
$input = $_POST['test'];

if ( filter_var($input, FILTER_VALIDATE_EMAIL) !== FALSE) {
    echo 'Good The ' . $input . 'You Enter Is Valid Email';
} else {
    echo 'Sorry The ' . $input . 'You entered Is Not Valid Email';
}
////////////////////////////////////////////////