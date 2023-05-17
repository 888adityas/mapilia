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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <!-- my css -->
    <link rel="stylesheet" href="style.css" />
    <!-- nav-links fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"
    />
    <!-- font awsome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- typing effect -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link
      href="https://www.jqueryscript.net/css/jquerysctipttop.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="typingEffect.js"></script>
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="swiper.css" />

    <title>Mapilia - Travel Vacations ...!!!</title>
    <link rel="icon" type="image/x-icon" href="img/fav-logo.png" />
  </head>

  <body>
    <style>
      ul li{
       list-style: style;
       list-style-type: square;
      }
    </style>
    <div class="bg-dark">
      <?php require_once("menu.php");?>
    </div>
    <div class="cp p-3 pt-5 mt-5">
      <center>
        <h1><b>CANCELLATION POLICY</b></h1>
      </center>
      <div class="cpData container mt-5">
        <h5><b>TERMS & CONDITIONS</b></h5>
        <br />
        <ul>
          <li>
              The photos/videos content created on mapilia’s trip (by mapilia’s content creators or clients) is the property of
              mapilia and can only be used by mapilia Experiences for advertising across media platforms. None of the digital
              content can be used by any one without obtaining the rightful permissions by mapilia.
          </li>
          <li>
              Full Payment of the trip cost must be made before the trip begins. Pending Payments may eventually lead to the
              Cancellation of the trip.
          </li>
          <li>
              The IDs shall all be verified before boarding. No boarding shall be entertained without a valid Govt. ID.
          </li>
          <li>
              The Transfer of the bookings is not permitted. Only the names mentioned at the time of confirmation shall be allowed to
              travel.
          </li>
          <li>
              No refunds shall be made towards any inclusion(s) not availed by the Client.
          </li>
          <li>
              Travelers must take care of their luggage & belongings. The management shall not be responsible for any damage or any
              missing items along the tour.
          </li>
          <li>
              The time of Departure is stated & fixed. All travelers must update their status with the Trip coordinator(s), & report
              at the pickup point 30 mins prior to the scheduled departure.
          </li>
          <li>
              The Air Conditioning will be switched off in the hills. Also, during the trip, it shall be the Driver’s discretion to
              put off the AC as & when required, considering the travelers’ safety & ease of travel along uneven & dangerous routes.
          </li>
          <li>
              Our time of departure is fixed must depart by the stated time & keep their status updated with the trip coordinator(s).
              Anyone missing the bus shall not be eligible for any refunds. We shall call you twice before the schedule departure.
          </li>
          <li>
              Drinking & Smoking are strictly prohibited along the tour due to health & safety concerns. Our tours involve physically
              demanding activities such as trekking, camping at high altitudes and we recommend for you to be in the right shape to
              make most of them.
          </li>
          <li>
              No act of misconduct or indiscipline shall be tolerated on the tours. We are a cordial travel community and we aspire to
              bring to you a hassle free and memorable experience.
          </li>
          <li>
              mapilia shall not be responsible for any delays or alterations in the program or indirectly incurred expenses in cases
              such as Natural Hazards, accident, breakdown of machinery, weather conditions, landslides, political closure or any
              untoward incidents.
          </li>
          <li>
              We do not provide any insurance policy to cover for the expenditure on sickness or accidents or losses incurred due to
              theft or other reasons.
          </li>
          <li>
              Numerous factors such as weather and road conditions the physical ability of participants etc. may bring alteration in
              the itinerary. We reserve the right to make necessary changes in the schedule in the interest of safety, comfort and
              general well-being!
          </li>
        </ul>
        <h5 class="pt-5">
              <b>JOIN US FOR AN INDELIBLE & UNPARALLELED TRAVEL EXPERIENCE. BON VOYAGE!</b>
        </h5>
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
