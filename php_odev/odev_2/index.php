<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];


function olgunos($arr, $num)
{
  $arr = array_filter($arr);
  $sonuc = array_rand($arr,$num);
  return $sonuc;
}

print_r($planets);
print_r(olgunos($planets,4));

?>
