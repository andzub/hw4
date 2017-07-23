<?php
// Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.
echo 'Задача 2 <br>';
$arr = array();
echo '<table style="border: solid 1px #ddd; padding: 4px; background: #ddd"><tr>';
for ($i=0; $i<=1000; $i++) {
    echo '<td style="background: #fff">' . $i . 'x' . $i . '=' . $i * $i . '</td>';
}
echo '</tr></table>';

echo '<hr>';
// Создайте массив из 1000 случайных чисел. Определите, есть ли в массиве повторяющиеся элементы
echo 'Задача 3 <br>';
$arrayRand = array();
for ($i=0; $i<=999; $i++) {
    echo $arrayRand[] = rand() . ' ';
}
echo '<br>';
print_r(array_count_values($arrayRand));

echo '<hr>';
// оздать массив из 100 случайных чисел. Найти сумму чисел, которые кратны 5-ти(пяти)
echo 'Задача 4 <br>';
$arrayNum = array();
for ($i=0; $i<=99; $i++) {
    echo $arrayNum[] = rand() . ' ';
    if ($arrayNum % 5 == 0) {
        echo 'число крано 5<br>';
    }
}

echo '<hr>';
// Дана строка. Если ее длина больше 10 символов, то оставить в строке только первые 6 символов, иначе дополнить строку символами 'o' до длины 12.
echo 'Задача 5 <br>';
$string = "hello, world!!!";
if (strlen($string) > 10) {
    $result = substr($string, 0, 5);
    echo $result . ' ';
} else {
    echo str_pad($result, 11, "ооооо");
}

echo '<hr>';
// Сгенерировать массив из 10-ти случайных чисел. После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив.
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
//  Создать массив из 100 случайных как чисел так и ключей. После этого выполнить:
// Сортировку массива по значению
//  Сортировку массива по ключу.
echo 'Задача 7 <br>';
$arrKeyValue = array();
for ($i=0; $i<=99; $i++) {
    echo $arrKeyValue[rand()] = rand() . ' ';
}
echo '<br>ключи = ';
foreach ($arrKeyValue as $key => $value) {
    echo $key . ' ';
    ;
}
echo '<br>значения = ';
foreach ($arrKeyValue as $value) {
    echo $value . ' ';
    ;
}

echo '<hr>';
// Создать два массива из 10-ти случайных чисел.
// Выполнить сравнения массивов по двум критеряим: вычислить схождение массива, вычислить расхождение массива.
echo 'Задача 8 <br>';
$arr1 = array();
for ($i=0; $i<=9; $i++) {
    echo $arr1[] = rand() . ' ';
}
echo '<br>';
$arr2 = array();
for ($i=0; $i<=9; $i++) {
    echo $arr2[] = rand() . ' ';
}
echo '<br>';
print_r(array_diff($arr1, $arr2));
print_r(array_intersect($arr1, $arr2));

echo '<hr>';
// Создать массив из 50-ти случайных чисел. Генерируя случайно число, проверять есть ли такой ключ в данном массив.
echo 'Задача 9 <br>';
$arrRand = array();
for ($i=0; $i<=49; $i++) {
    echo $arrRand[] = rand(0, 50) . ' ';
}
echo '<br>';
foreach ($arrRand as $key => $value) {
    if ($key == $value) {
        echo 'В этом массиве совпадает ключ:' .$key. ' с его значением:'.$value.'<br>';
    }
}

echo '<hr>';
// Создать массива з 10-ти чисел. Вычислить произведение значений массива. Не использовать для решения задачи циклы.
echo 'Задача 11 <br>';
$arr = array(1,2,3,4,5,6,7,8,9,);
echo 'Результат произведения равен = '.$sum = $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4] + $arr[5] + $arr[6] + $arr[7] + $arr[8] + $arr[9];

