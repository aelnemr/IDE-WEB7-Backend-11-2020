<?php

// array
$colors = [
    [5, ['test']],
    1, 
    'blue', 
    true
];

$user = [
    'username' => 'admin', 
    'password' => '12345', 
    '01005296573', 
    'gender' => 'male', 
    27
];

// print_r(count($user));

$user['demo'] = ['test', 'test2'];
print_r(($user));

echo "\n";

unset($user['demo']);
print_r(($user));