<?php
//To time ago

function to_time_ago($time)
{
    // Calculate difference between current
    // time and given timestamp in seconds
    $difference = time() - strtotime($time);

    // Check for seconds
    if ($difference < 1) {
        return 'less than only a second ago';
    }
    $time_rule = array(
        12 * 30 * 24 * 60 * 60 => 'year',
        30 * 24 * 60 * 60 => 'month',
        24 * 60 * 60 => 'day',
        60 * 60 => 'hour',
        60 => 'minute',
        1 => 'second'
    );


    foreach ($time_rule as $sec => $my_str) {

        //calculating the difference with the data in the array to find the right time
        $res = $difference / $sec;
        if ($res >= 1) {

            $t = round($res);
            //Link the date to the text and then return the value
            return $t . ' ' . $my_str .
                ($t > 1 ? 's' : '') . ' ago';
        }
    }
}

//Start date
$date = new DateTime('2021-10-31');

// Display the time ago
echo to_time_ago($date->format('Y-m-d')) . "\n";
