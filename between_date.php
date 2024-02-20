<?php 

//Simple way 


$prev_date = '2024-01-01';
$now = date('Y-m-d');

$date1 = date_create($prev_date);
$date2 = date_create($now);


//echo date_diff($date1, $date2)->days;

/*************************   */


$date = date('Y-m-d h:i:s');
$nb_hour = getNbHoursBetweenTwoDate($date, '2024-01-01 22:00:00');
echo $nb_hour;
/**
 * 
 * @param type $date1
 * @param type $date2
 * @return type
 */
function getNbHoursBetweenTwoDate(string $date1,string $date2)
{
	$oDate1 = new DateTime($date1);
	$oDate2 = new DateTime($date2);
	$diff_date = $oDate1->diff($oDate2);
	$days_diff = $diff_date->format('%a');
	$hour_diff = $diff_date->format('%h');
	return $hour_diff + ( $days_diff * 24);		
}

