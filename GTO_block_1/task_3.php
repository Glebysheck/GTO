<?php

$num = $_GET['число'];
$num_2 = $num;
$array_num = [];

for ($i = strlen((string)$num) - 1; $i >= 0; $i--)
{
    if ($i < 1)
        $array_num[] = $num_2 % 10;
    else
        $array_num[] = intdiv($num_2, 10**$i);
    $num_2 -= 10**$i * $array_num[strlen((string)$num) - $i - 1];
}

$big_nums = 0;
for ($i = 0; $i < strlen((string)$num); $i++)
{
    $big_num = 0;
    $a = 0;
    foreach ($array_num as $item)
    {
        if ($item > $big_num)
        {
            $big_num = $item;
            $a = array_search($item, $array_num);
        }
    }
    unset($array_num[$a]);
    $big_nums += $big_num * 10**(strlen((string)$num) - $i - 1);
}

echo $big_nums;
