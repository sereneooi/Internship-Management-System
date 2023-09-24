<?php
require_once '../connect.php';

// Perform necessary database queries to retrieve data for the report
$query = $conn->query("SELECT * FROM `admin`") or die($conn->error);
$admins = $query->fetch_all(MYSQLI_ASSOC);

// Generate the HTML report
$report = '<html>';
$report .= '<head><title>Admin Report</title></head>';
$report .= '<body>';
$report .= '<h1>Admin Report</h1>';
$report .= '<table>';
$report .= '<thead><tr><th>Username</th><th>Name</th></tr></thead>';
$report .= '<tbody>';
foreach ($admins as $admin) {
    $report .= '<tr>';
    $report .= '<td>' . $admin['username'] . '</td>';
    $report .= '<td>' . $admin['name'] . '</td>';
    $report .= '</tr>';
}
$report .= '</tbody>';
$report .= '</table>';
$report .= '</body>';
$report .= '</html>';

// Set the HTTP headers for the response
header('Content-Type: text/html'); // Change to the appropriate content type

// Output the generated report
echo $report;
?>
