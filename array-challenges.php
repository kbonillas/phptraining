<?php

$animals = ['lizards', 'goats', 'bears'];

// designed for arrays
foreach ($animals as $animal) {
    echo '<p>I love ' . $animal . '</p>';
}

// designed for counting
for ($i = 0; $i < count($animals); $i++) {
    echo '<p>I really love ' . $animals[$i] . '</p>';
}

// to see if it meets a condition
$i = 0;
while ($i < count($animals)) {
    echo '<p>I really really really love ' . $animals[$i] . '</p>';
    $i++;
}
?>


<h2>Candy Land</h2>

<?php
$candies = [
    'jollyrancher' => [
        'sku' => 1,
        'name' => 'jolly rancher',
        'price' => 4,
    ],
    'jellybeans' => [
        'sku' => 2,
        'name' => 'jelly beans',
        'price' => 2,
    ]
];

foreach ($candies as $candy) {
    foreach ($candy as $key=>$item) {
        echo '<p>' . $key . ': ' . $item . '</p>';
    }
}