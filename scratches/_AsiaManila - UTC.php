<?php

$currentAsiaManilaTime = "2023-11-17 15:12:46";
$given = new DateTime($currentAsiaManilaTime, new DateTimeZone('Asia/Manila')); // assuming the date is in 'Asia/Manila' timezone
$given->setTimezone(new DateTimeZone("UTC"));
echo $given->format("Y-m-d\TH:i:sP") . "\n"; // prints the date in the desired format

//output = 2023-11-23T07:11:16+00:00 UTC