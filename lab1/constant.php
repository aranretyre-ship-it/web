<?php
/*
ЗАДАНИЕ 1
- Создайте константу и присвойте ей значение.
*/
// Создаем пользовательскую константу (например, название компании или проекта)
const PROJECT_NAME = 'Мой первый PHP проект';


/*
ЗАДАНИЕ 2
- Проверьте, существует ли константа, которую Вы хотите использовать.
- Выведите значение созданной константы.
*/
$constCheckResult = '';
// Проверяем существование константы функцией defined()
if (defined('PROJECT_NAME')) {
    $constCheckResult = 'Константа PROJECT_NAME существует. Её значение: ' . PROJECT_NAME;
} else {
    $constCheckResult = 'Константа PROJECT_NAME не найдена.';
}


/*
ЗАДАНИЕ 3
- Используя предопределённые в ядре константы выведите текущую версию PHP.
- Используя магические константы выведите директорию скрипта.
*/
// Предопределенная в ядре константа для версии PHP: PHP_VERSION
$phpVersionOutput = 'Текущая версия PHP: ' . PHP_VERSION;

// Магическая константа для получения текущей директории файла: __DIR__
$scriptDirOutput = 'Директория скрипта: ' . __DIR__;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	
	<!-- Вывод результатов на экран -->
	<p><?php echo $constCheckResult; ?></p>
	<p><?php echo $phpVersionOutput; ?></p>
	<p><?php echo $scriptDirOutput; ?></p>

</body>
</html>
