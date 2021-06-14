<?php
// Generate 6 digit random number
function get_random_number()
{

    $today = date('YmdHi');
    $startDate = date('YmdHi', strtotime('-10 days'));
    $range = $today - $startDate;
    $rand1 = rand(0, $range);
    $rand2 = rand(0, 600000);
    
    return  $value = ($rand1 + $rand2);
}
