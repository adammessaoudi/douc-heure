<?php
/*
* iTech Empires:  Export Data from MySQL to CSV Script
* Version: 1.0.0
* Page: Export
*/

// Database Connection
require("function.php");

// get rating
$query = "SELECT * FROM rating";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

$rating = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $rating[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=rating.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('nom', 'note', 'idReclamation'));

if (count($rating) > 0) {
    foreach ($rating as $row) {
        fputcsv($output, $row);
    }
}
?>
