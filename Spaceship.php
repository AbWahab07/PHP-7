<?php

    // Also called Combined comparison operator.
    // Most frequently you'll use it in the usort() callback function.
    // <=> behind the scenes it return -1 0 1
    // Compare function

    $games = ['Cricket', 'Football', 'Basket Ball', 'Hockey'];
    sort($games);

    usort($games, function ($b, $a)
    {
        return $a <=> $b; // reverse sort.
    });

    var_dump($games);
 ?>
