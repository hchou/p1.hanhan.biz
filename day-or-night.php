<?php
    date_default_timezone_set('America/New_York');
    $hour = date('H');
    $test = "Hello world, the hour is $hour in New York!";
    $morningBackgroundColor = '#99CCFF';
    $morningColor = '#000000';
    $nightBackgroundColor = '#000000';
    $nightColor = '#99CCFF';
    if ($hour >= 6 && $hour <= 20 ) {
        #echo "<body style=\"background-color:$morningBackgroundColor\">";
        #echo "<a style=\"color:$morningColor\">$test</p>";
        $backgroundColor = $morningBackgroundColor;
        $color = $morningColor;
    }
    else {
        #echo "<body style=\"background-color:$nightBackgroundColor\">";
        #echo "<p style=\"color:$nightColor\">$test</p>";
        $backgroundColor = $nightBackgroundColor;
        $color = $nightColor;
    }
    #echo "<p>$test</p>";
?>