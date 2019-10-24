<?php

function getTaxes($amount) {
    $rate = 0.0725;
    return number_format($rate * $amount, 2);
}

function getShipping($amount) {
    if ($amount <= 15) {
        $shipping = 7;
    } else {
        $shipping = 0;
    }
    return number_format($shipping, 2);
}

$cart = [
    [
        'Title' => 'Shoes',
        'Cost' => 40.00
    ],
    [
        'Title' => 'Hat',
        'Cost' => 10.00
    ],
    [
        'Title' => 'Pencil',
        'Cost' => 2.00
    ]
];

$total = 0;
$totalShipping = 0;
foreach ($cart as $product) {
    // Add numbers together after every loop
    $total = $total + $product['Cost'];
    $totalShipping = $totalShipping + getShipping($product['Cost']);

    echo '<p>' . $product['Title'] . ' costs $' . $product['Cost'] . '</p>';
    echo "Product shipping costs $" . getShipping($product['Cost']);
}

echo '<p>Total: $' . $total . '</p>';
echo '<p>Taxes: $' . getTaxes($total) . '</p>';
echo '<p>Shipping: $' . $totalShipping . '</p>';
echo '<p>Total Amount: $' . ($total + $totalShipping + getTaxes($total)) . '</p>';
// echo '<p>Taxes: $' . number_format(($total * 0.0725), 2) . '</p>';






// $cartItems = [
//     [
//         'product' => 'apples',
//         'price' => 4,
//     ],
//     [
//         'product' => 'soda',
//         'price' => 6,
//     ],
//     [ 
//         'product' => 'meat',
//         'price' => 20
//     ]
// ];

// foreach ($cartItems as $cartItem){
//     foreach ($cartItem as $key=>$item) {
//         echo '<p>' . $key . ': ' . $item .  '</p>';
//     }
// }

// $total = 0;
// $tax = 0.07;
// $shipping = 0;
// $shippingCost = 7;

// foreach ($cartItems as $item) {
//     $total = $total + $item['price'];

//     if($item['price'] < 15) {
//         $shipping = ($shipping + $shippingCost);
//     }
// }


// echo '<p>Total: $' . $total . '</p>';
// echo '<p>Shipping: $' . $shipping . '</p>';
// echo  '<p>Total w/ shipping and tax: $' . (($total * $tax) + $total + $shipping) . '</p>';