echo '<hr>';
// Нарисовать треугольник и числ при помощи php.
// Результат должен быть примерно такого вида
echo 'Задача 12 <br>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 <br>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;11 <br>';
echo '&nbsp;&nbsp;&nbsp;111 <br>';
echo '&nbsp;&nbsp;1111 <br>';
echo '&nbsp;11111 <br>';
echo '111111 <br>';

echo '<hr>';
// Нарисовать ромб из чисел, используя php. Принцип почти такой же, как в задаче 12
echo 'Задача 13 <br>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 <br>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;11 <br>';
echo '&nbsp;&nbsp;&nbsp;111 <br>';
echo '&nbsp;&nbsp;1111 <br>';
echo '&nbsp;11111 <br>';
echo '111111 <br>';
echo '&nbsp;11111 <br>';
echo '&nbsp;&nbsp;1111 <br>';
echo '&nbsp;&nbsp;&nbsp;111 <br>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;11 <br>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 <br>';

echo '<hr>';
// Создать файл index.php в котором выполнить html разметку будущего сайта.
echo 'Задача 14 <br>';

include 'menu.php';
include 'products.php';
echo '<br><br>';
?>
  <!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <title>Разметка</title>
    <meta name="description" content="The Html5">
    <meta name="author" content="SitePoint">
    <!--[if lt IE 9]><script src="js/html5shim.js"></script><![endif]-->
  </head>
  <style>
    li {
      list-style: none;
    }

    header {
      width: 100%;
      height: 100px;
      border: 1px solid #ddd;
      display: flex;
      align-items: center;
    }

    h1 {
      padding: 5px 10px;
      background: #000;
      color: #fff;
      text-transform: uppercase;
      margin: 0 20px;
    }

    nav {
      width: 100%;
      text-align: center;
    }

    nav ul {
      display: flex;
    }

    nav ul li {
      margin: 10px;
    }

    main {
      width: 100%;
      min-height: 600px;
      border: 1px solid #ddd;
      display: flex;
    }

    .content {
      max-width: 1000px;
      height: auto;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .side {
      width: 200px;
      min-height: 100%;
      border: 1px solid #ddd;
      display: flex;
      justify-content: center;
    }
    .product {
      width: 300px;
      height: auto;
      box-shadow: 0px 5px 10px #000;
      margin: 10px;
      padding: 5px;
    }
    .productImg {
      width: 100%;
      height: 150px;
      background: #ddd;
    }
    button {
      width: 80px;
      height: 40px;
    }
    footer {
      width: 100%;
      height: 100px;
      background: #ddd;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <header>
    <h1>Лого</h1>
    <nav>
      <ul>
        <?php foreach ($menu as $value): ?>
          <?php if ($value -> visible): ?>
            <?php if ($value -> menu_id == 1): ?>
              <li>
                <a href="<?php echo $value -> url ?>"><?php echo $value -> name ?></a>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>
  <main role="main">
    <div class="side">
      <article>Side bar</article>
    </div>
    <div class="content">
      <?php foreach ($products as $product): ?>
        <?php if ($product -> visible): ?>
          <div class="product">
              <p class="productDate"><?php echo date('m.d.y', strtotime($product -> created)); ?></p>
              <div class="productImg">
                <img src="#" alt="img">
              </div>
              <div class="productInfo">
                <a href="<?php echo $product -> url; ?>" class="productTitle"><?php echo $product -> name; ?></a>
                <p class="previewPrice"><?php echo ceil($product -> variant -> price); ?> грн.</p>
                <?php if (count($product -> variants) > 1): ?>
                  <select class="productSelect">
                    <?php foreach ($product -> variants as $item) :?>
                        <?php if ($item -> id != $product -> variant -> id): ?>
                            <option value="#"><?php echo ceil($item -> price); ?> грн.</option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                <?php endif; ?>
              <div class="productControl">
              <div class="productReadmore">
                <p class="productReadmore">Подробнее</p>
              </div>
              <button type="button">
                <p>Купить</p>
              </button>
            </div>
          </div>
        </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </main>
  <footer>
    <section id="author">Футер</section>
  </footer>
