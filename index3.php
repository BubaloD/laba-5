﻿<html>
<head>
</head>
<body>
<?PHP
$user = array ("Иванов И.И." => array('Имя'=>"Иванов И.И.", 'Возраст'=>21, 'Дата рождения'=>"25.05.1988", 'Город проживания'=>"Москва"), 
"Петров В.И." =>array('Имя'=>"Петров В.И.",'Возраст'=>35, 'Дата рождения'=>"26.06.1984", 'Город проживания'=>"Москва"),
"Сидоров К.С." =>array('Имя'=>"Сидоров К.С.",'Возраст'=>25, 'Дата рождения'=>"26.12.1994", 'Город проживания'=>"Санкт-Петербург"), 
"Борисов В.Б." =>array('Имя'=>"Борисов В.Б.",'Возраст'=>48, 'Дата рождения'=>"09.03.1972", 'Город проживания'=>"Москва"), 
"Ситников Г.А." =>array('Имя'=>"Ситников Г.А.",'Возраст'=>49, 'Дата рождения'=>"30.07.1970", 'Город проживания'=>"Санкт-Петербург"),
"Воробьев В.С." =>array('Имя'=>"Воробьев В.С.",'Возраст'=>29, 'Дата рождения'=>"14.09.1990", 'Город проживания'=>"Санкт-Петербург"),
"Шаров Ю.П." =>array('Имя'=>"Шаров Ю.П.",'Возраст'=>48, 'Дата рождения'=>"24.05.1971", 'Город проживания'=>"Санкт-Петербург"),
"Емельянов С.Л." =>array('Имя'=>"Емельянов С.Л.",'Возраст'=>32, 'Дата рождения'=>"18.06.1987", 'Город проживания'=>"Москва"),
"Киселев О.К." =>array('Имя'=>"Киселев О.К.",'Возраст'=>22, 'Дата рождения'=>"23.02.1998", 'Город проживания'=>"Калуга"),
"Захаров Р.В." =>array('Имя'=>"Захаров Р.В.",'Возраст'=>42, 'Дата рождения'=>"25.10.1977", 'Город проживания'=>"Калуга"),
"Богданов А.И." =>array('Имя'=>"Богданов А.И.",'Возраст'=>37, 'Дата рождения'=>"16.11.1982", 'Город проживания'=>"Новосибирск"),
"Стрелков А.И." =>array('Имя'=>"Стрелков А.И.",'Возраст'=>34, 'Дата рождения'=>"03.06.1985", 'Город проживания'=>"Екатиренбург"),
"Крылов Т.Г." =>array('Имя'=>"Крылов Т.Г.",'Возраст'=>25, 'Дата рождения'=>"03.06.1994", 'Город проживания'=>"Владивосток"),
"Анисимов М.А." =>array('Имя'=>"Анисимов М.А.",'Возраст'=>37, 'Дата рождения'=>"27.12.1982", 'Город проживания'=>"Москва"),
"Иванков К.В." =>array('Имя'=>"Иванков К.В.",'Возраст'=>46, 'Дата рождения'=>"30.11.1973", 'Город проживания'=>"Москва"),
"Некрасов М.П." =>array('Имя'=>"Некрасов М.П.",'Возраст'=>31, 'Дата рождения'=>"27.12.1988", 'Город проживания'=>"Москва"),
);
array_push($user["Семенов А.Р."]);
$user["Семенов А.Р."] = array('Имя'=>"Крылов Т.Г.",'Возраст'=>25, 'Дата рождения'=>"03.06.1994", 'Город проживания'=>"Владивосток");


echo '<pre>';

print_r($user);
echo '</pre>';

echo "SOLOMA";
echo "SOLOMA";
?>
</body>
</html>
