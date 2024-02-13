<?php 

//Simple way 


$prev_date = '2024-01-01';
$now = date('Y-m-d');

$date1 = date_create($prev_date);
$date2 = date_create($now);


echo date_diff($date1, $date2)->days;

