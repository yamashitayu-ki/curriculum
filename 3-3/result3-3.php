<?php

$number = $_GET['number'];
$num = substr($number, 1, 1);

echo date("Y/m/d", time())."の運勢は".'<br>';
echo "選ばれた数字は".$num.'<br>';

if($num == 0){
  echo "凶";
  } elseif($num ==1 || 2 || 3) {
  echo "小吉";
  } elseif($num ==4 || 5 || 6) {
  echo "中吉";
  } elseif($num ==7 || 8) {
  echo "吉";
  } elseif($num ==9) {
  echo "大吉";
}

?>