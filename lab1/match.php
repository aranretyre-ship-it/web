<?php
/*
ЗАДАНИЕ 3
- Выполните задание 2 используя управляющую конструкцию match. 
- Результат сохраните в файле match.php.
*/
$day = 3;

$resultMatch = match ($day) {
    1, 2, 3, 4, 5 => 'Это рабочий день',
    6, 7          => 'Это выходной день',
    default       => 'Неизвестный день',
};
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция match</title>
</head>
<body>
	<h1>Конструкция match</h1>
	
	<!-- Вывод результата конструкции match -->
	<p><?php echo $resultMatch; ?></p>

</body>
</html>
