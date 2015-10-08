<?php

/**
 * date function converts timestamps into different types of strings.
 * PHP date() Function has the following format.
 * date(format,timestamp);
 * 
 * Parameter	 IsRequired	 Description
 * format	     Required.	 Format of the outputted date string.
 * timestamp	 Optional.	 Integer Unix timestamp. Default is the current local time (time())
 */


$date = date('yy/m/d');
echo $date;

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");

// Prints the day
echo "\n". date("l") . "\n";

//The following code shows how to get number days any month.
$lastday = mktime(0, 0, 0, 2, 1, 2012);
printf("\nThere are %d days in February, 2010.", date("t",$lastday));

//The following code shows how to get number days current month.
printf("\nThere are %d days in %s.", date("t"), date("F"));

/**
 * The date_parse() function parses string to get a date.
 * Syntax - date_parse(date);
 * Parameter - date - Required. Date in a format accepted by strtotime();
 * Return - PHP date_parse() Function returns parsed date on success. FALSE on failure.
 */
print_r(date_parse("2013-05-01 12:30:45.5"));
echo "\n";
$time = "00:14:38";
$parse_date = date_parse($time);
echo '<pre>'.var_dump($parse_date).'</pre>'."\n"; 

