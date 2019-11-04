<?php

function printString($content, $tag = 'p', $class = '') {

    $html = "<" . $tag;
    if (isset($class)){
        $html .= " class='". $class . "'";
    }
    $html .= ">";
    $html .= $content;
    $html .= "</" . $tag . ">";

    return $html;    
}


// List for challenge 2
$numbers = [
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100),
    rand(1,100)
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        // challenge 2
        foreach ($numbers as $number) {
            if ($number % 2 == 0) {
                echo printString($number, 'p', 'highlighted');
            } else {
                echo printString($number, 'p');
            }
        }

        // challenge 3
        $evenNumbers = [];
        $oddNumbers = [];

        foreach ($numbers as $number) {
            if ($number % 2 == 0) {
                array_push($evenNumbers, $number);
            } else {
                array_push($oddNumbers, $number);
            }
        }
    ?>
    <table>
        <tr>
            <td>
                These numbers are even
            </td>
            <td>
                These numbers are odd
            </td>
        </tr>
        <tr>
            <td>
                <?php 
                    foreach ($evenNumbers as $evenNumber) {
                        echo printString($evenNumber, 'p');
                    } 
                ?>
            </td>
            <td>
                <?php 
                    foreach ($oddNumbers as $oddNumber) {
                        echo printString($oddNumber, 'p');
                    } 
                ?>
            </td>
        </tr>
    </table>

    <?php 
    // challenge 4
    $veggies = ['tomatoes', 'spinach', 'squash', 'onions'];

    /**
     * in_array
     * 
     * First parameter is what youre looking for
     * Second parameter is where youre looking
     */
    if (in_array('tomatoes', $veggies)) {
        echo printString('those tomatoes are rotten', 'p');
    }


    // challenge 5
    $userWishList = ['shoes', 'bikes', 'computer', 'sunglasses'];
    $userPurchases = ['shoes', 'bikes'];

    $newWishList = array_diff($userWishList, $userPurchases);

    echo printString('My Wishlist', 'h2');
    echo '<ul>';
    foreach ($newWishList as $item) {
        echo printString($item, 'li');
    }
    echo '</ul>';




    ?>
</body>
</html>