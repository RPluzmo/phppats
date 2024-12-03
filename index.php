<?php

echo"<p>1.uzdevums</p>";
for ($i=2; $i <= 100; $i=$i+2) { 
    echo"$i <br>";}

echo"<p>2.uzdevums 10 faktorials</p>";
$faktorials=1;
for ($x=1; $x<=10 ; $x=$x+1){ 
    $faktorials=$faktorials*$x;}
    echo"$faktorials <br>";

    echo"//Papildus 1-10 summa// <br>";
$fib=0;
for ($a=1; $a <= 10; $a++) {
    $fib=$fib+$a;}
    echo"$fib <br>";


    echo"<p>3.uzdevums Fibonichi liidz 1000</p>";
$x_1=0;
for ($x=1 ; $x<1000; $x=$x){

    $xPlus1 =$x + $x_1;
echo"$x <br>";
    //palielinat uz nakoso
    $x_1=$x;
    $x=$xPlus1;
}
    echo" <br>";
