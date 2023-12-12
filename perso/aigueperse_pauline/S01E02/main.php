<?php
// Enable error reporting for development.
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Set the maximum execution time for this script to 60 seconds.
set_time_limit(60);

// Output 512MB of data to test memory limit.
$largeData = str_repeat("a", 512 * 1024 * 1024);
echo "Memory usage: " . round(memory_get_usage() / (1024 * 1024), 2) . " MB\n";

// Sleep for 61 seconds to exceed the timeout.
sleep(61);
echo "Script completed successfully (this should not be reached due to the timeout).\n";
?>