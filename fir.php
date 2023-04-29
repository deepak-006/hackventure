<?php 


if(array_key_exists('name', $_POST) OR array_key_exists('phone', $_POST) OR array_key_exists('incident', $_POST) OR array_key_exists('address', $_POST) OR array_key_exists('summary', $_POST)){

   $link = mysqli_connect("sql305.epizy.com","epiz_34092157","8nmBMTFzsa","epiz_34092157_123");
  if(mysqli_connect_error()){
     die("error connecting to database");
  }

      if($_POST['name']!=''){
    	$query = "INSERT INTO `data` (`name`,`phone`,`incident`,`address`,`summary`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."','".mysqli_real_escape_string($link, $_POST['phone'])."','".mysqli_real_escape_string($link, $_POST['incident'])."','".mysqli_real_escape_string($link, $_POST['address'])."','".mysqli_real_escape_string($link, $_POST['summary'])."')";
    		if(mysqli_query($link,$query)){
    			echo "success";
    		}else{
    			echo "fail";
    		}
    

      }
 	 


 }


 






?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>FIR Filing</title>
  </head>
  <body>
<br>
<div class="container">
<a class="btn btn-primary" href="index.html" role="button">Home</a>
<a class="btn btn-primary" href="menu.html" role="button">Back to Menu</a>
</div>
<br><br>
<div class="container">
	<h2>Enter FIR details</h2>
<form method="post">
  <div class="form-row">
     <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone Number</label>
      <input type="Number" class="form-control" id="Number" name="phone">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Incident</label>
    <input type="text" class="form-control" id="inputAddress" name="incident">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Summary</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="summary"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
   
  </body>
</html>


