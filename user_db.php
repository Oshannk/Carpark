<?php
include("connectDB.php");

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $a = array();
        $b = array();
        $c = array();
        $d= array();
        $row_numbers = 0;
        while($row = $result->fetch_assoc()) {
             array_push($a,$row["username"]);
              array_push($b,$row["email"]);
               array_push($c,$row["number"]);
                array_push($d,$row["password"]);

             $row_numbers ++;

        }

    } else {
        echo "0 results";
    }

$conn->close();
?>