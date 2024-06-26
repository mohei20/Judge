<?php
session_start();

require 'vendor/autoload.php';
include("config.php");

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure $_SESSION['role'] is set and not empty
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : null;

    $reader = IOFactory::createReader("Xlsx");
    $spreadsheet = $reader->load('PALSTF JUDGEMENT Final 2024.xlsx');
    $sheet = $spreadsheet->getActiveSheet();
    $last_row = (int) $sheet->getHighestRow();

    $sql = "SELECT * FROM project";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $line = $row['project_line'];

            if ($role == 1) {
                $cell = "C" . $line;
                $av = $row['av1m'];
            } elseif ($role == 2) {
                $cell = "D" . $line;
                $av = $row['av2m'];
            } elseif ($role == 3) {
                $cell = "E" . $line;
                $av = $row['av3m'];
            }

            // Check if $cell is set before attempting to set the cell value
            if (isset($cell)) {
                $sheet->setCellValue($cell, $av);
            }
        }
    }

    $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
    $writer->save('PALSTF JUDGEMENT Final 2024.xlsx');

    // Redirect after all processing is done
    header("Location: admin.php");
    exit; // Ensure no further code is executed after header redirection
}
?>
