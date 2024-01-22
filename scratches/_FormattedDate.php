<?php

function getFormattedDate($modDaysOperator=null, $setHour=null , $setMin=null, $modHourOperator=null, $format=null)
{
    date_default_timezone_set('Asia/Manila');
    $currentime = date('Y-m-d H:i:s');
    $datetime = new DateTime($currentime);

    if($modDaysOperator){
        $datetime->modify($modDaysOperator);
    }

    if($setHour && $setMin){
        $datetime->setTime($setHour,$setMin);
    }

    if($modHourOperator){
        $datetime->modify($modHourOperator);
    }

    if($format){
        $currentime = $datetime->format($format);
    } else {
        $currentime = $datetime->format('Y-m-d H:i:s');
    }

    return $currentime;
}

//$currentDate = getFormattedDate('-1 days' );
//$currentDate = getFormattedDate();
$currentDate = getFormattedDate(modeDaysOperator: '-1 days');

print_r($currentDate);