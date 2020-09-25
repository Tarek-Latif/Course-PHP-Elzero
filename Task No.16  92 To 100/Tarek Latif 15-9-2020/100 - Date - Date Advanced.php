<?php
echo "<h2> Exp No.1  ( Print Day , Month , Year )  </h2>";

date_default_timezone_set('Africa/cairo');

echo 'This Day Is ' . date('d') . '<br>';
echo 'This Month Is ' . date('m') . '<br>';
echo 'This Year Is ' . date('y') . '<br>';
//////////////////////////////////////
echo "<h2> Exp No.2  ( Format For Date  )  </h2>";
echo date('jS') . '<br>'; // j = Day Withute 0 & j = th (Suffix)
/////////////////////////////////////////////////////
echo "<h2> Exp No.2  ( Print Time After 2 Day )  </h2>";

$AfterTwoDay = time() + ( 2 * 24 * 60 * 60 );
echo date('jS', $AfterTwoDay) . '<br>';
///////////////////////////////////////////////
echo "<h2> Exp No.2  ( Print Manth Name )  </h2>";
echo date('F') . '<br>';
// l = print Day Curant
// h = 12 h   & H = 24 H
///////////////////////////////////////////////
echo "<h2> Exp No.2  ( EXP General Date & Time )  </h2>";
echo date('l jS \of F Y h:i:s a') . '<br>';
//////////////////////////////////////////////////////