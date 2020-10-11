<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    *{
	padding: 0px;
  margin: 0px;
}

/* MENU RATA TENGAH*/
menu{
	height: 50px;
  text-align: center;
  background-color:dodgerblue;
}
menu ul {
	display: inline-block; 
  list-style: none;
}
menu ul li {
	text-align: center;
  float: left;
}
menu ul li a{
	display: block;
  color: #FFF;
  text-decoration: none;
  padding: 10px 15px;
  line-height: 30px
}
menu ul li a:hover{
	background-color: #FFF;
  color: blue;
}

  </style>
</head>
<body>

  <menu>
    <ul>
        <li><a href="Home.php?">Home</a><li>
        <li><a href="Booking.php?">Booking</a><li>
      
    </ul>
  </menu>

  <p></p>
  
  <div class="container text-center">
    <h1 style="color: darkblue; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: 12px;"> EAD HOTEL</h1>
    <p class="lead" style="color: darkcyan;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:24px;">Welcome to 5 Star Hotel</p>
  </div>

  
  <div class="card-columns">
    <div class="card-deck text-center">
    <div class="container text-center">
    <div class="card" style="width:400px">
      <img class="card-img-top" src="Standar.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">Standar</h4>
        <h2 class="card-text" style="color: darkturquoise;"> $ 90/Day</h2>
        <div class="card" style="width: 18rem;">
          <div class="card-header">Facilities</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">1 Single Bed</li>
            <li class="list-group-item">1 Bathroom</li>
          </ul>
          <div class="card-footer text-muted"> 
          <?php $tipekamar = 'Standard';?>
            <a href="Booking.php?tipekamar=<?php echo $tipekamar; ?>" class="btn btn-primary" role="button">Book Now</a>
        </div> </div>     
    </div></div></div></div>

    
    <div class="card-deck text-center">
      <div class="container text-center">
    <div class="card" style="width:400px">
      <img class="card-img-top" src="Superior.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">Superior</h4>
        <h2 class="card-text" style="color: darkturquoise;"> $ 150/Day</h2>
        <div class="card-header">Facilities</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">1 Double Bed</li>
          <li class="list-group-item">1 Television and Wi-Fi</li>
          <li class="list-group-item">1 Bathroom with hot water</li>
        </ul>
        <div class="card-footer text-muted"> <a href="" class="btn btn-primary">Book Now</a></div>
      </div>
    </div>
  </div></div>

    
    <div class="card-deck text-center">
      <div class="container text-center">
    <div class="card" style="width:400px">
      <img class="card-img-top" src="Luxury.jpg" alt="Card image" style="width:100%">
      <div class="card-body">
        <h4 class="card-title">Luxury</h4>
        <h2 class="card-text" style="color: darkturquoise;"> $ 200/Day</h2>
        <div class="card-header">Facilities</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">2 Double Bed</li>
          <li class="list-group-item">1 Bathroom with hot water</li>
          <li class="list-group-item">1 Kitchen</li>
          <li class="list-group-item">1 Television and Wi-Fi</li>
          <li class="list-group-item">1 Workroom</li>
        </ul>
        <div class="card-footer text-muted"> <a href="" class="btn btn-primary">Book Now</a></div>
      </div>
    </div>
    <br>
  </div></div></div>
  </body>
  </html>