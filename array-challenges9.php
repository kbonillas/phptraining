<?php

$location = htmlspecialchars(strip_tags($_GET['location']));

function wrapText($content, $tag = 'p') {
    return '<'.$tag.'>' . $content . '</'.$tag.'>';
}

echo wrapText($location);

$events = [
    [
        'location' => 'Bitwise',
        'title' => 'Taco Bout Geekwise',
        'event-description' => 'Description 1',
    ],
    [
        'location' => 'Bitwise',
        'title' => 'Design Workshop',
        'event-description' => 'Description 2',
    ],
    [
        'location' => 'Oakhurst',
        'title' => 'Craft Night',
        'event-description' => 'Description 3',
    ],
];

// foreach ($events as $event) {
//     // foreach ($event as $key=>$item) {
//     //     echo '<p>' . $key . ': ' . $item . '</p>';
//     // }
//     if ($event['location'] == 'Bitwise') {
//         echo wrapText($event['title']);
//     }
// }

$i = 0;
foreach ($events as $event) {
    if ($event['location'] == $location) {
        echo wrapText($event['title'], 'h1');
        echo wrapText($event['event-description'], 'h2');
        echo wrapText($event['location']);
    } else {
        if ($i == 0) {
            echo wrapText('Sorry, there are no events here');
        }
    }
    $i++;
}

// foreach ($events as $event) {
//     if ($event['location'] === 'Bitwise') {
//         echo '<p>' . $event['title'] . ' is at Bitwise</p>';
//     }

//     if ($event['location'] == $location) {
//         echo wrapText($event['title'], 'h2');
//         echo wrapText($event['event-description']);
//     }
// }