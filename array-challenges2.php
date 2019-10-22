<?php
    $drinks = ['Mr. Pibb', 'Iced Tea', 'Iced Coffee'];

    foreach($drinks as $drink){
        echo '<p> I like drinking ' . $drink . '</p>';
    }

    $foods = [
        'sushi' => [
            'Name' => 'sushi roll',
            'Price' => 13,
            'Location' => 'Mr. Sushi'
        ],

        'tacos' => [
            'Name' => 'asada tacos',
            'Price' => 1.25,
            'Location' => 'Lola Ricos Tacos'
        ],
        'pizza' => [
            'Name' => 'pepperoni pizza',
            'Price' => 12,
            'Location' => 'Me-N-Eds'
        ]
    ];

        foreach ($foods as $food) {
            $tax = round($food['Price'] * 0.0795, 2);
            $total = $food['Price'] + $tax;

            echo '<p>Name: ' . $food['Name'] . '</p>';
            echo '<p>Price: ' . $food['Price'] . '</p>';
            echo '<p>Tax: ' . $tax . '</p>';
            echo '<p>Total: ' . $total . '</p>';

            if ($food['Price'] >= 5.0){
                echo "<p>Shipping: Free</p>";
            }

            echo '<p>Location: ' . $food['Location'] . '</p>';
        
            foreach ($food as $key=>$item){
                echo '<p>' . $key . ': ' . $item . '</p>';

                if ($key == 'Price') {
                    $tax = number_format($item * 0.0795, 2);
                    $total = $item + $tax;

                    echo '<p>Tax: ' . $tax . '</p>';
                    echo '<p>Total: ' . $total . '</p>';
                }

                if ( $key == 'Price' && $item >= 5 ){
                    echo "free shipping";
                }
            }
        }

            
            
        



