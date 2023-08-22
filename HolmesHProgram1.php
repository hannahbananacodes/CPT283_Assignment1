<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>HolmesHProgram1</title>
</head>
<body>
<?php 

# CPT 283 Program 1 - HolmesHProgram1.php
# Created by Hannah Holmes
# This script calculates the heat index ('Feels Like' temperature) based on a given temperature and relative humidity.
# Heat index formula source: http://www.wpc.ncep.noaa.gov/html/heatindex_equation.shtml
# Created 22 Aug 2023

// Set table heading value
define ('TABLE_HEADER', 'Today\'s Heat Index');

// Set the variables
$temperature = 90;
$relativeHumidity = 63;
$heatIndex = 0.0;

// Calculate the "Feels like" temperature/heat index
$heatIndex =  -42.379 + (2.04901523 * $temperature) + (10.14333127 * $relativeHumidity) - 
(.22475541 * $temperature * $relativeHumidity) - 
(.00683783 * $temperature * $temperature) - (.05481717 * $relativeHumidity * $relativeHumidity)
 + (.00122874 * $temperature * $temperature * $relativeHumidity) + 
 (.00085282 * $temperature * $relativeHumidity * $relativeHumidity) - 
 (.00000199 * $temperature * $temperature * $relativeHumidity * $relativeHumidity);

 // Print table header:
echo '<h1>' . TABLE_HEADER . '</h1>';

// Print table with variables and the result of calculation:
echo "
<table>
    <tr>
        <td style=width:20%><h2>Temperature</h2></td>
        <td style=width:20%><h2>Relative Humidity</h2></td>
        <td style=width:20%><h2>Heat Index</h2></td>
    </tr>
    <tr>
        <td><h2>$temperature</h2></td>
        <td><h2>$relativeHumidity</h2></td>
        <td><h2>$heatIndex</h2></td>
    </tr>
</table>
"
?>
<footer>
    image credit: <a href="https://unsplash.com/photos/XOQJa4OC8P0">Paul Bulai</a> on <a href="https://unsplash.com">Unsplash</a>
</footer>
</body>
</html>