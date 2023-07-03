<?php
$r=5;
$pi=3.14;
$a=$pi*$r*$r;
echo "area of circle is: ", $a;
echo "<br>";
function rect_area($length = 2, $width = 4) 
{
    $area = $length * $width;
    echo "Area Of Rectangle with length " . $length . " & width " . $width . " is " . $area ;
}
rect_area(); 
?>











