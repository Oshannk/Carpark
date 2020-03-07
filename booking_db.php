<?php
include("connectDB.php");

$sql = "SELECT * FROM reservation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $a = array();
    $b = array();
    $c = array();
    $d = array();
    $e = array();
    $f = array();
    $g = array();
    $row_numbers = 0;
    while ($row = $result->fetch_assoc()) {
        array_push($a, $row["username"]);
        array_push($b, $row["number"]);
        array_push($c, $row["date"]);
        array_push($d, $row["phone"]);
        array_push($e, $row["s_time"]);
        array_push($f, $row["e_time"]);
        array_push($g, $row["slots"]);

        $row_numbers++;
    }
} else {
    echo "0 results";
}

$conn->close();
