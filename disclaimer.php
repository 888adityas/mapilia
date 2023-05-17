<?php 
require_once("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
       <!-- Required meta tags -->
       <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1" />

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
       <!-- my css -->
       <link rel="stylesheet" href="style.css" />
       <!-- nav-links fonts -->
       <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
       <!-- font awsome cdn -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
       <!-- typing effect -->
       <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css" />
       <script src="typingEffect.js"></script>
       <!-- Link Swiper's CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
       <link rel="stylesheet" href="swiper.css" />

       <title>Mapilia - Travel Vacations ...!!!</title>
       <link rel="icon" type="image/x-icon" href="img/fav-logo.png" />
</head>

<body>
       <style>
              .disclaimer ul li{
              list-style: style;
              list-style-type: square;
      }
       </style>
       <div class="bg-dark">
              <?php require_once("menu.php");?>
       </div>
       <div class="cp p-3 pt-5 mt-5">
              <center>
                     <h1><b>DISCLAIMER</b></h1>
              </center>
              <div class="disclaimer container mt-5">
                     
                     <br />
                     <p>
                            <ul>
                                   <li>mapilia provides the www.mapilia.in Web site as a service to the public and Web site owners.<br></li>
                                   
                                   <li>
                                          mapilia is not responsible for, and expressly disclaims all liability for, damages of any kind arising out of use,
                                          reference to, or reliance on any information contained within the site. While the information contained within the site
                                          is periodically updated, no guarantee is given that the information provided in this Website is correct, complete, and
                                          up-to-date.<br>
                                   </li>
                                   
                                   <li>
                                          Although the mapilia Website may include links providing direct access to other Internet resources, including Web
                                          sites, mapilia is not responsible for the accuracy or content of information contained in these sites.<br>
                                   </li>
                                   
                                   <li>
                                          Links from mapilia.in to third-party sites do not constitute an endorsement by mapilia of the parties or their
                                          products and services. The appearance on the Web site of advertisements and product or service information does not
                                          constitute an endorsement by mapilia.<br>
                                   </li>
                            </ul>
                     </p>
                     
              </div>
       </div>
       <?php require_once("footer.php");?>

       <!-- Option 1: Bootstrap Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

       <!-- jquery -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
</body>

</html>