<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hostel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
<?php
      include('Menu Bar.php')
  ?><br>
<div class="container-fluid text-center">
<div class="container"> 
  <div class="row content">
    <div class="col-sm-12">
      <h1 id="font">{ Hostel.com }</h1><br>
      <p class="text-justify">Our Online Hostel: We are an online platform that connects travelers and students with affordable and convenient hostel accommodations around the world.
Our Mission: Our mission is to provide a hassle-free and reliable way for people to book hostels online, and to help promote budget-friendly travel and cultural exchange.
Our Features: Our website offers a user-friendly search and booking interface, with detailed descriptions and reviews of hostels, as well as photos, maps, and other useful information. We also offer 24/7 customer support to help with any questions or issues that may arise.
Our Partners: We work with a network of trusted hostel partners to offer a wide range of accommodations, from basic dorm rooms to private suites, in locations around the world.
Our Community: We believe in the power of travel to bring people together and promote understanding and respect across cultures. That's why we are committed to fostering a vibrant and inclusive online community of travelers and hostel enthusiasts.
Again, the specific information included in an "About" section may vary depending on the focus and goals of the online hostel platform.</p>
<h1 align="center"id="font">[ Services ]</h1><br>
<p class="text-justify">Accommodations: We provide affordable and comfortable lodging options for travelers and students, including shared dormitories and private rooms.
Security: Our hostel has 24/7 security and CCTV cameras to ensure the safety of our guests and their belongings.
Facilities: We offer a range of facilities including communal kitchens, laundry facilities, and common areas for guests to relax and socialize.
Internet Access: Free Wi-Fi is available throughout the hostel, and we also have computer terminals for guests to use.
Food and Beverage: We provide a complimentary breakfast and have an on-site bar and restaurant serving local and international cuisine.
Travel Services: Our staff can assist with booking transportation and tours, and provide information on local attractions and events.
Social Activities: We organize regular social events and activities for guests to meet and interact with each other, including game nights, movie screenings, and city tours.
Of course, the specific hostel services may vary depending on the location, size, and target audience of the hostel</p>
    </div>
  </div><br><br>
  <div class="row"align="center">
  <!--map Start Here-->
  <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
  </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <iframe class="frame"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9012415990155!2d77.37085911440647!3d28.602739392180986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce57ca5ff4435%3A0x6de631b7a5bfdacb!2sUnion+Bank+Of+India!5e0!3m2!1sen!2sin!4v1555502551059!5m2!1sen!2sin" width="550"height="300" frameborder="0" style="border:1" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>      
<!--Map Close Here-->
        <div class="col-sm-2">
          <h4><b>Address</b></h4>
          <b>Knowledge Park 3 Greater Noida</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Phone</b></h4>
              <b>(+91) 9528194377</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Email-Id</b></h4>
              <b>findyourhostel@gmail.com</b>
        </div>
  </div><br><br>
</div>
</div>
<?php
  include('Footer.php')
?>
</body>
</html>
