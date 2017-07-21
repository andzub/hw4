<?php
echo 'Задача 2 <br>';
$arr = array();
echo '<table style="border: solid 1px #ddd; padding: 4px; background: #ddd"><tr>';
for ($i=0; $i<=1000; $i++) {
    echo '<td style="background: #fff">' . $i . 'x' . $i . '=' . $i * $i . '</td>';
}
echo '</tr></table>';

echo '<hr>';
echo 'Задача 3<br>';
$arrayRand = array();
for ($i=1; $i<=1000; $i++) {
  echo $arrayRand[] = rand() . ' ';
}
echo '<br>';
print_r(array_count_values($arrayRand));
