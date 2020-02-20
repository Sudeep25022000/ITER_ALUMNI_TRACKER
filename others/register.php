 <?php include('server.php') ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <!-- <link rel="stylesheet" type="text/css" href="./assets/css/style.css">-->
	<link rel="stylesheet" type="text/css" href="../assets/css/homepage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
		body{
			background-image: url(../assets/images/imghome9.jpg);
	    background-repeat: no-repeat;
	    height:100vh;
	    width:100%;
	    background-size:cover;
	    background-attachment:fixed;

		}

    .form-group {
  margin: 10px 0px 10px 0px;
}
.form-group input {
  height: 50  px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
    .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
		
		.me{
			background-color: black;
			background-attachment: relative;

			width:600px;
			height: 875px;
			margin-top:80px;

			
			padding: 50px;
			opacity: 0.7; 
			border-radius: 10px;
		}
		
	</style> 
</head>
<body >
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">

        <a href="https://www.soa.ac.in/iter" target="_blank" class="w3-hover-text-green"><img src="../assets/images/imgsidebar2.jpg" style="width:100%"></a>
         <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>

        <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-sign-in w3-xxlarge"></i>
            <p>SIGN IN</p>
        </a>

       <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-pencil-square w3-xxlarge"></i>
            <p>REGISTER</p>
        </a>

       

        <a href="https://github.com/Sudeep25022000/Alumini-System-Hackerwar2020-" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-code w3-xxlarge"></i>
            <p>GEEKCODE</p>
        </a>
    </nav>
    </div>
  <div class="w3-white" >
  <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-light-grey" id="home">

            <h3 class="w3-jumbo w3-blue ">Siksha 'O' Anusandhan<br>
                <h4 class="w3-text-black w3-light-grey ">(Deemed to be University)</h4>
            </h3>
            <p class="w3-text-green w3-arial"><b><h3 style="color:green">ITER Alumni Tracker<br>Institute of Technical Education and Research</h3> </b></p>
	  </header>
  </div>
</div>

    <div class="upperbackground">
     <center>
    <div class="me" >
    	<label style="color:white;font-size: 30px;">Register Here....</label>
    <form  method="POST" action="register.php">
    	 <?php include('errors.php'); ?>
  <div class="form-group">
    <label style="color:white;font-size:25px;">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $name; ?>" >
   
  </div>
  <div class="form-group">
    <label  style="color:white;font-size:25px;">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email"  value="<?php echo $email; ?>" >
   
  </div>
  <div class="form-group">
    <label  style="color:white;font-size:25px;">Registration Number</label>
    <input type="text" class="form-control" name="regno" placeholder="Enter University Registration Number" value="<?php echo $regno; ?>" >
  </div>
  
 
   <div class="form-group">
    <label  style="color:white;font-size:25px;">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $username; ?>" >
  </div>
   <div class="form-group">
    <label  style="color:white;font-size:25px;">Password</label>
    <input type="password" class="form-control" name="password_1" placeholder="Enter Password" >
  </div>
   <div class="form-group">
    <label  style="color:white;font-size:25px;">Confirm Password</label>
    <input type="password" class="form-control" name="password_2" placeholder="Confirm Password">
  </div>
  <input type="submit" class="btn btn-primary"   name="reg_user" value="Submit" onclick="myfunction()">
  <p style="color:white;">
      Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
    		
</div>

</center>

    </div>


</body>
</html>