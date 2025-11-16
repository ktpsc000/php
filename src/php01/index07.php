<?php
function sankaku($bottom,$height){
    $area = $bottom * $height/ 2;
    return $area;
}
function sikaku($width,$height){
    $area = $width * $height;
    return $area;
}
function daikei($top,$bottom,$height){
    $area = ($top +$bottom) * $height /2;
    return $area;
}
$a = sankaku(10,2);
$b = sikaku(10,2);
$c = daikei(5,15,4);
echo $a . "<br />";
echo $b . "<br />";
echo $c . "<br />";