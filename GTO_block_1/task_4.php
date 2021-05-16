<?php

$way_1 = $_GET['число_1'];
$way_2 = $_GET['число_2'];
$way_3 = $_GET['число_3'];
$array_points = [
    $point_1 = new Point($way_1, $way_2, 1),
    $point_2 = new Point($way_2, $way_3, 2),
    $point_3 = new Point($way_3, $way_1, 3)
];

$length_way = 0;

$point = $point_1;
$target_1 = false;
$target_2 = false;

if ($point->way_1 > $point->way_2)
{
    $length_way += $point->way_2;
    $point = $point_2;
    if ($point->way_2 > $point->way_1 + $point_1->way_1)
    {
        $length_way += $point->way_1 + $point_1->way_1 * 2;
    }
    else
    {
        $length_way += $point->way_2;
        $point = $point_3;
        if ($point->way_2 > $point->way_1 + $point_2->way_1)
            $length_way += $point->way_1 + $point_2->way_1;
        else
            $length_way += $point->way_2;
    }
}
else
{
    $length_way += $point->way_1;
    $point = $point_3;
    if ($point->way_1 > $point->way_2 + $point_1->way_2)
    {
        $length_way += $point->way_2 + $point_1->way_2 * 2;
    }
    else
    {
        $length_way += $point->way_1;
        $point = $point_2;
        if ($point->way_1 > $point->way_2 + $point_3->way_2)
            $length_way += $point->way_2 + $point_3->way_2;
        else
            $length_way += $point->way_1;
    }
}

echo $length_way;

class Point
{
    public $num;

    public $way_1;
    public $way_2;

    public function __construct($way_1, $way_2, $num)
    {
        $this->way_1 = $way_1;
        $this->way_2 = $way_2;
        $this->num = $num;
    }
}
