<?php
echo 'Задача 2 <br>';
$arr = array();
echo '<table style="border: solid 1px #ddd; padding: 4px; background: #ddd"><tr>';
for ($i=0; $i<=1000; $i++) {
    echo '<td style="background: #fff">' . $i . 'x' . $i . '=' . $i * $i . '</td>';
}
echo '</tr></table>';

echo '<hr>';

echo 'Задача 3 <br>';
$arrayRand = array();
for ($i=0; $i<=999; $i++) {
  echo $arrayRand[] = rand() . ' ';
}
echo '<br>';
print_r(array_count_values($arrayRand));

echo '<hr>';

echo 'Задача 4 <br>';
$arrayNum = array();
for ($i=0; $i<=99; $i++) {
  echo $arrayNum[] = rand() . ' ';
  if ($arrayNum % 5 == 0) {
    echo 'число крано 5<br>';
  }
}

echo '<hr>';

echo 'Задача 5 <br>';
$string = "hello, world!!!";
if (strlen($string) > 10) {
  $result = substr($string, 0, 5);
  echo $result . ' ';
} else {
  echo str_pad($result,  11, "ооооо");
}

echo '<hr>';

echo 'Задача 6 <br>';
$arrNum = array();
for ($i=0; $i<=9; $i++) {
  echo $arrNum[] = rand() . ' ';
}
$oneNum = rand();
if ($arrNum == $oneNum) {
  echo '<br>'. $oneNum . ' Это число входит в данный массив';
} else {
  echo '<br>'. $oneNum . ' Это число не входит в данный массив';
}

echo '<hr>';

echo 'Задача 7 <br>';
$arrKeyValue = array();
for ($i=0; $i<=99; $i++) {
  echo $arrKeyValue[rand()] = rand() . ' ';
}
echo '<br>ключи = ';
foreach ($arrKeyValue as $key => $value) {
  echo $key . ' ';
;}
echo '<br>значения = ';
foreach ($arrKeyValue as $value) {
  echo $value . ' ';
;}
