<?php
/*
ЗАДАНИЕ 1
- C помощью короткого синтаксиса массива cоздайте массив $bmw с ключами: 'model', 'speed, km/h', 'doors', 'year'
- Заполните ячейки значениями: 'X5', 120, 5, '2006'	
- Создайте массивы $toyota и $opel аналогичные массиву $bmw.
*/
$bmw = [
    'model' => 'X5',
    'speed, km/h' => 120,
    'doors' => 5,
    'year' => '2006'
];

$toyota = [
    'model' => 'Carina',
    'speed, km/h' => 130,
    'doors' => 4,
    'year' => '2007'
];

$opel = [
    'model' => 'Corsa',
    'speed, km/h' => 140,
    'doors' => 5,
    'year' => '2007'
];

/*
ЗАДАНИЕ 2
- Подготовка строк с помощью подстановки (интерполяции) значений массивов.
- Обратите внимание: так как в ключе 'speed, km/h' есть пробел и запятая, 
  для подстановки в строку такие элементы обязательно оборачиваются в фигурные скобки {}.
*/
$outputBmw    = "bmw - {$bmw['model']} - {$bmw['speed, km/h']} - {$bmw['doors']} - {$bmw['year']}";
$outputToyota = "toyota - {$toyota['model']} - {$toyota['speed, km/h']} - {$toyota['doors']} - {$toyota['year']}";
$outputOpel   = "opel - {$opel['model']} - {$opel['speed, km/h']} - {$opel['doors']} - {$opel['year']}";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Массивы</title>
</head>
<body>
	<h1>Массивы</h1>
	
	<!-- ЗАДАНИЕ 2: Вывод на экран -->
	<p><?php echo $outputBmw; ?></p>
	<p><?php echo $outputToyota; ?></p>
	<p><?php echo $outputOpel; ?></p>

</body>
</html>
