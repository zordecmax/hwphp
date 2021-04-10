<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 10.04.2021
 * Time: 13:12
 */

# This function will throw an exception!
function throw_exception() {
    throw new Exception("Exception!");
}

# Surround the statement in a try-catch-finally block!
try {
    throw_exception();
} catch (Exception $e) {
    echo "Exception caught!\n";
} finally {
    echo "Done!";
}
