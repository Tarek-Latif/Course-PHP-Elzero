<?php
/*
Syntax
 Do {
     // Statement To Be Executed

 } while ( Expression);
 */
///////////////////////////////////////

echo "<h2> Exp No.1  ( DO  While Loop )  </h2>";
$i = 1;

do {
    echo $i++ . "<br>";
} while ( $i <= 5 ) ;
 //////////////////////////////////////////

 echo "<h2> Exp No.2  ( DO  While Loop )  </h2>";
 $i = 1;
 
 do {
     echo $i . "<br>";
     $i++;
 } while ( $i <= 5 ) ;
  //////////////////////////////////////////
  echo "<h2> Exp No.3  ( DO  While Loop )  </h2>";
  $i = 1;
  while ( $i <= 5 ) {
      echo $i . "<br>";
      $i++;
  } 