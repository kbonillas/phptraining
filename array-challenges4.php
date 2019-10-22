<?php

$bowlingFrames = [
    4, 7, 8, 9, 9, 9, 8, 4, 3, 7
];

$i = 1;
$total = 0;
foreach ($bowlingFrames as $frameScore) {
    echo '<p>In frame ' . $i . ', I scored ' . $frameScore . '</p>';

    // if ($frameScore % 2 == 0) {
    //     echo '<p>This score is even</p>';
    // } else {
    //     echo '<p>This score is odd</p>';
    // }

    $total = $total + $frameScore;
    echo '<p>Your current score: ' . $total . '</p>';
    $i++;
}
echo '<p>Your total points: ' . $total . '</p>';


// foreach ($bowlingFrames as $index=>$frameScore) {
//     echo '<p>In frame ' . ($index + 1) . ', I scored ' . $frameScore . '</p>';
// }










// $frames = [
//     [
//         'one' => 4,
//         'two' => 7,
//         'three' => 8,
//         'four' => 9,
//         'five' => 9,
//         'six' => 9,
//         'seven' => 8,
//         'eight' => 5,
//         'nine' => 3,
//         'ten' => 7
//     ]
// ];

// $total = 0;
// foreach ($frames as $frame) {
//     foreach ($frame as $key=>$item){
//         echo '<p>In frame ' . $key . ' I scored ' . $item . '</p>'; 
        

//         // challenge 3
//         // if ($frame) {
//         //     echo '<p>This is an even number</p>';
//         // } else {
//         //     echo '<p>This is an odd number</p>';
//         // }
//     }
//     // $total += $item;
// }

// challenge 2
// $total = number_format($total);
// echo '<p>I scored a total of ' . $total . ' points</p>';