<?php
    #####
    # day-or-night logic code
    #####
    
    date_default_timezone_set('America/New_York');
    $hour = date('H');
    $test = "Hello world, the hour is $hour in New York!";
    $morningBackgroundColor = '#99CCFF';
    $morningColor = '#000000';
    $nightBackgroundColor = '#000000';
    $nightColor = '#99CCFF';
    if ($hour >= 6 && $hour <= 20 ) {
        $themeClass = 'day';
        echo "<a>$test</a>";
    }
    else {
        $themeClass = 'night';
        echo "<a>$test</a>";
    }
    #echo "<p>$test</p>";
?>