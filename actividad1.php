<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo 'a)';
foreach ($arr as  $value) {
    echo $value . ' ';
}
echo '<br>b)';
foreach ($arr as $key => $value) {
    echo '<br>Índice: ' . $key . ' valor: ' . $value;
}
