<?php

$num = $_GET['количество_элементов'];
$str = $_GET['элементы'];
$array = explode(' ', $str);
$that = false;

for ($i = 0; $i < $num; $i++)
{
    for ($k = $i + 1; $k < $num; $k++)
    {
        if ($array[$i] + $array[$k] == 0)
        {
            if ($i < $k)
                echo $i . ' ' . $k;
            else
                echo $k . ' ' . $i;
            $that = true;
            break;
        }
    }
    if ($that)
        break;
}
