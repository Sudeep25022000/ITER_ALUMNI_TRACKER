<!DOCTYPE html>
<html>
<head>
	<title>Alumni Tracker</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/homepage.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<body class="w3-black">

    <!-- ICON Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">

        <a href="https://www.soa.ac.in/iter" target="_blank" class="w3-hover-text-green"><img src="./assets/images/imgsidebar2.jpg" style="width:100%"></a>
         <a href="homepage.html" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>

        <a href="./others/login.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-sign-in w3-xxlarge"></i>
            <p>SIGN IN</p>
        </a>

       <a href="./others/register.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-pencil-square w3-xxlarge"></i>
            <p>REGISTER</p>
        </a>

       

        <a href="https://github.com/Sudeep25022000/Alumini-System-Hackerwar2020-" target="_blank" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-code w3-xxlarge"></i>
            <p>GEEKCODE</p>
        </a>
    </nav>
    </div>
    <div class="w3-white">
	<div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-light-grey" id="home">

            <h3 class="w3-jumbo w3-blue ">Siksha 'O' Anusandhan<br>
                <h4 class="w3-text-black w3-light-grey ">(Deemed to be University)</h4>
            </h3>
            <p class="w3-text-green w3-arial"><b><h3 style="color:green">ITER Alumni Tracker<br>Institute of Technical Education and Research</h3> </b></p>

    <!--Slideshow-->
     <div class="slideshow-container">


                <div class="mySlides fade">
                    <div class="numbertext">1 / 9</div>
                    <img src="./assets/images/imghome1.jpg" style="width:100%;height:500px">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 9</div>
                    <img src="./assets/images/imghome2.jpg" style="width:100% ;height:500px">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 9</div>
                    <img src="./assets/images/imghome3.jpg" style="width:100%;height:500px">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 9</div>
                    <img src="./assets/images/imghome4.jpg" style="width:100%;height: 500px;">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">5 / 9</div>
                    <img src="./assets/images/imghome5.jpg" style="width:100% ;height:500px;">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">6 / 9</div>
                    <img src="./assets/images/imghome6.jpg" style="width:100%;height:500px;">
                    <!--<div class="text w3-center w3-text-green"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>
                 <div class="mySlides fade">
                    <div class="numbertext">7 / 9</div>
                    <img src="./assets/images/imghome7.jpg" style="width:100% ;height: 500px;">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>
                 <div class="mySlides fade">
                    <div class="numbertext">8 / 9</div>
                    <img src="./assets/images/imghome8.jpg" style="width:100% ;height: 500px;">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>
                 <div class="mySlides fade">
                    <div class="numbertext">9 / 9</div>
                    <img src="./assets/images/imghome9.jpg" style="width:100%;height: 500px;">
                    <!--<div class="text w3-center w3-text-black"><b>Institute of Technical Education and Research<br>Jagamara,Khandagiri,Bhubaneswar-30</b></div>-->
                </div>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
             <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < 9; i++) {
                        slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    for (i = 0; i < 9; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
            </script>
            
            </header>
            </div>
            </div>
             <!-- ABOUT SECTION -->
             <div class=" w3-black">
        <div class="w3-content w3-justify w3-text-blue w3-padding-64" id="about">
            <h1 class="w3-text-light-grey">About:</h1>
            <h2 class="w3-text-grey">1. Academics:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Siksha 'O' Anusandhan has nine degree-granting schools and institutes that offer undergraduate programs in engineering, medicine, pharmacy, business, nursing, biotechnology, agriculture and law; graduate programs in engineering, medicine,
                pharmacy, business, nursing, biotechnology, science, humanities, environment, nano technology, materials science, agriculture and law; and doctoral degrees in the above areas.
            </p>
            <h2 class="w3-text-grey">2. History:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>It was founded as Institute of Technical Education and Research (ITER) in 1997 at Bhubaneswar and it received AICTE approval for B.Tech.The University Grants Commission (UGC), in 2007, declared Siksha 'O' Anusandhan as a Deemed to be University
                by the U/S 3 of the UGC Act, 1956. In 2007, the Institute of Technical Education and Research (ITER), Bhubaneswar became a constituent institute of Siksha O Anusandhan University.
            </p>
            <h2 class="w3-text-grey">3. Accreditation:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>SOA has been accredited (2nd Cycle) by the National Assessment and Accreditation Council (NAAC) with a score of 3.35 and an 'A+' grade. Three Engineering Programs (Electrical Engineering, Mechanical Engineering & Electronics and Communication
                Engineering) have been accredited by Accreditation Board of Engineering and Technology (ABET), USA.
            </p>
            <h2 class="w3-text-grey">4. Ranking:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>The National Institutional Ranking Framework (NIRF) ranked Siksha 'O' Anusandhan 41 overall in India, 24 among universities and 21 in the medical ranking in 2019.
            </p>
            <h2 class="w3-text-grey">5. Science and Research:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Currently more than 600 research scholars are pursuing their Ph.D.s and 247 of them have been awarded doctorates. Currently, Siksha 'O' Anusandhan has thirteen research centres for basic and fundamental research.
            </p>
            <h2 class="w3-text-grey">6. Our vision:</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>ITER's Alumni System which is an web based online platform acts as an interactive medium between the graduates and our institution to track them for future endeavours. At the same time it helps both the alumni and institution to communicate
                among each other and along with the old batch mates.
            </p>
            </div >
            <!-- SOA PHOTO SECTION -->
             
             <div class="w3-yellow"> 
            <div class="w3-padding-64 w3-content w3-text-grey" id="photos">
                <h2 class="w3-centre w3-text-black">Photos: </h2>
                <hr style="width:200px" class="w3-opacity">

                <!-- PHOTOS INSERT 1st COLUMN -->
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="./assets/images/imgpic4.jpg" style="width:100%">
                        <img src="./assets/images/imgpic1.jpg" style="width:100%">
                        <img src="./assets/images/imgpic6.jpg" style="width:100%">
                    </div>
                    <!-- PHOTOS INSERT 2nd COLUMN -->
                    <div class="w3-half">
                        <img src="./assets/images/imgpic2.jpg" style="width:100%">
                        <img src="./assets/images/imgpic3.jpg" style="width:100%">
                        <img src="./assets/images/imgpic5.jpg" style="width:100%">
                        <img src="./assets/images/imgpic7.jpg" style="width:100%">
                    </div>

                </div>
                
            </div>
            </div>
            <!-- END PHOTOS -->
              <!-- CONTACT DETAILS -->
              <center>
            <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
                <h2 class="w3-text-light-grey">Contact us:</h2>
                <hr style="width:200px" class="w3-opacity">

                <div class="w3-section">
                    <p><a href="https://www.google.com/maps/place/ITER,+Siksha+'O'+Anusandhan/@20.2499448,85.7999918,87m/data=!3m1!1e3!4m19!1m13!4m12!1m4!2m2!1d85.8583796!2d20.2893659!4e1!1m6!1m2!1s0x3a19a7a3b9692fff:0x87cd0a356bbc39ce!2sSiksha+o+anusandhan+ITER+google+maps!2m2!1d85.8002307!2d20.2498709!3m4!1s0x3a19a7a3b9692fff:0x87cd0a356bbc39ce!8m2!3d20.2498709!4d85.8002307"
                            target="_blank" class="w3-hover-text-green"><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Jagamara, Khandagiri, Bhubaneswar, Odisha-751030, India</p></a>
                        <p><a href="https://www.justdial.com/Bhubaneshwar/Institute-Of-Technical-Education-Research-Near-Khandagiri-Square-Khandagiri/0674P674STD20360_BZDET" target="_blank" class="w3-hover-text-green"><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Contact us: +91-674- 2350635, 2350791, 2350794, 2350802 Fax: +91 - 674 - 2350642</a>
                        </p>
                        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: info@soauniversity.ac.in</p>
                </div><br>

            </div>
        </center>
            <!--START FOOTER contains social media links, copyrights and GeekCode -->
            <footer class="w3-content w3-padding-100 w3-text-grey w3-large w3-center ">
                <a href="https://www.facebook.com/SikshaOAnusandhanSOA/ " target="_blank " class="w3-hover-text-green "><i class="w3-center fa fa-facebook-official w3-hover-opacity w3-xlarge "></i></a>
                <a href="https://www.instagram.com/soa_sikshaoanusandhan/?hl=en " target="_blank " class="w3-hover-text-green "><i class="fa fa-instagram w3-hover-opacity w3-xlarge w3-&ensp "></i></a>
                <!-- <i class="fa fa-snapchat w3-hover-opacity "></i>
                <i class="fa fa-pinterest-p w3-hover-opacity "></i>-->
                <a href="https://twitter.com/soasocialmedia?lang=en " target="_blank " class="w3-hover-text-green "><i class="fa fa-twitter w3-hover-opacity w3-xlarge "></i></a>
                <a href="https://in.linkedin.com/school/siksha- 'o'-anusandhan-university/ " target="_blank " class="w3-hover-text-green "><i class="fa fa-linkedin w3-hover-opacity w3-xlarge "></i></a>
                <p class="w3-center ">Copyrights &copy;2020 PseudoDevOps
                </p>
                <p class="w3-medium w3-center ">Geekcode visit us at
                    <a href="https://github.com/Sudeep25022000/Alumini-System-Hackerwar2020- " target="_blank " class="w3-hover-text-green ">PseudoDevOps</a>
                </p>

                <!-- END FOOTER -->
            </footer>


</body>
</html>