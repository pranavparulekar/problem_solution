<?php

/*
 * Sort array of alphanumeric character in Ascending order
 */

$charArr = ['b', 'A', 0, 'a', 5, 'C'];

echo "Before Soring : ";
print_r($charArr);


$eleCnt = count($charArr);

for ($i = 0; $i < $eleCnt; $i++) {
    $limit = $eleCnt - $i - 1;
    for ($j = 0; $j < $limit; $j++) {
        if (ord($charArr[$j]) > ord($charArr[$j + 1])) {
            $temp = $charArr[$j];
            $charArr[$j] = $charArr[$j + 1];
            $charArr[$j + 1] = $temp;
        }
    }
}

echo "<br/>After Soring : ";
print_r($charArr);
?>

