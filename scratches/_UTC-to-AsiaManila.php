<?php

$datetimeString = '2023-11-23T03:41:00+00:00';

// Create a DateTime object with the original timezone (UTC)
$dateTime = new DateTime($datetimeString, new DateTimeZone('UTC'));

// Set the desired timezone (Asia/Manila)
$dateTime->setTimezone(new DateTimeZone('Asia/Manila'));

// Get the converted datetime string
$convertedDatetime = $dateTime->format('l, M d, Y H:i:s A');
?>