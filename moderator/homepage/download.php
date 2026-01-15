<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "club";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve data from the database

ob_start();
$query = "SELECT * FROM event_join";
$result = mysqli_query($connection, $query);
print_r($result);
//set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\php\PEAR');
//$autoloadPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
//include_path='C:\xampp\php\PEAR';
// Include the PhpSpreadsheet library
//require $autoloadPath;

//set_include_path(__DIR__ . '/../vendor' . PATH_SEPARATOR . get_include_path());

require 'C:\xampp\php\pear\PEAR\autoload_real.php';
require 'C:\Users\Kilol-Lap\vendor\autoload.php';

//../NUVCLUBS/moderator/homepage/phpspreadsheet/vendor/composer/autoload_real.php
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();

// Get the active sheet
$sheet = $spreadsheet->getActiveSheet();

// Add headers to the sheet
$sheet->setCellValue('A1', 'id');
$sheet->setCellValue('B1', 'event_ID');
$sheet->setCellValue('C1', 'club_ID');
$sheet->setCellValue('D1', 'joined_Member_ID');
$sheet->setCellValue('E1', 'show_Event');
// Add more columns as needed

// Loop through the database result and populate the sheet with data
$row = 2; // Start from row 2 (assuming row 1 is for headers)
while ($data = mysqli_fetch_assoc($result)) {
    $sheet->setCellValue('A' . $row, $data['id']);
    $sheet->setCellValue('B' . $row, $data['event_ID']);
    $sheet->setCellValue('C' . $row, $data['club_ID']);
    $sheet->setCellValue('D' . $row, $data['joined_Member_ID']);
    $sheet->setCellValue('E' . $row, $data['show_Event']);
    // Add more columns as needed

    $row++;
}

// Save the spreadsheet to a file
ob_end_clean();
$writer = new Xlsx($spreadsheet);
$filename = 'data.xls'; // Choose a filename for the Excel file
$writer->save($filename);

// Set headers
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="data.xlsx"');
header('Cache-Control: max-age=0');

// Send the file to the browser
readfile($filename);

// Close the database connection
mysqli_close($connection);
?>