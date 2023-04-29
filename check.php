<?php 

  $link = mysqli_connect("sql305.epizy.com","epiz_34092157","8nmBMTFzsa","epiz_34092157_123");
  if(mysqli_connect_error()){
     die("error connecting to database");
  };
  
  $query = "SELECT * FROM `data`";
  if ($result = mysqli_query($link, $query)){

   while ($row = mysqli_fetch_array($result)) {


    echo "ID: ".$row['id'];
    echo "<br>";
    echo "Name: ".$row['name'];
    echo "<br>";
    echo "  Phone Number: ".$row['phone']." ";
    echo "<br>";
    echo "  Incident: ".$row['incident']." ";
    echo "<br>";
    echo "  Address: ".$row['address']." ";
    echo "<br>";
    echo "  Summary: ".$row['summary']." ";
    echo "<br><br><br>";
    }

  }

  




















?>