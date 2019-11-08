<?php


function printString($content, $tag = 'p', $class = ''){

    // if (isset($class)) $class = ' class="' . $class . '"';
    // echo '<' . $tag . $class . '>' . $content . '</' . '>';


    $html = "<" . $tag;
    if (isset($class)){
        $html .= " class='". $class . "'";
    }
    $html .= ">";
    $html .= $content;
    $html .= "</" . $tag . ">";

    return $html;
}




$products = [
    [
        'sku' => 1,
        'name' => 'jolly rancher',
        'price' => 4.25,
        'weight' => '4 oz',
    ],
    [
        'sku' => 2,
        'name' => 'skittles',
        'price' => 2.25,
        'weight' => '2 oz',
    ],
    [
        'sku' => 3,
        'name' => 'goldfish',
        'price' => 3.75,
        'weight' => '6 oz',
    ],
    [
        'sku' => 4,
        'name' => 'red bull',
        'price' => 5.25,
        'weight' => '8 oz',
    ]
];

echo printString('Product List', 'h2');
foreach ($products as $product) {
    foreach ($product as $key=>$item) {
        echo printString($key . ': ' . $item, 'p');
    }
}




$cartList = [
    [
        'sku' => 1,
        'name' => 'jolly rancher',
        'price' => 4.25,
        'weight' => 4,
    ],
    [
        'sku' => 2,
        'name' => 'skittles',
        'price' => 2.25,
        'weight' => 2,
    ]
];


$total = 0;
function getTaxes($amount){
    $rate = 0.0825;
    return number_format($rate * $amount, 2);
}

$totalShipping = 0;
function shippingCosts($weight){
    $shipping = 0.15;
    return number_format($shipping * $weight, 2);
}

echo printString('Cart List', 'h2');
foreach ($cartList as $cartItem) {
    
    foreach ($cartItem as $key=>$item) {
        echo printString($key . ': ' . $item, 'p');
    }

    $total = $total + $cartItem['price'];
    echo printString('Taxes: $' . getTaxes($total), 'h4');

    $totalShipping = $totalShipping + $cartItem['weight'];
    echo printString('Shipping: $' . shippingCosts($totalShipping), 'h4');
}


echo printString('Total Amount: $' . ($total + $totalShipping + getTaxes($total)), 'h3');