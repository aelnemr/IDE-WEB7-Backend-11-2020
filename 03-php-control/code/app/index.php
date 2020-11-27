<?php

// loop

// $counter = $counter + 1;// $counter += 5; -> $counter++;
// for ($counter=1; $counter < 2; $counter++) { 
//     echo $counter . ': Message <br>';
//     //
//     //

// }

// $counter = 2;
// while ($counter < 2) {
//     $counter++;
//     echo $counter . ': Message <br>';
// }

// $counter = 2;
// do {
//     echo $counter . ': Message <br>';
//     $counter++;
   
// } while ($counter < 2);

// $students = [
//      'Ahmed', // 0
//     'Mohamed', // 1
//      'Ali' // 2
// ];

// print_r($students);

// for ($i=0; $i < count($students); $i++) { 
//     $student = $students[$i];

//     echo $student . '<br>';
// }

// $users = 'Ahmed Ali Sara';

// foreach ($students as $i => $student) {
//     if($i%2 != 0) {
//         die;
//     }

//     echo $student . '<br>';
    
// }

$students = [
    'f_name' => 'Ahmed', // 0
    'm_name' => 'Mohamed', // 1
    'l_name' => 'Ali' // 2
];


// echo current($students);

do {
    $value = current($students);
    echo 'key => ' . array_search($value, $students) . ' and Value =>' .$value . '<br>';
} while (next($students));



// print_r(explode(',', $users));
// echo 'out of loop';
