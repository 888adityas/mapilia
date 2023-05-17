<?php 
require_once("dbconnect.php");
?>
<!doctype html>
<html lang="en">

<head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
       <!-- my css -->
       <link rel="stylesheet" href="style.css">
       <!-- nav-links fonts -->
       <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
       <!-- font awsome cdn -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
       <!-- typing effect -->
       <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
       <script src="typingEffect.js"></script>
       <!-- Link Swiper's CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
       <link rel="stylesheet" href="swiper.css">



       <title>Mapilia - Travel Vacations ...!!!</title>
       <link rel="icon" type="image/x-icon" href="img/fav-logo.png">
</head>

<body>
       <style>
              .pp {}
       </style>
       <div class="bg-dark">
              <?php require_once("menu.php");?>
       </div>
       <div class="cp p-3 pt-5 mt-5">
              <center>
                     <h1><b>CANCELLATION POLICY</b></h1>
              </center>
              <div class="cpData container mt-5">
                    <h5><b>NO REFUND SHALL BE MADE WITH RESPECT TO THE INITIAL BOOKING AMOUNT FOR ANY CANCELLATIONS. HOWEVER,</b></h5> 
                    <br>
                    <ol>
                     <li>
                            If cancellations are made 30 days before the start date of the trip, 50% of the trip cost will be charged as
                            cancellation fees.
                     </li>
                     <li>
                            If cancellations are made 15-30 days before the start date of the trip, 75% of the trip cost will be charged as
                            cancellation fees.
                     </li>
                     <li>
                            If cancellations are made within 0-15 days before the start date of the trip, 100% of the trip cost will be charged as
                            cancellation fees.
                     </li>
                     <li>
                            In the case of unforeseen weather conditions or government restrictions, certain activities may be canceled and in such
                            cases, the operator will try his best to provide an alternate feasible activity. However, no refund will be provided for
                            the same.
                     </li>
                    </ol>
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