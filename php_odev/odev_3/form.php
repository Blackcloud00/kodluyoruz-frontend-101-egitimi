<?php
$number = $_POST["number"];
if ($number%3==0){
  echo "sayı 3 e bölünüyor.  ";
}else{
  echo "sayı 3 e bölünmüyor.  ";
  if($number%3==1){
    $num = $number+2;
    echo "3 e bölünen en yakın sayı ".$num." . ";
  }
  elseif($number%3==2){
    $num = $number+1;
    echo " 3 e bölünen en yakın sayı ".$num." . ";
  }
}
?>