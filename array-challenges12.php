<?php

// challenge 1
function printString($content, $tag = 'p'){
    echo '<' . $tag . '>' . $content . '</' . $tag . '>';
}

// challenge 2
$openAmounts = [
    -10, 100, 98, -23, -78
];

// challenge 3
$transactions = [
    'deposits' => [],
    'withdrawls' => []
];

foreach ($openAmounts as $openAmount) {
    if ($openAmount > 0) {
        array_push($transactions['deposits'], $openAmount);
    } else {
        array_push($transactions['withdrawls'], $openAmount);
    }
}
echo '<pre>';
print_r($transactions);
echo '</pre>';


echo "<table>";
    echo "<tr>";
        foreach ($transactions as $key=>$transactionType) {
            printString('These are ' . $key, 'td');

        }
    echo "</tr>";
    echo "<tr>";
        foreach ($transactions as $key=>$transactionType) {
            foreach ($transactionType as $transaction) {
                printString($transaction, 'td');
            }
        }
    echo "<tr>";
echo "</table>";