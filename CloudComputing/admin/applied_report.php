<?php
require_once '../connect.php';

// Perform necessary database queries to retrieve data for the report
$query = $conn->query("SELECT * FROM `fill_details`") or die($conn->error);
$fillDetails = $query->fetch_all(MYSQLI_ASSOC);

// Generate the HTML report with improved formatting
$report = '<html>';
$report .= '<head>';
$report .= '<title>Student List Report</title>';
$report .= '<style>';
$report .= 'body { font-family: Arial, sans-serif; margin: 20px; }';
$report .= 'h1 { text-align: center; }';
$report .= 'table { width: 100%; border-collapse: collapse; }';
$report .= 'th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }';
$report .= 'tr:nth-child(even) { background-color: #f2f2f2; }';
$report .= 'th { background-color: #4CAF50; color: white; }';
$report .= '</style>';
$report .= '</head>';
$report .= '<body>';
$report .= '<h1>Student List Report</h1>';
$report .= '<table>';
$report .= '<thead><tr><th>Company Name</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Gender</th><th>CV</th></tr></thead>';
$report .= '<tbody>';

foreach ($fillDetails as $detail) {
    $report .= '<tr>';
    $report .= '<td>' . $detail['company_name'] . '</td>';
    $report .= '<td>' . $detail['first_name'] . '</td>';
    $report .= '<td>' . $detail['last_name'] . '</td>';
    $report .= '<td>' . $detail['email'] . '</td>';
    $report .= '<td>' . $detail['gender'] . '</td>';
    $report .= '<td>' . $detail['file'] . '</td>';
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
