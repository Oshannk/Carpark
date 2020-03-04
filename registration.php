<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Registration</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font-->
    <!--<link rel="stylesheet" type="text/css" href="css/nunito-font.css"> -->
    <!-- Main Style Css -->
    <!-- <link rel="stylesheet" href="css/style.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/main.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <script src="sweetalert2.min.js"></script>



    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--===============================================================================================-->



</head>


<body>

    <div class="limiter">
        <div class="wrapper animated bounceInLeft">
            <div class="container-login100">

                <div class="wrap-login100">
                    <form id="contactForm" class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="Backend.php" method="post">
                        <span class="login100-form-title">
							Registration Form
						</span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                            <input class="input100" type="text" name="username" id="username" placeholder="YourName" requried="requried">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter YourEmail">
                            <input class="input100" type="text" name="email" id="email" placeholder="YourEmail">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Vehicle Number">
                            <input class="input100" type="text" name="number" id="number" placeholder="Vehicle Number">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Please enter password">
                            <input class="input100" type="password" name="password" id="password" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
                        <br />


                        <div class="wrap-input100 validate-input" data-validate="Please enter Confirm Password">
                            <input class="input100" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                            <span class="focus-input100"></span>
                        </div>

                        <br />
                        <br />

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
								Register
							</button>
                        </div>

                        <div class="flex-col-c p-t-170 p-b-40">
                            <span class="txt1 p-b-9">
								Do you have an account?
							</span>

                            <a href="login.php" class="txt3">
								Sign in now
							</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->

    <script src="js/main.js"></script>
    
</body>

</html>