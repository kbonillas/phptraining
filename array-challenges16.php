<?php

/**
 * Echos a string that is wrapped around a tag with class
 * @param Content $content      inputs the content
 * @param Tag $tag              creates the html tag, default is p
 * @param Class $class          inputs the html class, default is null
 * @return Echo                 full html tag with content and class
 */
function printString ( $content, $tag = 'p', $class = null) {
    if( isset($class) ) $class = ' class="'. $class . ' "';
    echo '<'. $tag . $class . '>' . $content . '</' . $tag . '>';
}

/**
 * Creates a function that uses the price as the parameter
 * multiplies the parameter by a number
 * and rounds it to the 2nd decimal
 * 
 * @param Price $price  takes whatever price you put in there
 * @return Number_format total tax/number
 */
function taxes($price){
    return number_format($price * 0.0825, 2);
}

/**
 * Creates a function that uses the price as the parameter
 * multiplies the parameter by a number
 * and rounds it to the 2nd decimal
 * 
 * @param Price $price  takes whatever price you put in there
 * @return Number_format total fee/number
 */
function transactionFees($price){
    return number_format($price * 0.03, 2);
}

/**
 * Creates a variable with arrays inside of it,
 * each array has a key and item with that description
 */
$events = [
    [
        'name' => 'Event One',
        'location' => 'Location One',
        'date' => 'Date One',
        'price' => 5.25,
    ],
    [
        'name' => 'Event Two',
        'location' => 'Location Two',
        'date' => 'Date Two',
        'price' => 10.25,
    ],
    [
        'name' => 'Event Three',
        'location' => 'Location Three',
        'date' => 'Date Three',
        'price' => 15.25,
    ],
    [
        'name' => 'Event Four',
        'location' => 'Location Four',
        'date' => 'Date Four',
        'price' => 20.25,
    ],
];




/**
 * $totalTax, $totalFee, $totalPrice = 0 to give it an amount to start with
 * and setting the variable
 */
$totalTax = 0;
$totalFee = 0;
$totalPrice = 0;

/**
 * looping through the $events variable and setting each one individually
 * then looking at each individual array, specifically at the key and item
 * using a previous function to print our the key/item details
 */
foreach ($events as $event){
    foreach ($event as $key=>$item){
        echo printString($key . ': ' . $item);
    }

    // setting variables
    $price = $event['price'];
    $tax = taxes($event['price']);
    $fee = transactionFees($event['price']);

    // creating totals
    $totalPrice = $totalPrice + $price;
    $totalTax = $totalTax + $tax;
    $totalFee = $totalFee + $fee;

    // displaying event prices & fees
    printString('Tax: $' . $tax, 'h4');
    printString('Transaction Fee: $' . $fee, 'h4');
}

// displaying totals
$finalTotal = $totalPrice + $totalTax + $totalFee;
printString('Total Tax: $' . $totalTax, 'h3');
printString('Total Fees: $' . $totalFee, 'h3');
printString('Final Amount: $' . $totalPrice, 'h3');


/**
 * making a form to get the input text in the url
 */
?>
<form action="http://192.168.33.10/array-challenges16.php" method="get">
    <input type="text" name="search" id="search">
    <button>Submit</button>
</form>

<?php 
/**
 * $searchTerm = taking the submitted text and setting that as the variable
 */
$searchTerm = $_GET['search'];

/**
 * $filteredEvents = filtering through an array,
 * looking at the $events variable,
 * @return Array anything that meets the $searchTerm criteria,
 * matching to see if any event name is equal to the submitted search term
 */
$filteredEvents = array_filter(
    $events,
    function ($event) use ($searchTerm) {
        return $event['name'] == $searchTerm;
    }
);

/**
 * if the filtered events array is empty,
 * then it will say there is no event found
 * otherwise,
 * it will print the event information
 */
if(count($filteredEvents) == 0){
    printString('sorry no event found');
} else {
    print_r($filteredEvents);
}