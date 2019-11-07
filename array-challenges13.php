<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<?php

// challenge 1
function printString($content, $tag = 'p', $class = ''){
    $html = "<" . $tag;
    if (isset($class)){
        $html .= " class='". $class . "'";
    }
    $html .= ">";
    $html .= $content;
    $html .= "</" . $tag . ">";

    return $html;
}

// challenge 2
$signedUp = [
    'attending' => [
        'miles sebesta', 'jason cooksey', 'miles l', 'miles sebesta', 'jason cooksey'
    ],
    'not attending' => [
        'boss ross', 'john doe'
    ]
];
echo '<pre>';
print_r($signedUp);
echo '</pre>';

$signedUp['attending'] = array_unique($signedUp['attending']);

// challenge 3
echo '<pre>';
print_r($signedUp['attending']);
echo '</pre>';

// challenge 4
if (in_array('miles l', $signedUp)){
    echo printString('youre an imposter!', 'p');
}


// challenge 5
foreach($signedUp as $key => $value){
    foreach($value as $person){
        if($key == 'attending'){
            echo printString($person, 'p', 'highlighted');
        } else {
            echo printString($person, 'p');
        }
    }
}

?>

<table>
        <tr>
            <td>attended</td>
            <td>didnt attend</td>
        </tr>
        <tr>
            <td>
                <?php 
                    foreach ($signedUp['attending'] as $person) {
                        echo printString($person, 'p');
                    }
                ?>
            </td>
            <td>
                <?php 
                    foreach ($signedUp['not attending'] as $person) {
                        echo printString($person, 'p');
                    }
                ?>
            </td>
        </tr>
    </table>

</body>
</html>