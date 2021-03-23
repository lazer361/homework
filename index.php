<?php
$arr = [
   "Красный" =>  1,
   "Синий" =>  2,
   "Зеленый" =>  3,
   "Черный" =>  4,
   "Желтый" =>  5,
   "Коричневый" =>  6,
   "Розовый" =>  7,
   "Фиолетовый" =>  8,
   "Голубой" =>  9,
   "Прозрачный" =>  10,
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Цвета массива: </h1>
<?php
foreach (  $arr as $key => $val ) {
    echo "<div>{$val} - {$key}</div><br>" . PHP_EOL;
}
?>
</body>
</html>
