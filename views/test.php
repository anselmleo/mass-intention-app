<?php

//Our YYYY-MM-DD date string.
$date = "2002-12-02";

//Convert the date string into a unix timestamp.
$unixTimestamp = strtotime($date);

//Get the day of the week using PHP's date function.
$dayOfWeek = date("l", $unixTimestamp);

//Print out the day that our date fell on.
echo $date . ' fell on a ' . $dayOfWeek;