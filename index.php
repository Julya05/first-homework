
<?php

echo "Задание #1", "<br />", "<br />";

$name = "Юлия";
$age = 21;
echo "Меня зовут: $name.", "<br />";
echo  "Мне $age год.", "<br />";
echo "“!|\/’”\"", "<br />", "<br />";


echo "Задание #2", "<br />", "<br />";


$x = "17";
$y = "80";
$z = "23";
$e = "40";
echo "На школьной выставке $y рисунков. $z из них выполнены фломастерами, $e карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?
", "<br />";
echo "Решение: $y-$z-$e=$x рисунков выполненно красками на школьной выставке.", "<br />", "<br />";

echo "Задание #3", "<br />", "<br />";

define ("k", 8.98, true);
if (defined ("k")==true) echo "Константа k объявлена!", "<br />", "<br />";
define("k",8.97,true);

echo "Задание #4", "<br />", "<br />";

$age = 21;
if ($age>=18 and $age<=65) { echo "Вам   еще работать   и   работать" ;}
elseif ($age>65) { echo "Вам пора на пенсию";}
elseif ($age>=1 and $age<=17) { echo "Вам еще рано работать";}
else { echo "Неизвестный возраст";}
echo  "<br />", "<br />";

echo "Задание #5", "<br />", "<br />";
$day = 3;
switch ($day) {
    case 1:
    case 2:
    case 3: echo "Это рабочий день"; break;
    case 4:
    case 5:
    case 6: echo "Это выходной день"; break;
    case 7: echo "Это выходной день"; break;
    default: echo "Это неизвестный день";
}
echo "<br />", "<br />";

echo "Задание #6", "<br />", "<br />";

$bmw = array ( "model" => "X5", "speed"=>"120", "doors"=>"5", "year"=>"2015");
$toyota = array ( "model" => "Corolla", "speed"=>"140", "doors"=>"5", "year"=>"2006");
$opel = array ( "model" => "Zafira", "speed"=>"110", "doors"=>"5", "year"=>"2010");
$car = array ();
$car [] = $bmw;
$car [] = $toyota;
$car [] = $opel;
echo "<br>CAR bmw<br />"," ", $bmw["model"]," ",$bmw["speed"]," ",$bmw["doors"]," ",$bmw["year"],"<br />","</p>";
echo "<br>CAR toyota<br />"," ", $toyota["model"]," ",$toyota["speed"]," ",$toyota["doors"]," ",$toyota["year"],"<br />","</p>";
echo "<br>CAR opel<br />"," ", $opel["model"]," ",$opel["speed"]," ",$opel["doors"]," ",$opel["year"],"<br />","</p>";
$result = array_merge($bmw, $toyota, $opel);
echo $result;
echo "<br />", "<br />";

echo "Задание #7", "<br />", "<br />";

echo "<table><tr>";
for ($i= 1; $i<= 10; $i++) {
    echo "<tr>";
    for ($j= 1; $j<=10; $j++)
        echo "<td>".($i*$j)."</td>"; };
echo "</table></tr>";
echo "<br />", "<br />";

echo "Задание #8", "<br />", "<br />";

$str= "Hello World";
echo $str;
$parts = explode(":", $str);
echo "<br />";
echo $parts [0];
echo $parts [1];
while ($parts [0]+ $parts [1]) echo $str;
echo "<br />", "<br />";



