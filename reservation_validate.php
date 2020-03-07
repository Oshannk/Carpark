<html>

<head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="sweetalert2.min.js"></script>
	<link rel="stylesheet" href="sweetalert2.min.css">
	<script>
    
		function successful() {
			Swal.fire({
				position: 'mid',
				icon: 'success',
				title: 'Booking Successful!!!',
				showConfirmButton: false,
				timer: 1500
			})
			var delayInMilliseconds = 2000; //1 second

			setTimeout(function() {
				window.location.href = 'index.php';
			}, delayInMilliseconds);
		}

		function Error(message) {
			Swal.fire({
				icon: 'error',
				title: 'ERROR',
				text: message,

			})
			var delayInMilliseconds = 3000; //1 second

			setTimeout(function() {
				window.location.href = 'reservation.php';
			}, delayInMilliseconds);
		}
	</script>

</head>

<body>
	<?php

	$posted = false;
	if ($_POST) {
		$posted = true;
		include("connectDB.php");
		if (!empty($_POST["phone"])) {
 
            $phone=$_POST['phone'];

			if (!preg_match('/^(?:0|94|\+94)?(?:(?P<area>11|21|23|24|25|26|27|31|32|33|34|35|36|37|38|41|45|47|51|52|54|55|57|63|65|66|67|81|912)(?P<land_carrier>0|2|3|4|5|7|9)|7(?P<mobile_carrier>0|1|2|5|6|7|8)\d)\d{6}$/',$phone))
			{
			 echo "<script> Error('Invalid Telephone Number!!!');";
			 echo "  </script>";
            } 
            
            else {
                $sql = "INSERT INTO reservation VALUES ('" . $_POST['username'] . "','" . $_POST['number'] . "','" . $_POST['date'] . "','" . $_POST['phone'] . "','" . $_POST['start_time'] . "','" . $_POST['end_time'] . "','" . $_POST['slots'] . "')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script> successful();";
                    echo "  </script>";
                } else {
                    echo "<script> Error('Record Insertion Failed!!!');";
			        echo "  </script>";
                    #echo "$_POST['username'] ,$_POST['number'] ,$_POST['date123'] ,$_POST['phone'],$_POST['start_time'] , $_POST['end_time'],$_POST['slots']";
                }
            }
			
		} else {
			echo "<script> Error('Booking Failed!!!');";
			echo "  </script>";
		}


		$conn->close();
	}
	?>

</body>

</html>