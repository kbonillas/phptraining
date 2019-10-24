<?php

// $username = $_GET['Username'];
$userID = $_GET['UserID'];
// echo $username;

$users = [
    [
        'Username' => 'kristin',
        'Email' => 'kristin.bonillas@gmail.com',
        'Phone' => '559-760-1234',
        'Plan' => 'pro',
    ],
    [
        'Username' => 'emily',
        'Email' => 'emily.vagim@gmail.com',
        'Phone' => '559-676-5678',
        'Plan' => 'pro',
    ],
    [
        'Username' => 'jenn',
        'Email' => 'jenn.springer@gmail.com',
        'Phone' => '559-760-0000',
        'Plan' => 'basic',
    ]
];

foreach ($users as $user) {
    foreach ($user as $key=>$item) {
        echo '<p>' . $key . ': ' . $item . '</p>';
    }

}

// foreach ($users as $user) {
//     if ($username == $user['Username']) {
//         echo '<p>Hello ' . $username . ', your plan is ' . $user['Plan'] . '</p>';
//     }
// }

echo $users[$userID]['Username'];

foreach ($users as $user) {
    if ($user['Plan'] == 'pro') {
        echo '<p>' . $user['Email'] . ' has Pro Plan</p>';
    } else {
        echo '<p>' . $user['Phone'] . ' has Basic Plan</p>';
    }
}

// if(isset($_GET['Username'])) {
//     echo '<p>Hello ' . ($_GET['Username']) . ', your plan is ' . ($_GET['Plan']) . '</p>';
// }