<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Remember to Link All relevant CSS files here -->

    <link href="../../CSS/Main.css" rel="stylesheet" />
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>
<body class="Contact_Us">
        <!-- Comment -->
    
    <!-- Background -->
    <div class="Banner-Contacts"></div>
    <!-- Header -->
    <header>
        <h1>Pearls of the<br>Desert</h1><!-- Website name -->
        <div><!-- Seperate div to space-between the elements -->
            <button>Account</button> <!-- links to the account page -->
            <ul class="container" id="nav"> <!-- Navigation bar -->
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a> <!-- Nav bar icon -->
                
                <div class="inner-container"> <!-- Hidden elements -->
                    <li><a href="Create_An_Account.html">My Account</a></li>
                    <li><a href="The_Emirates.html">The Emirates</a></li>
                    <li><a href="../Gallery/Gallery.html">Gallery</a></li>
                    <li><a href="About_Us.html">About Us</a></li>
                    <li><a href="Contact Us.html">Contact Us</a></li>
                </div>
            </ul>
        </div>
    </header>
    <!-- Main Content -->
        <!-- Flex Row -->
        <div class="Main_Container">
            

            <!-- Flex Column-->
            <div class="Flex_Container Sub_Container Sub_Container1">
                <h1> Reach Out to Us </h1>
            
                <div class="Flex_Container Sub_Button Button_Whole">
                    <button class="btn btn1">
                        <img src="../../Resources/Images/Icons/mail.png" alt="E-mail Icon">
                        <b>arabianpearls@Gmail.com </b>
                    </button>
                </div>

                <div class="Flex_Container Sub_Button">
                        <button class="btn btn2">
                            <img src="../../Resources/Images/Icons/telephone.png" alt="Phone Icon">
                            <b>+971 12 3456 789 </b>
                        </button>
                </div>

                <div class="Flex_Container Invisible">
                    <button class=" btn3">
                        <img src="../../Resources/Images/Icons/placeholder.png" alt="Map Icon">
                        <a href="#"><b>Bath Spa University, RAK, UAE</b></a>                        
                    </button>

                </div>
            </div>

            <div class="Flex_Container  Sub_Container Input_Container">
                <h4>Got a Question? Send us a message</h4>
                <form>
                    <input type="text" name="First_Name" placeholder=" First Name ">
                    <input type="text" name="Last_Name" placeholder=" Last Name ">
                    <input type="text" name="E-mail" placeholder=" E-mail ">
                    <textarea placeholder="Your Message Here"></textarea>
                    <!--<input class="description" type="text" name="Description" placeholder=" Your Message Here ">-->
                </form>
                
            </div>
    </div>
    <!-- Footer & Navigation Bar -->
    <footer>
        <nav>
            <ul class="nav-link">
                <li><a href="Contact Us.html">Contact Us</a></li>
                <li><a href="About_Us.html">About Us</a></li>
                <li><a href="#">Promotions</a></li>
                <li><a href="../Gallery/Gallery.html">Gallery</a></li>
            </ul>
        </nav>
        <p class="copy-right"> &#169; Copyright All Rights Reserved 2021 </p>
    </footer>

    <!-- Javascript -->
    <script src="../../JavaScript/Javascript.js"></script> <!-- Header navigation bar -->
</body>
</html>