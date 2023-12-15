<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "ct";
$conn = new mysqli($server_name, $username, $password, $database_name);
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $institution = $_POST['institution'] ?? '';
    $school = $_POST['school'] ?? '';
    $program_name = $_POST['program_name'] ?? '';
    $semester = $_POST['semester'] ?? '';
    $subject_code = $_POST['subject_code'] ?? '';
    $subject_title = $_POST['subject_title'] ?? '';
    $date = $_POST['date'] ?? '';
    $time_duration = $_POST['time_duration'] ?? '';
    $ete_mst = isset($_POST['ete_mst']) ? $_POST['ete_mst'] : '';
    $max_marks = $_POST['max_marks'] ?? '';

    $sql_query = "INSERT INTO uni (institution, school, program_name, semester, subject_code, subject_title, date, time_duration, ete_mst,max_marks) VALUES ('$institution', '$school', '$program_name', '$semester', '$subject_code', '$subject_title', '$date', '$time_duration', '$ete_mst','$max_marks')";
    if (mysqli_query($conn, $sql_query)) {
        echo "New Details Entry inserted successfully!";
    } else {
        echo "Error: " . $sql_query . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
