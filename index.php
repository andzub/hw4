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
