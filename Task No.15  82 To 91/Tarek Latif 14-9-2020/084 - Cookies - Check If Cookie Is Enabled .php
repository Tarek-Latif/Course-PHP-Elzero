<?php
setcookie("Zero","Test",time() + 3600,"/");// لابد ان يكتب سطر الكوكيز فى اول سطر 
echo "<h2> Exp No.1   ( Cookies )  </h2>";
if (count($_COOKIE) >0) {
    echo "Good The Cookies Are Enabled For This Website";
} else {
    echo "Sorry the Cookies Are Not enabled please enable it for best browsing"; 
}
////////////////////////////////////////////////////

