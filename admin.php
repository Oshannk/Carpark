<?php

include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Car Park</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">

  <style>
    .body {
      background-image: url('download.jfif');

      background-attachment: fixed;
      background-size: cover;
    }

    .container {
      width: 100%;
      border: 3px solid black;
      border-radius: 15px;
      margin-bottom: 20px;
    }

    div.dataTables_wrapper {
      width: auto;
      margin: 0 auto;
    }
     </style>
  <script>
    function logout() {
      Swal.fire({
        position: 'mid',
        icon: 'success',
        title: 'Logout',
        showConfirmButton: false,
        timer: 1500
      })
      var delayInMilliseconds = 2000; //1 second

      setTimeout(function() {
        window.location.href = 'logout.php';
      }, delayInMilliseconds);
    }
  </script>
  <script>
    $(document).ready(function() {
      loadstation();
    });

    function loadstation() {
      $("#station_data").load("admin_db.php");
      setTimeout(loadstation, 250);
    }
  </script>


</head>

<body class="body">



  <h3 align="center">==========CAR PARKING SLOTS==========</h3>

  <div class="table-responsive-lg">
    <div id="station_data"></div>
  </div>
  <br />
  <br />
  <br />
  <br />

  <div class="row">
    <div class="col">
      <h3 align="center">==========USER DETAILS==========</h3>
      <div class="table-responsive"> 
        <div class="container">
          <table id="tbid" class="table table-striped" style=" margin:auto">

            <thead>
              <tr style="background-color: #A9A9A9;">
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Vehicle Number</th>
                <th scope="col">Password</th>

              </tr>
            </thead>

            <?php
            include('user_db.php');
            echo '<tbody>';

            for ($i = 0; $i < $row_numbers; $i++) {

              echo '<tr>';
              echo '<th scope="row">' . $i . '</th>';
              echo '<td>' . $a[$i] . '</td>';
              echo '<td>' . $b[$i] . '</td>';
              echo '<td>' . $c[$i] . '</td>';
              echo '<td>' . $d[$i] . '</td>';

              echo '</tr>';
            }

            ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>





    <div>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function() {
          $('#tbid').DataTable({
            scrollY: "500px",
            
          });
        });
      </script>
    </div>

  </div>

</body>

</html>