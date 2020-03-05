
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "carpark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


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

  echo '</tbody>';
  echo '</table>';
  echo '</div>';



  echo '<div align="center">';
  echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />';
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
  echo '<script src="js/alert.js"></script>';
  echo '<br />';
  echo '<br />';
  echo '<br />';
  echo '</head>';

  echo '<body>';

  echo '<h2>==========PARKING SLOTS==========</h2>';


  $row_1 = "free.png";
  $row_2 = "free.png";
  $row_3 = "free.png";
  $row_4 = "free.png";
  if ($a[0] == "No") {
    $row_1 = "car.png";
  }
  if ($a[1] == "No") {
    $row_2 = "car.png";
  }
  if ($a[2] == "No") {
    $row_3 = "car.png";
  }
  if ($a[3] == "No") {
    $row_4 = "car.png";
  }


  echo '<div class="container">';
  echo '<div class="row">';
  echo '<div class="column" style="background-color:#aaa; border-radius: 3%;">';
  echo '<h2>SLOT 01</h2>';
  echo '<p>=========</p>';
  echo '<a href="#" onclick="PWerror(imgslot1)"> <img id="imgslot1" value="sfsdfd" src="' . $row_1 . '" class="img-thumbnail" alt="newPic" width="100" height="32" style="border-radius: 4%"> </a>';

  echo '</div>';
  echo '<div class="column" style="background-color:#bbb; border-radius: 3%;">';
  echo '<h2>SLOT 02</h2>';
  echo '<p>=========</p>';
  echo '<img src="' . $row_2 . '" class="img-thumbnail" alt="newPic" width="100" height="32" style="border-radius: 4%"> ';
  echo '</div>';
  echo '</div>';

  echo '<div class="row">';

  echo '<div class="column" style="background-color:#ccc; border-radius: 3%;">';
  echo '<h2>SLOT 03</h2>';
  echo '<p>=========</p>';
  echo '<img src="' . $row_3 . '" class="img-thumbnail" alt="newPic" width="100" height="32" style="border-radius: 4%"> ';
  echo '</div>';

  echo '<div class="column" style="background-color:#ddd; border-radius: 3%;">';
  echo '<h2>SLOT 04</h2>';
  echo '<p>=========</p>';
  echo '<img src="' . $row_4 . '" class="img-thumbnail" alt="newPic" width="100" height="32" style="border-radius: 4%"> ';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo ' </body>';
  echo '</div>';
  echo '</div>';
} else {
  echo "0 results";
}

$conn->close();
//echo jason_enode($a);
