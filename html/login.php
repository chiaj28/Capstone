<?php

    require "../private/loadall.php";

    $error = "";


    if(isset($_SESSION['urlAddress']) && $_SESSION['urlAddress'] != "")
        {
            header("Location: logout.php");
            die;
        }


    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['token']) && isset($_POST['token']) && $_SESSION['token'] == $_POST['token'])
    {

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

        
        if($error == "")
        {


            $array['email'] = $email;

            $query = "select * from users where email = :email";
            $stmt = $con->prepare($query);
            $check = $stmt->execute($array);

            if(!$check)
            {
                $error = "Incorrect email or password";
            }

            if($check)
            {
                $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data) > 0)
                {
                    $data = $data[0];
                    $newpass = $data->passwd;

                     if(password_verify($passwd, $newpass))
                    {
                        $passwd = $newpass;
                    }
                }

                else
                {
                    $error = "Incorrect email or password";
                }
                
            }

        }


       

        if($error == "")
        {


            $array['email'] = $email;
            $array['passwd'] = $passwd;

            $query = "select * from users where email = :email && passwd = :passwd limit 1";
            $stmt = $con->prepare($query);
            $check = $stmt->execute($array);


            if($check)
            {
                $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data) > 0)
                {
                    $data = $data[0];
                    $_SESSION['firstName'] = $data->firstName;
                    $_SESSION['urlAddress'] = $data->urlAddress;
                    $_SESSION['userID'] = $data->userID;
                    
                    header("Location: index.php");
                    die;
                }

                else 
                {
                    $error = "Incorrect email or password";
                }
                
            }

            
        }


    }

    $_SESSION['token'] = randomString(60);

?>





<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Games</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html">
                  <img src="images/sky.jpg" alt="logo" width="20%" height="20%"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="table.php">Table</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="games.php">Games</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="mygames.php">My Games</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="maps.php">Community Maps</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <h1 class="call_text">Call Us : +01 1234567890</h1>
                  </form>
                  <div class="search_icon">
                     <ul>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                        <li><a href="login.php">LOGIN<?php 

                                          if(isset($_SESSION['firstName']) && $_SESSION['firstName'] != "") {
                                            echo "Logout";
                                          }
                                          else {
                                            echo "Login/Sign-up";
                                          }
                  
                                          ?></a></li>
            </ul>
        </nav>

        <?php

		if(isset($_SESSION['urlAddress']) && $_SESSION['urlAddress'] != '')
		    {

		      $firstName = $_SESSION['firstName'];
		      echo "Hi ";
		      echo $firstName;
		      echo "!";

		    }
		?>

           
      <!-- header section end -->

    
    	<div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" method = "POST">  
            <div style="text-align: center;"><?php 
                if(isset($error) && $error != "")
                {
                    echo $error;
                }
            ?></div>
            <p>  
                <label> Email </label>  
                <input type = "email" id ="user" name  = "email" />  
            </p>  
            <p>  
                <label> Password </label>  
                <input type = "password" id ="pass" name  = "passwd" />  
            </p>  
            <p>     
                <input type =  "hidden" name = "token" value = "<?=$_SESSION['token']?>" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
       
       <p>Don't have an account? <a href="signup.php">Sign-up here</a></p>
    

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