<?php

echo "Задание #1", "<br />", "<br />";

$name = "Юлия";
$age = 21;
echo "Меня зовут: $name.", "<br />";
echo "Мне $age год.", "<br />";
echo "“!|\/’”\"", "<br />", "<br />";


echo "Задание #2", "<br />", "<br />";

$y = "80";
$z = "23";
$e = "40";
$x = $y-$z-$e;
echo "На школьной выставке $y рисунков. $z из них выполнены фломастерами, $e карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?
", "<br />";
echo "Решение: $x рисунков выполненно красками на школьной выставке.", "<br />", "<br />";

echo "Задание #3", "<br />", "<br />";

define ("K", 8.9, true);
if (defined ("K") == true)
    echo "Константа K объявлена!", "<br />", "<br />";
define ("K", 8.8, true);


echo "Задание #4", "<br />", "<br />";

$age = 21;
if ($age >= 18 and $age <= 65) {
    echo "Вам   еще работать   и   работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 and $age <= 17) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}
echo "<br />", "<br />";

echo "Задание #5", "<br />", "<br />";
$day = 3;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo "Это рабочий день";
        break;
    case 5:
    case 6:
        echo "Это выходной день";
        break;
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Это неизвестный день";
}
echo "<br />", "<br />";

echo "Задание #6", "<br />", "<br />";

echo "CAR", "<br />", "<br />" ;
$bmw = array ("model" => "X5", "speed" => "120", "doors" => "5", "year" => "2015");
$toyota = array ("model" => "Corolla", "speed" => "140", "doors" => "5", "year" => "2006");
$opel = array ("model" => "Zafira", "speed" => "110", "doors" => "5", "year" => "2010");
$car = array ();
$car ["bmw"] = $bmw;
$car ["toyota"] = $toyota;
$car ["opel"] = $opel;
echo "bmw", " ";
$car ["bmw"] = "";
foreach ($bmw as $key => $value){

    $car ["bmw"].= $value;
    if ($key!= "year") {
        $car ["bmw"].= "  ";
    }
}
echo $car ["bmw"]. "<br>";
echo "toyota", " ";
$car ["toyota"] = "";
foreach ($toyota as $key=>$value) {

    $car ["toyota"].=  $value;
    if ($key!= "year") {
        $car ["toyota"].= "  ";
    }
}
echo $car ["toyota"]. "<br>";
echo "opel", " ";
$car ["opel"] = "";
foreach ($opel as $key=>$value) {

    $car ["opel"].= $value;
    if ($key!= "year") {
        $car ["opel"].= "  ";
    }
}
echo $car ["opel"]. "<br>";
$result = array_merge ($bmw, $toyota, $opel);
echo $result;
echo "<br />", "<br />";

echo "Задание #7", "<br />", "<br />";

echo "<table >";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>";
        if ($i % 2 == 0 && $j % 2 == 0)
            echo "(" . $j * $i . ")";
        elseif ($i % 2 == 1 && $j % 2 == 1)
            echo "[" . $j * $i . "]";
        else echo($j * $i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br />", "<br />";

echo "Задание #8", "<br />", "<br />";

$str = "Hello World !";
echo $str . '<br>';
$arr = explode (" ", $str);
echo "<p>" . print_r ($arr, true) . "</p>";
$parts = count ($arr);
while ($parts) {
    $newArr[] = $arr [$parts - 1];
    $parts--;
}
$new = implode (' : ', $newArr);
echo $new;



