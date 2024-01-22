<?php

/**
 * outputs date based on provided configurations
 * @param $modOperator
 * @param $setHour
 * @param $setMin
 * @param $format
 * @param $militaryTime
 * @return string
 * @throws Exception
 */
function getFormattedDate($modOperator=null, $setTime=null, $setHour=null, $setMin=null, $format=null, $militaryTime=true)
{
    /**
     * sets the current timezone to Asia/Manila or time in the Philippines
     */
    date_default_timezone_set('Asia/Manila');
    /**
     * gets the current time with the format 1996-10-30 12:12:00
     */
    $currentTime = date('Y-m-d H:i:s');
    /**
     * creates a new instance of DateTime that provides different methods to modify the provided date
     */
    $datetime = new DateTime($currentTime);
    /**
     * modifies the current date by supplementing date operators (e.g. '+1 days', '-5days', '+10 hours', 'Monday next week', 'this week +6 days')
     */
    if ($modOperator) {
        $datetime->modify($modOperator);
    }
    /**
     * sets the time manually by hour and minutes and seconds (e.g. '10, 20, 00' outputs 10:20:00)
     */
    if ($setTime) {
        $time = explode(',',$setTime);
        foreach($time as &$value){
            $value = trim($value);
        }
        $count = count($time);

        switch($count){
            case 1:
                $datetime->setTime($time[0]);
                break;
            case 2:
                $datetime->setTime($time[0], $time[1]);
                break;
            case 3:
                $datetime->setTime($time[0], $time[1], $time[2]);
                break;
            default:
                break;
        }
    }

    if($setHour || $setMin) {
        $hour = $datetime->format('H');
        $minute = $datetime->format('i');
        $sec = $datetime->format('s');
        $datetime->setTime($setHour ?? $hour, $setMin ?? $minute, $sec);
    }
    /**
     * outputs date based on provided format
     * if none, checks value of
     * @var $militaryTime
     * if true, will output date using the default format
     * if false, will output date using the 12-hour format
     *
     */
    if ($format) {
        $currentTime = $datetime->format($format);
    } else {
        if($militaryTime){
            $currentTime = $datetime->format('Y-m-d H:i:s');
        } else {
            $currentTime = $datetime->format('Y-m-d h:i:s');
        }
    }

    return $currentTime;
}

//$currentDate = getFormattedDate(modDaysOperator: '-1 days', setHour: '10', setMin: '20', modHourOperator: '+2 hours');
//$currentDate = getFormattedDate('first day of this year');
$currentDate = getFormattedDate('sunday this week', setTime: '23, 59, 59');
//$currentDate = getFormattedDate(setHour: '10');
print_r($currentDate);