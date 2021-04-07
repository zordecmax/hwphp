<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 07.04.2021
 * Time: 11:13
 */


$even_numbers = [2, 4, 6, 8, 10];
// TODO: add the even_numbers array here

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = NULL;
$names = array_merge($male_names, $female_names);

print_r($even_numbers);
print_r($names);

?>
