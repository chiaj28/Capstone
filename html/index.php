<?php

    require "../private/loadall.php";

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
      <title>Home</title>
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
                        <a class="nav-link" href="game.php">Games</a>
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
                        <li><a href="login.php">LOGIN</a></li>
                         <li><a href="login.php"><?php 

                                          if($_SESSION['firstName'] != "") {
                                            echo "Logout";
                                          }
                                          else {
                                            echo "Login/Sign-up";
                                          }
                  
                                          ?></a></li>
            </ul>
        </nav>


        <?php if($_SESSION['urlAddress'] != ''): ?>
          <div style="text-align: center;">Hi <?=htmlspecialchars($_SESSION['firstName'])?></div>
        <?php endif; ?>

                 
           

      <!-- header section end -->




<!-- banner section start -->
<div class="banner_section layout_padding">
   <div class="container">
      <div id="costum_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <h1 class="furniture_text">GAMING TABLE</h1>
               <p class="there_text">Take your first step towards a lifetime of gaming on a piece designed to perfectly accommodate every member of your party.</p>
               <div class="contact_bt_main">
                  <div class="contact_bt"><a href="table.html">Shop Now</a></div>
               </div>
            </div>
            <div class="carousel-item">
               <h1 class="furniture_text">GAMING TABLE</h1>
               <p class="there_text">Take your first step towards a lifetime of gaming on a piece designed to perfectly accommodate every member of your party.</p>
               <div class="contact_bt_main">
                  <div class="contact_bt"><a href="table.html">Shop Now</a></div>
               </div>
            </div>
            <div class="carousel-item">
               <h1 class="furniture_text">GAMING TABLE</h1>
               <p class="there_text">Take your first step towards a lifetime of gaming on a piece designed to perfectly accommodate every member of your party.</p>
               <div class="contact_bt_main">
                  <div class="contact_bt"><a href="table.html">Shop Now</a></div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
         <i class=""><img src="images/left-arrow.png"></i>
         </a>
         <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
         <i class=""><img src="images/right-arrow.png"></i>
         </a>
      </div>
   </div>
</div>
<!-- banner section end -->




     <!-- services section start -->
     <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Our services</h1>
         <p class="many_taital">To play a very basic game with our gaming table what would need?
         One of the great things about the games is that you only really need a copy of the rules, some pencils and paper, a set of dice, and your imagination.</p>
         <div class="services_section2 layout_padding">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="icon_1"><img src="images/book.png"></div>
                  <h2 class="furnitures_text">Rule Book</h2>
                  <div class="read_bt_main">
                     <div class="read_bt"><a href="#">Buy Now</a></div>
                     <div class="read_bt"><a href="https://dnd.wizards.com/what-is-dnd/basic-rules">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="icon_1"><img src="images/dice.png"></div>
                  <h2 class="furnitures_text">One set of Polyhedral Dice</h2>
                  <div class="read_bt_main">
                     <div class="read_bt"><a href="https://www.amazon.co.uk/QMAY-Polyhedral-Double-Colors-Playing-Dungeon/dp/B07JH7VD16/ref=sr_1_3_sspa?c=ts&keywords=Polyhedral+%26+RPG+Dice&qid=1667869657&s=kids&sr=1-3-spons&ts_id=14520257031&psc=1&smid=A1N3O5DS7NIQON">Buy Now</a></div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="icon_1"><img src="images/pen3.png" width="90%" height="100%" ></div>
                  <h2 class="furnitures_text">A Pencil</h2>
                  <div class="read_bt_main">
                     <div class="read_bt"><a href="#">Buy Now</a></div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="icon_1"><img src="images/char.png"width="69%" height="70%"></div>
                  <h2 class="furnitures_text">Character Sheet</h2>
                  <div class="read_bt_main">
                     <div class="read_bt"><a href="#">Buy Now</a></div>
                     <div class="read_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="about_text">About Us</h1>
                  <p class="lorem_text">We make custom gaming tables, gaming tables are made of a wooden base with an LCD attached on top of it and it has some periperals along with it. The table can be used to play various board games with least sppace required. Users can download community maps provided on the website and load up on the table and start playing. The table can be customized according to one's requirements. All orders take 8 weeks to ship. For further info reach us out on aboutus/contact page.</p>
                  <div class="read_bt1"><a href="index.html">Read More</a></div>
               </div>
               <div class="col-md-6">
                  <div class="image_1"><img src="images/table.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- game section start -->
  



      <h1 class="our_text">games</h1>
      <p class="ipsum_text">WOWW I LOVE GAME BATCHESTING SO HARD</p>
      
      <div class="screen">
         <div class="Bol"></div>
         </div>
           
         <div class="img" style="margin-inline-start:10%;">
           <a target="_blank" href=""><img src="images/chess.png" alt="chess" width="100%" height="100%"/></a>
          <div class="desc"> Chess </div>
         </div>
         <div class="img">
           <a target="_blank" href=""><img src="images/checker.png" alt="checker" width= "235" height="100"/></a>
          <div class="desc">Checker</div>
         </div>
         <div class="img">
           <a target="_blank" href=""><img src="images/snl.webp" alt="snl" width="100%" height="100%"/></a>
          <div class="desc">Snake and Ladders</div>
         </div>
         <div class="img">
           <a target="_blank" href=""><img src="images/ludo.png" alt="ludo" width= "200" height="100"/></a>
          <div class="desc">Ludo</div>
         </div>
                   
      
      <!-- game section end -->
      <!-- who section start -->
      <div class="who_section layout_padding">
         <div class="container">
            <h1 class="who_taital">who we are ?</h1>
            <p class="lorem_ipsum_text">We create custom gaming tables, which consist of a wooden base with an LCD attached on top, as well as some peripherals. The table can be used to play a variety of board games with minimal space required.</p>
         </div>
         <div class="get_bt_main">
            <div class="get_bt"><a href="contact.html">Get A Quote</a></div>
         </div>
      </div>
      <!-- who section end -->
      <!-- maps section start -->
      <div class="projects_section layout_padding">
         <div class="container">
            <h1 class="our_text">Community Maps</h1>
            <p class="ipsum_text">Battle Maps, World Maps, Cities, Dungeons </p>
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="projects_section2">
                        <div class="container_main2">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/Antikes Atavus Heliador.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Antikes Atavus Heliador</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/Clan Adikima.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Clan Adikima</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/hog vakt.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Hog Vakt</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="projects_section2">
                        <div class="container_main1">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/Clan Ilkozun.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Clan Ilkozun</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/avatar.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">ATLA Inspired</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/Iphthoxia.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Iphthoxia</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="projects_section2">
                        <div class="container_main1">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/hog vakt.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Hog Vakt</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/Clan Ilkozun.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Clan Ilkozun</h1>
                                    <div class="middle">
                                       <div class="text"><a href="maps.html">VIEW MORE</a></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="container_main1">
                                    <img src="images/Stronghold.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h1 class="modern_text">Stronghold</h1>
                                
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- maps section end -->
     
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_text">CONTACT US</h1>
                  <div class="mail_sectin">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                     <input type="text" class="email-bt" placeholder="Phone Number" name="Name">
                     <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                     <div class="send_bt"><a href="#">SEND</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="image_9"><img src="images/p.png" ></div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->


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
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>