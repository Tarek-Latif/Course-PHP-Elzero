<?php

/*
Fopen (file,mode,include_path, context)
Modes :
r : Read Only Starting From Beginning Of the file [file must be exist]
r+ : Read Only Starting From Beginning Of the file [file must be exist]
W : write only [open & clear the content ] + [create the file if Not exist]
W+ : write & Read [open & clear the content ] + [create the file if Not exist]
a : Write only [OPen & Write To The End Of File ] + [Create The file if Not Exist] And Not Clear text
a+ : Write & Read [OPen & Write To The End Of File ]+[Create The file if Not Exist] And Not Clear text
X : write only [create A new file ] + [file Must not be exist or give error]
X+ : write & Read [create A new file ] + [file Must not be exist or give error]
*/

echo "<h2> Exp No.1   ( Scandir (r) )  </h2>";
$fileHandle = fopen('tarek.txt', 'r');
//////////////////////////////////////////////
echo "<h2> Exp No.2   ( w+ )  </h2>";
$fileHandle = fopen('tarek.txt', 'w+');
////////////////////////////////////////////
echo "<h2> Exp No.3   ( A )  </h2>";
$fileHandle = fopen('tarek.txt', 'a');
////////////////////////////////////////////
////////////////////////////////////////////
echo "<h2> Exp No.4   ( x )  </h2>";
$fileHandle = fopen('tarek.txt', 'x');
////////////////////////////////////////////