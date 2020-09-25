<?php
/*
Return VS Echo
}
*/
////////////////////////////////////////////////
echo "<h2> Exp No.1   ( Return )  </h2>";
$views = 150;
function increaseViews( $views ) {
    return $views + 1 ;
}
increaseViews( $views );
var_dump(increaseViews( $views ));

////////////////////////////////////////////////