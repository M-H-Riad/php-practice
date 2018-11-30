<?php
function trinary_Test($n){
$r = $n > 30
? "greater than 30 <br>"
: ($n > 20
? "greater than 20 <br>"
: ($n >10
? "greater than 10 <br>"
: "Input a number atleast greater than 10!")); 
echo $n." : ".$r."\n";
}
trinary_Test(22);
trinary_Test(12);
trinary_Test(44);
trinary_Test(6);
?>