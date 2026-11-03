<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $age.
- Присвойте переменной $age произвольное числовое значение.
*/
$age = 25;

/*
ЗАДАНИЕ 2
- Напишите конструкцию if-elseif-else для проверки диапазонов возраста.
*/
$result = '';

if ($age >= 18 && $age <= 59) {
    $result = 'Вам ещё работать и работать';
} elseif ($age > 59) {
    $result = 'Вам пора на пенсию';
} elseif ($age >= 1 && $age <= 17) {
    $result = 'Вам ещё рано работать';
} else {
    $result = 'Неизвестный возраст';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкции if-elseif-else</title>
</head>
<body>
	<h1>Конструкции if-elseif-else</h1>
	
	<!-- Вывод результата работы конструкции -->
	<p><?php echo $result; ?></p>
 
</body>
</html>
