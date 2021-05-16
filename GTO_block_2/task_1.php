<?php

$max_num = $_GET['max_num'];

for ($i = 0; $i <= $max_num; $i++)
{
    if ((string)$i == substr((string)$i**2, strlen((string)$i**2) - strlen((string)$i - 1)))
        echo $i . ' ';
}

