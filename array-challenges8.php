<?php

$assigned = htmlspecialchars(strip_tags($_GET['assigned']));

function wrapText($content, $tag = 'p') {
    return '<'.$tag.'>' . $content . '</'.$tag.'>';
}

echo wrapText($assigned);

$tasks = [
    [
        'assigned' => 'John Doe',
        'title' => 'Task 1',
        'description' => 'Description 1',
    ],
    [
        'assigned' => 'John Doe',
        'title' => 'Task 2',
        'description' => 'Description 2',
    ],
    [
        'assigned' => 'Kristin',
        'title' => 'Task 3',
        'description' => 'Description 3',
    ],
];

foreach ($tasks as $task) {
    foreach ($task as $key=>$item) {
        echo '<p>' . $key . ': ' . $item . '</p>';
    }
}

foreach ($tasks as $task) {
    // set assigned to $assigned from the URL get
    if ($task['assigned'] == $assigned) {
        echo wrapText($task['title'], 'h2');
        echo wrapText($task['description']);
    }
}