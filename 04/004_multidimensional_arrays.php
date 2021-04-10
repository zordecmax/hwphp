<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 08.04.2021
 * Time: 22:42
 */

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    $sum = 0;
    array_map(function ($arr1) use (&$sum){$sum+= $arr1;}, $numbers);

    echo "{$sum}\n";
}