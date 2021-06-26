<?php
// first task
function Myrange($start, $end){
    for($x=1; $x < 10; $x++){
        echo $x;
    
}
}
echo Myrange(1,10);

// second task
function sum(int $x, int $y){
    $z = $x + $y;
    return $z;

}

echo "5 + 10 = " . sum(5,10) . "<br>";

echo "6 + 10 = " . sum(6,10) . "<br>";

echo "5 + 40 = " . sum(5,10) . "<br>";



?>