<?php
$round = 134.5896;
echo round($round,2) . "<br/>";//вычислит и округлит, сколько чисел после комы

$ceil = 43.34;
echo ceil($ceil) . "<br/>";//округлит до большего

$floor = 54.76;
echo floor($floor) . "<br/>";//округлит до меньшего

echo min (5,7,3) . "<br/>";//выведет минимальне число
echo max (4,7,10) . "<br/>";//выведет махимальне число
echo mt_rand (4,19) . "<br/>";//выведет рандомне число
echo M_PI . "<br/>";//константа выведет 3.1415926535898

$abs = -53;
echo abs($abs) . "<br/>";//по модулю виведет 53