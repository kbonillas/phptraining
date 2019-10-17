<?php

$names = array('miles', 'jason', 'kristin');
$names2 = ["miles2", "jason2", "kristin2"];

echo "<pre>";
print_r($names2);
echo "</pre>";
// die();

echo $names[0];
echo $names2[1];

foreach ($names as $name) {
    echo "<p>hi " . $name . "</p>";
}

// associated multi-dimensional array
$movies = [
    'findingnemo' => [
        'title' => 'finding nemo',
        'type' => 'dvd',
        'price' => 30,
        'studio' => 'pixar'
    ],
    'diehard' => [
        'title' => 'die hard',
        'type' => 'blueray',
        'price' => 10
    ]
];

echo "<pre>";
print_r($movies);
echo "</pre>";

echo $movies['findingnemo']['title'];
echo $movies['diehard']['type'];

foreach ($movies as $movie) {
    echo '<p>' . $movie['title'] . '</p>';
    echo '<p>' . $movie['type'] . '</p>';
    echo '<p>' . $movie['price'] . '</p>';
}

foreach ($movies as $movie) {
    foreach ($movie as $key=>$item) {
        echo '<p>'. $key . ': ' . $item . '</p>';
    }
}