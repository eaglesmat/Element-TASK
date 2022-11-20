<?php
print "TASK # 1";
echo "<br>";
echo "<br>";
echo "1)  ",
printf(round(3.65, 1, PHP_ROUND_HALF_UP));
echo "<br>";
echo "2)  ",
printf(round(6.65, 1, PHP_ROUND_HALF_DOWN));
echo "<br>";
echo "3)  ",
printf(round(-11.54, 1, PHP_ROUND_HALF_UP));
echo "<br>";
echo "<br>";
echo "<br>";



print "TASK # 2";
echo "<br>";
echo "<br>";
$A = rand(0, 37);
printf("Переменная А=$A");
echo "<br>";
$B = rand(0, 0);
printf("Переменная В=$B");
echo "<br>";
$PLUS = 1;
$MINUS = 2;
$MULTIPLICATION = 3;
$DIVISION = 4;
$MOD = 5;
$operator = rand(1, 5);
if ($operator == 1)
printf("Операция СЛОЖЕНИЕ");
else if ($operator == 2)
printf("Операция ВЫЧЕТАНИЕ");
else if ($operator == 3)
printf("Операция УМНОЖЕНИЕ");
else if ($operator == 4)
printf("Операция ДЕЛЕНИЕ");
else if ($operator == 5)
printf("Операция ДЕЛЕНИЕ ПО МОДУЛЮ");

echo "<br>";
if ($operator == 1) {
echo "ответ: {$A} + {$B} = " . $val = $A + $B;
}
else if ($operator == 2) {
echo "ответ: {$A} - {$B} = " . $val = $A - $B ;
}
else if ($operator == 3) {
echo "ответ: {$A} * {$B} = " . $val = $A * $B ;
}
else if ($operator == 4 ) {
if ($B != 0) {
echo "ответ: {$A} / {$B} = " . $val = $A / $B ;
}
else {
printf("ответ: {$A} / {$B} = На ноль делить нельзя!");
}
}
else if ($operator == 5) {
if ($B != 0) {
echo "ответ: {$A} % {$B} = " . $val = $A % $B ;
}
else {
printf("ответ: На ноль делить нельзя!");
}
}
echo "<br>";
echo "<br>";
echo "<br>";


print "TASK # 3";
echo "<br>";
echo "<br>";
define("ROCK", "1");
define("PAPER", "2");
define("SCISSORS", "3");
$Anna = rand(1,3);
$Akerke = rand(1,3);
if ($Anna == 1) {
printf("Анна: Камень");
}
else if ($Anna == 2) {
printf("Анна: Бумага");
}
else if ($Anna == 3) {
printf("Анна: Ножницы");
}
echo "<br>";
if ($Akerke == 1) {
printf("Акерке: Камень");
}
else if ($Akerke == 2) {
printf("Акерке: Бумага");
}
else if ($Akerke == 3) {
printf("Акерке: Ножницы");
}
echo "<br>";
if ($Anna == $Akerke) {
echo "Ничья";
}
else if ($Anna == ROCK and $Akerke == PAPER){
echo "Выиграл игрок Акерке";
}
else if ($Anna == ROCK and $Akerke == SCISSORS){
echo "Выиграл игрок Анна";
}
else if ($Anna == PAPER and $Akerke == ROCK){
echo "Выиграл игрок Анна";
}
else if ($Anna == PAPER and $Akerke == SCISSORS){
echo "Выиграл игрок Акерке";
}
else if ($Anna == SCISSORS and $Akerke == ROCK){
echo "Выиграл игрок Акерке";
}
else if ($Anna == SCISSORS and $Akerke == PAPER){
echo "Выиграл игрок Анна";
}
echo "<br>";
echo "<br>";






