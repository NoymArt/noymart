<?php
/**
 *  Задача 1.
 *  Сложить два числа $a + $b
 */

 echo "<h2>Задача 1</h2> \n\r<br>";

 $a=rand(0,100);
 $b=rand(0,100);

 echo "$a+$b=". ($a+$b);
 echo "<br>";

 /**
  * Задача 2.
  * Сложить две строки
  */
echo "<h2>Задача 2</h2>";
echo "<br>";

function generateRandomString($length=10):string {
    $characters='abcdefgijklmnopqrstuvwxyz';
    $characterslenght=strlen($characters);
    $randomString='';
    for ($i=0; $i < $length; $i++) {
        $randomString .=$characters[rand(0, $characterslenght-1)];
    }
    return $randomString;
}

$str_one=generateRandomString();
$str_two=generateRandomString(9);

echo "$str_one+$str_two=" . $str_one.$str_two;

 /**
  * Задача 3.
  * Задана неизвестная переменная $type_animal
  * Необходимо при помощи конструкции if (..) {..} else {..}
  * Задать переменной $name_animal  в зависимости от:
  *     dog--Шарик
  *     cat--Барсик
  *     fish--Немо
  *     Если такого нет, то вывести на экран сообщение Error!!!
  */

  echo "<h2>Задача 3</h2>";
  echo "<br>";

  $type_animal="fish";
  $dog="Шарик";
  $cat="Барсик";
  $fish="Немо";

  if (isset($$type_animal)) {
    echo $$type_animal;
  } else {
    echo "Error!!!";
  }