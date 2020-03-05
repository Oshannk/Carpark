<?php

include('session.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Car Park</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="sweetalert2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script>
    $(document).ready(function() {
      loadstation();
    });

    function loadstation() {
      $("#station_data").load("solt_db.php");
      setTimeout(loadstation, 1000);
    }
  </script>


  <link rel="stylesheet" href="sweetalert2.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<script>
  function logout() {
    Swal.fire({
      position: 'mid',
      icon: 'success',
      title: 'Logout!!!',
      showConfirmButton: false,
      timer: 1500
    })
    var delayInMilliseconds = 2000; //1 second

    setTimeout(function() {
      window.location.href = 'logout.php';
    }, delayInMilliseconds);
  }
</script>

<body class="body">

  <h3 align="center">==========CAR PARKING SLOTS==========</h3>

  <div class="table-responsive-lg">
      
      <div id="station_data"></div>
    
  </div>
  <style>
    * {}

    /* Create four equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 10px;
      height: 300px;
      /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .container {
      width: 100%;
      border: 3px solid black;
	  border-radius: 15px;
      margin-bottom: 25px;
    }

    .body {
      background-image: url('download.jfif');

      background-attachment: fixed;
      background-size: cover;
    }

     </style>


</body>

</html>