<?php
    $names = array('Dominique', 'Yo-Gaba-Gaba', 'Sven');
    $names2 = ["Dominique2", "Yo-Gaba-Gaba2", "Sven2"];

    echo "<pre>";
    print_r($names2); 
    echo "</pre>";
    
    // echo $names[0];
    // echo $names2[1];

    foreach ( $names as $name ) {
        echo "<p>Hi " . $name . "</p>";
    }

    //Associated Multi-Dimentional Array
    $movies = [ 
        'findingnemo' => [
            'Title' =>'Finding Nemo',
            'Type' => 'DVD',
            'Price' => 30,
            'Studio' => 'Pixar'
        ],
        'diehard' => [
            'Title' => 'Die Hard!',
            'Type' => 'BlueRay',
            'Price' => 10,
            'Studio' => '20th Century Fox'
        ]
];

echo "<pre>";
print_r($movies); 
echo "</pre>";

echo '<p>' . $movies['findingnemo']['Title'] . '</p>';
echo '<p>' . $movies['diehard']['Type'] . '</p>';

foreach($movies as $movie) {
    echo '<p>' . $movie['Title'] . '</p>';
    echo '<p>' . $movie['Type'] . '</p>';
    echo '<p>' . $movie['Price'] . '</p>';
}

foreach( $movies as $movie ) {
    foreach( $movie as $key=>$item){
        echo '<p>' . $key . ': ' . $item . '</p>';
    }
}