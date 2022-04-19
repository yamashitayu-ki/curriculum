<?php

$FruitsPrice = ["りんご" => "150", "みかん" => "150", "桃" => "300"];

$quantity = [2, 3, 5];

function getFruitsSum($price, $quantity){
  $sum = $price * $quantity;
  return $sum;
}

foreach($FruitsPrice as $key => $value){
  
  if($key == "りんご"){
    $total = getFruitsSum($value, $quantity[0]);
  } elseif($key == "みかん"){
    $total = getFruitsSum($value, $quantity[1]);
  } elseif($key == "桃"){
    $total = getFruitsSum($value, $quantity[2]);
  }

  echo $key."は".$total."円です。".'<br>';
}

?>