<?php

function new_year ($year): int
{
    while (true)
    {
        $that = true;
        $year++;
        $str_year = (string)$year;
        for ($i = 0; $i < 4; $i++)
        {
            for ($k = $i + 1; $k < 4; $k++)
            {
                if ($str_year[$i] == $str_year[$k])
                {
                    $that = false;
                    break;
                }
            }
            if (!$that)
                break;
        }
        if ($that)
            break;
    }
    return $year;
}

$year = $_GET['год'];

echo new_year($year);
