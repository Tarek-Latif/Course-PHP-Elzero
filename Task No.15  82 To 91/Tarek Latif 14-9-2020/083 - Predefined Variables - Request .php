<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST">
    <input type="text" name="username"/>
    <input type="submit" name="Send"/>
    </form>
    <?php
   // echo $_POST['username'];

    ///////////////////////////////////////////////////

  //  if ($_SERVER['REQUEST_METHOD'] =='POST') {
   //     echo "Good You Are Using POST To procces Data";
   // }
    ////////////////////////////////////////////
  //  if ($_SERVER['REQUEST_METHOD'] =='POST') {
   //     echo $_SERVER['REQUEST_METHOD'];
   // }
    ////////////////////////////////////////////
   
      //  if ($_SERVER['REQUEST_METHOD'] =='POST') {
     //       echo $_REQUEST['username'];
      //  }
        ////////////////////////////////////////////
        if ($_SERVER['REQUEST_METHOD'] =='POST') {
                 echo $_REQUEST['username'];// لابد ان يدخل الصفحة عن طريق التكست بوكس فقط
             }else {
                 echo "You Can Not Browser This Page Directly";
             }

    ?>