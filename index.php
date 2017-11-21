<?php

/* echo 'EX1'.'</br></br>';

$a = 1;
$b = 'home';
$c = 1.2;
$d = false;
$e = ['rita','margarita'];
$f = null;



echo 'EX2'.'</br></br>';

$name = 'Margarita';
$age = 21;

echo 'EX3'.'</br>';
	echo "Меня зовут $name".'</br>';
	echo "Мой возраст $age год".'</br></br>';
	echo 'EX4'.'</br>';
unset($age);
	echo "Мой возраст $age год".'</br></br>';

echo 'EX5'.'</br>';
define('NAME', 'Margarita');
	echo (NAME).'</br></br>';

echo 'EX6'.'</br>';
$age = 200;
if ($age >=18 && $age <= 59) {
	echo 'Вам еще работать и работать';
} 
if ($age > 59 && $age <= 100) {
	echo 'Вам пора на пенсию';
} 
if ($age >= 1 && $age <= 17) {
	echo 'Вам еще рано работать'.'</br>';
}
else  {
	echo 'Неизвестный возраст'.'</br>';
}

echo 'EX7'.'</br>';

$day = 9;
switch ($day)
{
case 1 :
case 2 :
case 3 :
case 4 :
case 5 :
	echo 'Это рабочий день'.'</br>';
	break;
case 6 :
case 7 :
	echo 'Это выходной день'.'</br>';
	break;
default :
	echo 'Неизвестный день'.'</br>';
	break;
}

echo 'EX8'.'</br>';

$bmw = [
'name' => 'bmw',
'model' => 'X5',
'speed' => '120',
'doors' => '5',
'years' => '2006'
];

$toyota = [
'name' => 'toyota',
'model' => 'Carina',
'speed' => '130',
'doors' => '4',
'years' => '2007'
];

$opel = [
'name' => 'opel',
'model' => 'Corsa',
'speed' => '140',
'doors' => '5',
'years' => '2007'
];
echo '<pre>';
foreach ($bmw as $key => $value) {
	echo $key. '-' .$value. '<br/>';
}
echo '<pre>';
foreach ($toyota as $key => $value) {
	echo $key. '-' .$value. '<br/>';
}
echo '<pre>';
foreach ($opel as $key => $value) {
	echo $key. '-' .$value. '<br/>';
}

echo 'EX9'.'</br>';

for($i = 1; $i <= 50; $i+=2) {
        echo $i . '<br/>';
      

echo 'EX10'.'</br>';

 $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100];
  for ($i = 0; $i <= count($arr); $i++) 
  { 
    echo $arr[$i].'</br>'; 
  } */

echo 'Lesson 2, EX1'.'</br>';

/*string number_format ( float $number , int $decimals = 0 , string $dec_point = '.' , string $thousands_sep = ',' )*/
$number='10819';
	print number_format($number,0,'',' ').'</br>';

echo 'Lesson 2, EX2'.'</br>';

$text = 'hello my little pony'.'</br>';
$text = strtoupper($text);
	echo $text;

echo 'Lesson 2, EX3'.'</br>';

$metre = 8080;
	echo ($metre / 1000).' км'.'</br>';

echo 'Lesson 2, EX4'.'</br>';
	echo 'Done.'.'</br>';

echo 'Lesson 2, EX5'.'</br>';
	// Возникли трудности, но задание в процессе:) 

echo 'Lesson 3, EX1'.'</br>';

// strlen()
$str = 'ттуауцл  алму мцшуцщолмь кумымм';
	echo strlen($str).'</br>'; // вернет количество символов в строке (58)

// empty()
$a = 26;
if (empty($a)) 
	echo 'Переменная не назначена'.'</br>';
else
	echo 'Переменная назначена'.'</br>';

// trim()
$t = '  В начале два пробела, в конце - три   '.'</br>';
	echo trim($t);

// intval()
	echo intval(4.2).'</br>'; // 4; - взяла самый примитивный пример, так как некоторые друие совсем не поняла:( 

$rita = [
'name' => 'Margarita', 
'age' => '21',
'education' => ['sourseit', 'university']
];
	echo intval($rita['education'][0]).'</br>'; // странно, что выводит на странице ноль, та как я пыталась вывести заполненный массив; 
	

// implode()
$array = ['Rita','21','php course'];
	$comma_separated = implode(", ", $array);
	echo $comma_separated.'</br>';

// explode()
$predlozhenie = 'Каждый охотник желает знать, где сидит фазан';
list($kazhdii, $ohotnik, $zhelaet, $znat, $gde, $sidit, $fazan) = explode(' ', $predlozhenie);
	echo $kazhdii.' ';
	echo $ohotnik.' ';
	echo $zhelaet.' ';
	echo $znat.' ';
	echo $gde.' ';
	echo $sidit.' ';
	echo $fazan.'</br>';
// array_merge()
echo '<pre>';
$a1 = ['red','green'];
$a2 = ['blue','yellow'];
	print_r(array_merge($a1,$a2)).'</br>';

// array_unique()
echo '<pre>';
$input = [
'sisters' => 'Rita', 'Kristina', 'Merry', 'Eva' => 'Naomi', 'Kristina', 'Merry', 'Eva'
];
$result = array_unique($input);
	print_r($result).'</br>'; // Читала много о последних двух функциях, но не совсем поняла, как это работает в действии. Выведенное на сайте остается непонятным.



echo '--------------------------------------------------------------------------'.'</br>';



























?>
