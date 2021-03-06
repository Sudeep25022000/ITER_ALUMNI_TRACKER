<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>OTP Verifiation</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:black;opacity: 1;">
  <header class="w3-container w3-padding-32 w3-center w3-light-grey" id="home">

            <h3 class="w3-jumbo w3-blue ">Siksha 'O' Anusandhan<br>
                <h4 class="w3-text-black w3-light-grey ">(Deemed to be University)</h4>
            </h3>
            <p class="w3-text-green w3-arial"><b><h3 style="color:green">Welcome to Alumni Portal of ITER | Institute of Technical Education and Research</h3> </b></p>
          </header>
  <div class="header" style="opacity:0.8">
  	<h2 style="font-size:35px;"><b>OTP Verification</b></h2>
  </div>
	 
  <form method="post" action="otpverification.php" style="color: grey; padding: 20px;">
  	 <?php include('errors.php'); ?>
  	<div class="input-group">
  		<label style="color: grey; font-size: 25px;"><b>OTP</b></label>
  		<input type="text" name="token" placeholder="Enter OTP" >
  	</div>
  	
  	<div class="input-group">
  		<button type="submit"  style="font-size: 20px;width:100px;" class="btn" name="otp_user">Verify</button>
  	</div>
  	
  </form>
</body>
</html>
<script src="js/aos.js"></script>
<script>
  AOS.init({
    easing: 'ease-in-out-sine'
  });
</script>