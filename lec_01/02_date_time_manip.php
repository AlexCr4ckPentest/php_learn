<?php
    // Alexeyev Alexandr

    $TIME_PATTERN = "H:i:s"; // 12:23:03 for example

    echo "Current full date and time: " . date(DATE_RSS) . "\n";
    echo "Current time: " . date($TIME_PATTERN) . "\n";

    $current_month = date("M (m)");
    $prev_month_number = date("M (m)", mktime(0, 0, 0, date("m") - 1));
    $next_month_number = date("M (m)", mktime(0, 0, 0, date("m") + 1));
    $custom_date = date("Y-m-d H:i:s", mktime(5, 55, 55, 5, 5, 2005));

    echo "Current month: " . $current_month . "\n";
    echo "Previous month is: " . $prev_month_number . "\n";
    echo "Next month is: " . $next_month_number . "\n";

    echo "Custom date time (using mktime()): " . $custom_date . "\n";
?>