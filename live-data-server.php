<?php
// Set the JSON header
header("Content-type: text/json");
// The x value is the current JavaScript time, which is the Unix time multiplied by 1000.
 $x = time() * 1000;
 The y value is a random number
 $y = rand(0, 100);
$start = 1000;
$below = -10;
$above = 10;
$y= mt_rand(
    (integer) $start - ($start * (abs($below) / 100)),
    (integer) $start + ($start* ($above / 100))
);
// Create a PHP array and echo it as JSON
$ret = array($x, $y);
echo json_encode($ret);
// print_r ($ret );
// echo $x.",".$y;
// print_r (file_get_contents('http://www.highcharts.com/studies/live-server-data.php'));
?>
