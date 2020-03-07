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
				title: 'Registered',
				showConfirmButton: false,
				timer: 1500
			})
			var delayInMilliseconds = 2000; //1 second

			setTimeout(function() {
				window.location.href = 'login.php';
			}, delayInMilliseconds);
		}

		function PWerror() {
			Swal.fire({
				icon: 'error',
				title: 'ERROR',
				text: 'Password Does not matched!!!',

			})
			var delayInMilliseconds = 4000; //1 second

			setTimeout(function() {
				window.location.href = 'registration.php';
			}, delayInMilliseconds);
		}
		
		function Verror(vnumber) {
			Swal.fire({
				icon: 'error',
				title: 'ERROR',
				text: vnumber,

			})
			var delayInMilliseconds = 4000; //1 second

			setTimeout(function() {
				window.location.href = 'registration.php';
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
		if ($_POST["password"] === $_POST["cpassword"]) {
			$_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
			//$_POST["cpassword"] = password_hash($_POST["cpassword"], PASSWORD_DEFAULT);

			$number=$_POST['number'];
			$email=$_POST['email'];

			if (!preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/',$email))
			{
			 echo "<script> Verror('Invalid Email!!!');";
			 echo "  </script>";
			}
			else if (!preg_match('/^([a-zA-Z]{1,3}|((?!0*-)[0-9]{1,3}))-[0-9]{4}(?<!0{4})/',$number))
			{
			 echo "<script> Verror('Invalid Vehicale Number!!!');";
			 echo "  </script>";
			}
			else
			{
				$sql = "INSERT INTO users VALUES ('" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['number'] . "','" . $_POST['password'] . "')";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					echo "<script> successful();";
					echo "  </script>";
				} else {
					echo "Record Insertion failed";
				}
			}
			


			
		} else {
			echo "<script> PWerror();";
			echo "  </script>";
		}


		$conn->close();
	}
	?>

</body>

</html>