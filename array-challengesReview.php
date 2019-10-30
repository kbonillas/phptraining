<?php

// challenge 1
$drinks = ['iced tea' , 'sprite', 'strawberry margaritas'];
foreach ($drinks as $drink) {
    echo '<p>I like drinking ' . $drink . '</p>';
}


// challenge 2
$foods = [
    [
        'name' => 'pasta',
        'price' => 1.75,
        'location' => 'Vons'
    ],
    [
        'name' => 'goldfish',
        'price' => 3.25,
        'location' => 'Target'
    ],
    [
        'name' => 'chicken',
        'price' => 6.00,
        'location' => 'Raleys'
    ],
];

$total = 0;
foreach ($foods as $food) {
    echo $food['name'] . $food['price'] . $food['location'];
    if ($food['price'] >= 5.0) {
        echo '<p>For items more than $5 receive free shipping!</p>';
    }
    $total = $food['price'] + $total;
}

$tax = number_format($food['price'] * 0.07975, 2);
$finalAmount = number_format($tax + $total, 2);

echo '<h5>Your Price: $' . $total . '</h5>';
echo '<h5>Your Tax: $' . $tax . '</h5>';
echo '<h5>Your Total: $' . $finalAmount . '</h5>';


foreach ($foods as $food) {
    foreach ($food as $key=>$item) {
        echo '<p>' . $key . ': ' . $item . '</p>';
        if ($food['price'] >= 5.0) {
            echo '<p>For items more than $5 receive free shipping!</p>';
        }

        // if ($key == 'price') {
        //     $tax = number_format($item * 0.07975, 2);
        //     $total = $item + $tax;
            
        //     echo '<h5>Price: $' . $food['price'] . '</h5>';
        //     echo '<h5>Tax: $' . $tax . '</h5>';
        //     echo '<h5>Total: $' . $total . '</h5>';
        // }
    }
}