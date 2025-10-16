<?php
$conn = include('../config/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $abbrev = $_POST['abbrev'];
    $code = $_POST['code'];

    $query = "INSERT INTO countries (name, abbrev, code) VALUES ('$name', '$abbrev', '$code')";
    $result = pg_query($conn, $query);

    if ($result) {
        echo "<script>alert('Country registered successfully'); window.location.href='countries.html';</script>";
    } else {
      
        die("Error registering country: " . pg_last_error($conn));
    }
}
?>