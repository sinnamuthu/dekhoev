<?php
$fn =  'App_Smart_Watch_Integration';

                                    $servername = "localhost";

$username = "m201015r_dekhoev";

$password = "m201015r_dekhoev";

$dbname = "dekhoev2022";

 

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

 

$sql = "SELECT Input_Types FROM newfeaturemasters WHERE Feature_Name = '$fn'";

$result = $conn->query($sql);

 

if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

 

  $in = $row['Input_Types'];

  echo $in;

 

 

  }}
  
  
  ?>