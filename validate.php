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
				title: 'Login Successful!!!',
				showConfirmButton: false,
				timer: 1500
			})
			var delayInMilliseconds = 2000; //1 second

			setTimeout(function() {
				window.location.href = 'index.php';
			}, delayInMilliseconds);
		}

		function admin() {
			Swal.fire({
				position: 'mid',
				icon: 'success',
				title: 'Login Successful!!!',
				showConfirmButton: false,
				timer: 1500
			})
			var delayInMilliseconds = 2000; //1 second

			setTimeout(function() {
				window.location.href = 'admin.php';
			}, delayInMilliseconds);
		}

		function PWerror() {
			Swal.fire({
				icon: 'error',
				title: 'ERROR',
				text: 'Wrong Username or Password !!!  ',

			})
			var delayInMilliseconds = 3000; //1 second

			setTimeout(function() {
				window.location.href = 'login.php';
			}, delayInMilliseconds);
		}
	</script>

</head>

<body>
	<?php
	session_start(); // Starting Session
	include("connectDB.php");
	$uname = $conn->real_escape_string($_POST['username']);
	$pw = $conn->real_escape_string($_POST['password']);

	$sql = $conn->query("SELECT username ,password FROM users WHERE username = '$uname' ");

	if ($uname == 'admin') {
		if ($sql->num_rows > 0) {
			$data = $sql->fetch_array();
			if (password_verify($pw, $data['password'])) {
				$_SESSION['login_user'] = $uname;
				echo "<script> admin();";
				echo "  </script>";
			} else {
				echo "<script> PWerror();";
				echo "  </script>";
			}
		} else {
			echo "<script> PWerror();";
			echo "  </script>";
		}
	} else {
		if ($sql->num_rows > 0) {
			$data = $sql->fetch_array();
			if (password_verify($pw, $data['password'])) {
				$_SESSION['login_user'] = $uname;
				echo "<script> successful();";
				echo "  </script>";
			} else {
				echo "<script> PWerror();";
				echo "  </script>";
			}
		} else {
			echo "<script> PWerror();";
			echo "  </script>";
		}

		mysqli_close($conn);
	}












	?>
</body>

</html>