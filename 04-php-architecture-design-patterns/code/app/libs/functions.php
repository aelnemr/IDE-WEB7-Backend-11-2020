<?php

/*function displayMessage($message){
    return $message;
}

echo displayMessage('hello');*/

/*function sum($num1, $num2 = 0){
    return $num1 + $num2;
}

echo sum(1);
*/

/**
 * calculator to calculate any arithmetic operations
 * @param float $number1
 * @param float $number2
 * @param string $operator
 * @return float|null
 */
function calculator(float $number1, float $number2, string $operator): ?float
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        case '/':
            return $number1 / $number2;
        default:
            return null;
    }
}

/**
 * @param array|null $post
 * @return array|null
 */
function validation(?array $post): ?array
{
// validations
    $errors = [];

    if (empty($post['number1'])) {
        $errors['number1'] = 'Please enter number1<br>';
    }

    if (empty($post['number2'])) {
        $errors['number2'] = 'Please enter number2<br>';
    }

    if (empty($post['operation'])) {
        $errors['operation'] = 'Please enter operator<br>';
    }

    if (!empty($post['operation']) && !in_array($post['operation'], ['+', '-', '*', '/'])) {
        $errors['operation'] = 'Invalid operator<br>';
    }

    if (
        !empty($post['operation']) &&
        !empty($post['number2']) &&
        !empty($post['number1']) &&
        $post['operation'] == '/' &&
        $post['number2'] == 0
    ) {
        $errors['number2'] = 'Can\'t dived by zero<br>';
    }

    return $errors;
}
