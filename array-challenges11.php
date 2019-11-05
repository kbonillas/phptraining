<?php

// challenge 1
function printString($content, $tag = 'p') {
    echo '<' . $tag . '>' . $content . '</' . $tag . '>';
}

// challenge 2
$foodInFridge = ['apple', 'onion', 'banana', 'asparagus', 'broccoli'];

// challenge 3
$fruits = [];
$veggies = [];
foreach ($foodInFridge as $food) {
    if ($food == 'apple' || $food == 'banana'){
        array_push($fruits, $food);
    } else {
        array_push($veggies, $food);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>These are Fruits</td>
            <td>These are Veggies</td>
        </tr>
        <tr>
            <td>
                <?php 
                    foreach ($fruits as $fruit) {
                        printString($fruit);
                    }
                ?>
            </td>
            <td>
                <?php 
                    foreach ($veggies as $veggie) {
                        printString($veggie);
                    }
                ?>
            </td>
        </tr>
    </table>

    <?php 
        // challenge 4
        if (in_array('broccoli', $foodInFridge)) {
            echo printString('eww broccoli', 'p');
        }


        // challenge 5
        $foodForRecipe = ['onion', 'asparagus', 'broccoli', 'chicken', 'cheese'];

        $foodNeeded = array_diff($foodForRecipe, $foodInFridge);
        echo printString('Need to purchase for recipe', 'h2');
        echo '<ul>';
        foreach ($foodNeeded as $item) {
            echo printString($item, 'li');
        }
        echo '</ul>';
    ?>
    
</body>
</html>