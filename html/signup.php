<?php

    require "../private/loadall.php";

    $error = "";


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $urlAddress = randomString(60);

        $firstName = trim($_POST['firstName']);
         if(!preg_match("/^[a-zA-Z]+$/", $firstName))
        {
            $error = "Only letters are allowed";
        }
        
        $firstName = esc($firstName);

        $lastName = trim($_POST['lastName']);
         if(!preg_match("/^[a-zA-Z]+$/", $lastName))
        {
            $error = "Only letters are allowed";
        }

        $lastName = esc($lastName);

        $email = esc($_POST['email']);
        if(!preg_match("/^[\w\-]+@[\w\-]+.[\w\-]+$/", $email) AND !preg_match("/^[\w\-]+.[\w\-]+@[\w\-]+.[\w\-]+.[\w\-]+$/", $email))
        {
            $error = "Please enter a valid email address";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error = "Please enter a valid email address";
        }

        $passwd = esc($_POST['passwd']);

        $uppercase = preg_match('@[A-Z]@', $passwd);
        $lowercase = preg_match('@[a-z]@', $passwd);
        $number = preg_match('@[0-9]@', $passwd);
        $specialchar = preg_match('@[^\w]@', $passwd);

        if(!$uppercase || !$lowercase || !$number || !$specialchar || strlen($passwd) < 7)
        {
            $error = "Password should be at least 8 characters long and have at least one uppercase letter, one lowercase letter, one number, and a special character";
        }

        $hash = password_hash($passwd, PASSWORD_DEFAULT);

        $date = date("Y-m-d H:i:s");

        $array = false;
        $array['email'] = $email;

        $query = "select * from users where email = :email";
        $stmt = $con->prepare($query);
        $check = $stmt->execute($array);

        if($check)
        {
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            if(is_array($data) && count($data) > 0)
            {
                $error = "Someone already has an account with that email address";
            }
        }

        if($error == "")
        {
            $array = false;
            $array['urlAddress'] = $urlAddress;
            $array['firstName'] = $firstName;
            $array['lastName'] = $lastName;
            $array['email'] = $email;
            $array['passwd'] = $hash;
            $array['date'] = $date;

            $query = "insert into users (urlAddress,firstName,lastName,email,passwd,date) values (:urlAddress,:firstName,:lastName,:email,:passwd,:date)";
            $stmt = $con->prepare($query);
            $stmt->execute($array);

            header("Location: login.php");
            die;
        }

        

    }

?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <title>Sign up</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">    
   </head>


<body style="font-family: verdana">

    <style type="text/css">
        form{
            margin: auto;
            border: solid thin #73C2FB;
            padding: 6px;
            max-width: 700px;
        }

        #title{
            background-color: #73C2FB;
            padding: 1em;
            text-align: center;
        }

        #textbox{
            border: solid thin #aaa;
            margin: 4px;
            width: 98%;
            margin-top: 6px;
        }

    </style>

    <form method="post">
        <div><?php 
            if(isset($error) && $error != "")
            {
                echo $error;
            }
        ?></div>
        <div id="title">Sign-up</div><br>
        <input id="textbox" type="text" name="firstName" required><br><br>
        <input id="textbox" type="text" name="lastName" required><br><br>
        <input id="textbox" type="email" name="email" required><br><br>
        <input id="textbox" type="password" name="passwd" required><br><br>
        <input type="submit" value="Sign-up"><br>
    </form>

    <p>Already have an account?</p> <a href="login.php">Login here</a>


     <!-- footer section start -->
     <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <h1 class="customer_text">GROUP MEMBERS</h1>
               <p class="footer_lorem_text1">Scott Heinitz<br>
                  Josiah Guigue <br>
                  Kanav Gandhi<br>
                  Chidinma Ehirim
               </p>
            </div>
         
            <div class="col-lg-3 col-sm-6">
               <h1 class="customer_text">ABOUT US</h1>
               <p class="footer_lorem_text1">Gaming Table<br>
                  Community Maps<br>
                  Games<br>
                  Terms & Conditions
               </p>
            </div>

            <div class="col-lg-3 col-sm-6">
               <h1 class="customer_text">CONTACT US</h1>
               <p class="footer_lorem_text1">Jobs<br>
                  Support<br>
                  Contact Us<br>
                  Sponsorship
               </p>
            </div>


            <div class="col-lg-3 col-sm-6">
               <h1 class="customer_text">SOCIALS</h1>
               <p class="footer_lorem_text1">Facebook<br>
                  Instagram<br>
                  Linkedin<br>
                  Twitter<br>

               </p>
            </div>
         </div>
         <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="basic-addon2">
            <div class="input-group-append">
               <span class="input-group-text" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
         </div>
      </div>
   </div>
   <!--  footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
   <div class="container">
      <div class="social_icon">
         <ul>
            <li><a href="#"><img src="images/fb-icon.png"></a></li>
            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
         </ul>
      </div>
      <p class="copyright_text">2022 All Rights Reserved. Design by <a href="https://html.design">Team Sky Ltd</a></p>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript --> 
   <script src="js/owl.carousel.js"></script>
   <script src="js/fs.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>