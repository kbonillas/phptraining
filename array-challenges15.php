<?php

function printString ( $content, $tag = 'p', $class = null) {
    if( isset($class) ) $class = ' class="'. $class . ' "';
    echo '<'. $tag . $class . '>' . $content . '</' . $tag . '>';
}

function taxes($price){
    return number_format($price * 0.0825, 2);
}

function shippingCosts($weightInPounds){
    $weightInOunces = $weightInPounds * 16;
    return number_format($weightInOunces * 0.15, 2);
}

$products = [
    'red bull' => [
        'name' => 'Red Bull',
        'price' => 5,
        'weight' => 1,
    ],
    'jolly rancher' => [
        'name' => 'Jolly Rancher',
        'price' => 9,
        'weight' => 4,
    ],
    'goldfish' => [
        'name' => 'Goldfish',
        'price' => 4,
        'weight' => 2,
    ],
    'rubber duck' => [
        'name' => 'Rubber Duck',
        'price' => 2,
        'weight' => 0.1,
    ],
];

$totalPrice = 0;
$totalShipping = 0;
$totalTaxes = 0;
foreach ($products as $sku=>$product) {
    // set variable names
    $name = $product['name'];
    $price = $product['price'];
    $weight = $product['weight'];
    $tax = taxes($product['price']);
    $shippingCosts = shippingCosts($product['weight']);

    // add to totals
    $totalPrice = $totalPrice + $price;
    $totalShipping = $totalShipping + $shippingCosts;
    $totalTaxes = $totalTaxes + $tax;

    // display product information
    printString('Sku is: ' . $sku, 'h2');
    printString('Name is: ' . $name);
    printString('Price is: $' . $price);
    printString('Weight is: ' . $weight);
    printString('Tax is: $' . $tax);
    printString('Shipping cost is: $' . $shippingCosts);

}

// display total cart
$finalAmount = $totalPrice + $totalTaxes + $totalShipping;
printString('Total Price: $' . $totalPrice, 'h3');
printString('Total Tax: $' . $totalTaxes, 'h3');
printString('Total Shipping: $' . $totalShipping, 'h3');
printString('Final Amount: $' . $finalAmount, 'h3');


// search form
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="search" id="search" value="<?php echo htmlspecialchars($_POST['search']); ?>">
        <input type="submit" value="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $searchTerm = htmlspecialchars(strip_tags($_POST['search']));

    // $key = array_search($searchTerm, array_column($products, 'name'));
    // $key = array_keys($products)[$key];
    // print_r($products[$key]);
    
    $productsReturned = array_filter(
        $products,
        function ($items) use ($searchTerm) {
            return $items['name'] === $searchTerm;
        }
    );
    
    foreach ($productsReturned as $product) {
        foreach ($product as $key=>$item) {
            printString($key . ': ' . $item);
        }
    }
}