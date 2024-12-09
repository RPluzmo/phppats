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
    $x=$xPlus1;}

echo" <br>";
echo"ar while ciklu <br>";

    $x=1;
    $x_1=0;
    while ($x < 1000) {
    $xPlus1 =$x + $x_1;
   echo"$x <br>";
    //palielinat uz nakoso
    $x_1=$x;
    $x=$xPlus1;}

echo"<p>4.uzdevums / 3 5 bet !15</p>";
    for ($i=1; $i < 100; $i=$i+1) { 
  if (($i%3==0 || $i%5==0)&& $i%15!=0) {//&& prioritate
    echo"$i <br>";}
}

echo "<br><br>";
     for($x=1;$x<=100; $x++){
         echo"$x " ;}

echo"<p>5.uzdevums asoc_mas</p>";
$pilsetas=["Cesis"=>17000,"Riga"=>600000];
print_r($pilsetas);

echo"<p>6.uzdevums asoc_mas </p>";
$dzivnieki=["Kakis"=>"mjau","Suns"=>"vau","Putns"=>"civ"];
$atslegas=array_keys($dzivnieki);
print_r(array_keys($atslegas));

echo"<p>7.uzdevums api </p>";
$dataString=file_get_contents("https://jsonplaceholder.typicode.com/posts");
$data=json_decode($dataString);
foreach($data as $post) {
echo "$post->userId<br>";
echo "<h2>$post->title</h2>";
echo "<p>$post->body</p>";
}

echo"<p>8.uzdevums api </p>";
$dataString1=file_get_contents("https://jsonplaceholder.typicode.com/todos");
$data1=json_decode($dataString1);
foreach($data1 as $post) {
echo "<p>title : $post->title</p>";
if ($data1==true) {echo "asd";
}
echo "<p> completed : $post->completed</p>";
echo "<p> userId : $post->userId</p><br>";}