<?php
include("connectDB.php");
$sql = "SELECT Availability FROM slots";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $a = array();
    while ($row = $result->fetch_assoc()) {
        array_push($a, $row["Availability"]);
    }
    $row1 = "color: #006400";
    $row2 = "color: #006400";
    $row3 = "color: #006400";
    $row4 = "color: #006400";
    if ($a[0] == "No") {
        $row1 = "color: #FF0000";
    }
    if ($a[1] == "No") {
        $row2 = "color: #FF0000";
    }
    if ($a[2] == "No") {
        $row3 = "color: #FF0000";
    }
    if ($a[3] == "No") {
        $row4 = "color: #FF0000";
    }

    echo '<div class="container">';
    echo '<table class="table " style="width:80%; margin:auto">';
    echo '<thead>';
    echo '<tr style="background-color: #A9A9A9;">';
    echo '<th scope="col">#</th>';
    echo '<th scope="col">Slot No</th>';
    echo '<th scope="col">Availability</th>';
    echo '<button type="button" class="btn float-right" onclick="logout()">';
    echo '<a class="btn btn-info btn-lg">';
    echo '<span class="glyphicon glyphicon-log-out"></span> Log out';
    echo '</a>';

    echo '</button>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<th scope="row">1</th>';
    echo '<td >Slot No1</td>';
    echo '<td style= " ' . $row1 . ' ; font-weight:bold ; ">' . $a[0] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th scope="row">2</th>';
    echo '<td>Slot No2</td>';
    echo '<td style="' . $row2 . ' ; font-weight:bold ;">' . $a[1] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th scope="row">3</th>';
    echo '<td>Slot No3</td>';
    echo '<td style="' . $row3 . ' ; font-weight:bold ;">' . $a[2] . '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th scope="row">4</th>';
    echo '<td>Slot No4</td>';
    echo '<td style="' . $row4 . ' ; font-weight:bold ;">' . $a[3] . '</td>';
    echo '</tr>';



    echo ' </tbody>';
    echo ' </table>';
    echo '</div>';
    echo ' </div>';
    

} else {
    echo "0 results";
}

//$conn->close();
//echo jason_enode($a);
