<?php
echo "<h2> Exp No.1   (  Array  )  </h2>";
$indexedArray = array(
    "Osama",
    "ahmed",
    "tarek",
    "Gamal",
    "Mahamed",
);
echo $indexedArray[3];
///////////////////////////////////////
echo "<h2> Exp No.2   (  Array  )  </h2>";
$indexedArray = array(
    "Osama",
    "ahmed",
    "tarek",
    "Gamal",
    "Mahamed",
);
$indexedArray[] ="Sameh";
echo "<pre>";
print_r ($indexedArray);
echo "</pre>";
foreach ($indexedArray as $val){
    echo $val . "<br/>";
}
///////////////////////////////////////
echo "<h2> Exp No.3   (  Array  )  </h2>";
$Salaries = array(
    "Osama"       => "1000",
    "ahmed"      => "1500",
    "tarek"      => "1200",
    "Gamal"      => "3200",
    "Mahamed"    => "2300",
);

echo "<pre>";
print_r ($Salaries);
echo "</pre>";
foreach ($Salaries as $val){
    echo $val . "<br/>";
}
///////////////////////////////////////
echo "<h2> Exp No.4   (  Array  )  </h2>";
$Salaries = array(
    "Osama"       => "1000",
    "ahmed"      => "1500",
    "tarek"      => "1200",
    "Gamal"      => "3200",
    "Mahamed"    => "2300",
);

echo "<pre>";
print_r ($Salaries);
echo "</pre>";
foreach ($Salaries as $person => $Salary){
    echo $person . " => " . $Salary . "<br/>";
}
///////////////////////////////////////
echo "<h2> Exp No.5   (  Array  )  </h2>";
$diet = array (
    "Day1" => array ("Apple","Banana","Milk"),
    "Day2" => array ("Meat","Apple","Egg"),
    "Day3" => array ("Fish","Banana"),
);
echo "<pre>";
print_r($diet);
echo "</pre>";
foreach ( $diet as $day => $food ){
    echo "<h3> In " . $day . " I Will Eat :</h3>";

    foreach ( $food as $item ){
        echo "  " . $item . "<br/>";
}
}
//////////////////////////////////////////////
