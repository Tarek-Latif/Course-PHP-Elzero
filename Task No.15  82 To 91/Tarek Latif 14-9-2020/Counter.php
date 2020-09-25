<?php
if(empty($_SESSION['Counter'])) { // لو السيشن فارغ
    $_SESSION['Counter'] = 1; // ابداء العدداد من رقم واحد
} else {
    $_SESSION['Counter'] ++ ;// زود فى كل مره رقم واحد على العداد
}
echo '<div> You Viewed This Page ' . $_SESSION ['Counter'] . 'Times</div>';
