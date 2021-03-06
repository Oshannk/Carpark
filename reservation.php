<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Reservation</title>
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
    <script>
        function load(){
            n =  new Date();
            y = n.getFullYear();
            m = n.getMonth() + 1;
            d = n.getDate();
            document.getElementById("date123").value = y + "-" + m + "-" + d;
        }

        function timeSelect(){

            var sel = document.getElementById('inputState1');
            var sel2 = document.getElementById('inputState2');
            var op = sel.getElementsByTagName("option");
            var op2 = sel2.getElementsByTagName("option");

            for (var i = 0; i < op.length; i++) 
            {
                op[i].disabled = false;
                op2[i].disabled = false;
            }

            sel2.selectedIndex = sel.selectedIndex;
            
            for (var i = 0; i < sel.selectedIndex; i++) 
            {
                op2[i].disabled = true;
            }
        }
        
    </script>


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

    <?php

include('session.php');

?>

</head>


<body onload="load()">

    <div class="limiter">
        <div class="wrapper animated bounceInLeft">
            <div class="container-login100">

                <div class="wrap-login100">
                    <form id="contactForm" class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="reservation_validate.php" method="post">
                        <span class="login100-form-title">
                           Reservation Form
						</span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                           <?php echo "<input class='input100' type='text' name='username' id='username' value='".$_SESSION['login_user']."' placeholder='YourName' readonly>"; ?>
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input m-b-16" style="z-index:1" data-validate="Please enter Vehicle Number">
                            <?php echo "<input class='input100' type='text' name='number' id='number' value='".$_SESSION['v_number']."' placeholder='Vehicle Number' readonly>"; ?> 
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Date">
                            <input class="input100" type="text" name="date" id="date123" placeholder="Date" readonly>
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Telephone Number">
                            <input class="input100" type="number" name="phone" id="phone" placeholder="Telephone">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="container">
                        <div class="row" >
                        
                        <div class="form-group col-md-6">
                        <label for="inputState" ><Strong>Start Time</Strong></label>
                        <select id="inputState1" onchange = "timeSelect()" class="form-control" name="start_time">
                        <option value="09">09.00 AM</option>
                        <option value="10">10.00 AM</option>
                        <option value="11">11.00 AM</option>
                        <option value="12">12.00 PM</option>
                        <option value="13">13.00 PM</option>
                        <option value="14">14.00 PM</option>
                        <option value="15">15.00 PM</option>
                        <option value="16">16.00 PM</option>
                        <option value="17">17.00 PM</option>
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputState" ><Strong>End Time</Strong></label>
                        <select id="inputState2" class="form-control" name="end_time">
                        <option value="10">10.00 AM</option>
                        <option value="11">11.00 AM</option>
                        <option value="12">12.00 PM</option>
                        <option value="13">13.00 PM</option>
                        <option value="14">14.00 PM</option>
                        <option value="15">15.00 PM</option>
                        <option value="16">16.00 PM</option>
                        <option value="17">17.00 PM</option>
                        <option value="18">18.00 PM</option>
                        </select>
                        </div>
                        </div>
                        </div>



                        <div class="form-group col-md-12">
                        <label for="inputState" ><Strong>Select Slot Number</Strong></label>
                        <select id="inputState" class="form-control" name="slots">
                        <?php 
                            include("connectDB.php");
                            $sql = "select Name from slots where Availability = 'Yes' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                            // output data of each row
                            $a = array();
                            while ($row = $result->fetch_assoc()) {
                                                       
                               echo "<option selected>".$row['Name']."</option>";
                            }
                        }
                        ?>
                        </select>
                        </div>
                        <br />
                          <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
								Reservation
							</button>
                        </div>
                        <div class="flex-col-c p-t-170 p-b-40">
                            <span class="txt1 p-b-9">
								Do you need to go to ParkingSlot?
							</span>

                            <a href="index.php" class="txt3">
								Dashboard
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