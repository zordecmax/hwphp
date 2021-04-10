<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 08.04.2021
 * Time: 22:34
 */

$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
];

$phone_numbers['Eric'] = "415-874-7659";
print_r($phone_numbers);

print_r(array_key_exists("Eric",$phone_numbers));
