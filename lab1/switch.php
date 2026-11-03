<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $day и присвойте ей произвольное целочисленное значение.
*/
$day = 3; // Меняйте это значение для проверки (от 1 до 7 или любые другие числа)

/*
ЗАДАНИЕ 2
- С помощью конструкции switch определите тип дня.
*/
$resultSwitch = '';

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        $resultSwitch = 'Это рабочий день';
        break;
    case 6:
    case 7:
        $resultSwitch = 'Это выходной день';
        break;
    default:
        $resultSwitch = 'Неизвестный день';
        break;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция switch</title>
</head>
<body>
	<h1>Конструкция switch</h1>
	
	<!-- Вывод результата конструкции switch -->
	<p><?php echo $resultSwitch; ?></p>

</body>
</html>
