<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
    $( function() {
      $( "#date" ).datepicker();
    } );
    </script>
    <script>
        $( function() {
          $( "#date" ).datepicker();
        } );
        </script>
        <script>
            $( function() {
              $( "#date" ).datepicker({
                dateFormat: "yy-mm-dd"
              });
            } );
            </script>


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
  <br><br>
 <div class="container">
  <div class="row">
  


  <div class="col-md-6" style="background-color: white">
   <form>
  
  <div class="form-group ">
    <label for="ststicNama" class="col-sm-4 col-form-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" value="">
    </div>
  </div>

  <div class="form-group">
    <label for="ststicDate" class="col-sm-4 col-form-label">Date</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="dd/mm/yy" name="date">
  
</div>
</div>

  <div class="form-group ">
    <label for="inputAlamat" class="col-sm-4 col-form-label">Duration</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="days" value="">
    </div>
  </div>

  
  <div class="form-group">
    <label for="inputType" class="col-sm-4 col-form-label">Room Type</label>
    <div class="col-sm-8">
    <select class="custom-select">
    <option value="1">Standard</option>
    <option value="2">Superior</option>
    <option value="3">Luxury</option>
  </select>
</div>
   </div>
    
  <div class="form-group">
    <label for="inputService" class="col-sm-4 col-form-label">Add Service</label>
    <h4> $ 20/Service</h4>
    <div class="col-sm-8">
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">Room Service</label>  
</div>
<p></p>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
    <label class="form-check-label" for="defaultCheck2">Breakfast</label>
  </div>
</div></div>
  
  <div class="form-group">
    <label for="inputNomor" class="col-sm-4 col-form-label">Phone Number</label>
    <div class="col-sm-8">
       <input type="text" class="form-control" id="Number"  value="">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputAlamat" class="col-sm-4 col-form-label"></label>
    <div class="col-sm-10">
      <button class="btn btn-primary btn-block">Book</button>
    </div>
  </div>
</form>  
</div>

<div class="col-md-6" style= "background-color:white;">
    <br>
    <br>
    <img src="hotel.jpg" style="width: 100%; height: 300px">
</div>
  </div></div></div>



  </body>
  </html>