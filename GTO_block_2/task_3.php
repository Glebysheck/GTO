<?php

function is_prime(int $num): string
{
    $i = 2;
    $j = 0;
    while (true)
    {
        if ($i**2 <= $num and $j != 1)
        {
            if ($num % $i == 0)
                $j++;
            $i++;
        }
        else if ($j == 1)
            return 'composite';
        else
            return 'prime';
    }
}

$number = $_GET['число'];

echo is_prime($number);
