<?php

// challenge 1
$favoritePeople = ['emily', 'jenn', 'kelsi'];
foreach ($favoritePeople as $favoritePerson) {
    echo '<p>I love ' . $favoritePerson . '</p>';
}

// challenge 2
$transactions = [
    -10, -50, 20, 100, 500, 1000
];

$total = 0;
foreach ($transactions as $transaction) {
    echo $transaction;
    if ($transaction >=0) {
        echo '<p>Deposited: ' . $transaction . '</p>';
    } else {
        echo '<p>Withdrew: ' . $transaction . '</p>';
    }
    $total = $total + $transaction;
}
$tax = number_format($total * 0.30, 2);
$total = number_format($total, 2);
$afterTax = number_format($total - $tax, 2);

echo '<p>Total: ' . $total . '</p>';
echo '<p>Tax (30% of total amount): ' . $tax . '</p>';
echo '<p>Total after Tax: ' . $afterTax . '</p>';



// challenge 3
$posts = [
    [
        'Title' => 'The Title',
        'Content' => 'The Content',
        'Author' => 'kristin',
        'Image' => 'https://images.unsplash.com/photo-1571210059434-edf0dc48e414?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80'
    ],
    [
        'Title' => 'The Title2',
        'Content' => 'The Content2',
        'Author' => 'kristin',
        'Image' => 'https://images.unsplash.com/photo-1571210059434-edf0dc48e414?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80'
    ]
];

function the_title($pre = null, $close = null) {
    global $post;

    if ($pre == null) $pre ='<h1>';

    if ($close == null) $close ='</h1>';

    echo $pre . $post['Title'] . $close;
}

function the_content() {
    global $post;
    echo '<p>' . $post['Content'] . '</p>';
}

function the_author() {
    global $post;
    echo '<p>' . $post['Author'] . '</p>';
}

foreach ($posts as $post) {
    // echo $post['Title'];
    the_title('<h4>', '</h4>');
    the_content();
    the_author();
    // echo $post['Content'];
    // echo "<img src=' " . $post['Image'] . "' />";
    // echo $post['Author'];
}







// $statements = [
//     'statement1' => [
//         'Type' => 'deposit',
//         'Amount' => 1000
//     ],
//     'statement2' => [
//         'Type' => 'deposit',
//         'Amount' => 500
//     ],
//     'statement3' => [
//         'Type' => 'deposit',
//         'Amount' => 100
//     ],
//     'statement4' => [
//         'Type' => 'deposit',
//         'Amount' => 20
//     ],
//     'statement5' => [
//         'Type' => 'withdrawal',
//         'Amount' => 50
//     ],
//     'statement6' => [
//         'Type' => 'withdrawal',
//         'Amount' => 10
//     ]
// ];

// $total = 0;
// foreach ($statements as $statement) {
//     $total += array_sum($statement);
//     // $total = ($statement['Amount']);
//     $taxes += (array_sum($statement) * .3);
//     $recommendation = $total - $taxes;

//     foreach ($statement as $key=>$item) {
//         // echo '<p>' . $key . ': ' . $item . '</p>';

//         if ($item == 'deposit') {
//             echo '<p>Deposited: ' . $statement['Amount'] . '</p>';
//         }

//         if ($item == 'withdrawal') {
//             echo '<p>Withdrawal: ' . $statement['Amount'] . '</p>';
//         }
//     }
// }

// echo '<p>Total in Account: ' . $total . '</p>';
// echo '<p>Taxes (30% of total amount): ' . $taxes . '</p>';
// echo '<p>After Taxes Recommendation: ' . $recommendation . '</p>';