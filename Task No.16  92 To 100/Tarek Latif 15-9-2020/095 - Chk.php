<?php

$string = $_POST['test'];
echo filter_var($string, FILTER_SANITIZE_STRING); // FILTER_SANITIZE_STRING فلتر النص الداخل الى التكست وعقمة من اى تاجات او وسم
