<?php


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
header("Access-Control-Allow-Headers: Content-Type"); 


$servername = "localhost";
$username = "root";
$password = ""; 
$database = "booking";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn = mysqli_connect('localhost','root','','booking');

if(isset($_POST['send'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $address = $_POST['Address'];
    $location = $_POST['Location'];
    $guests = $_POST['Guests'];
    $arrivals = $_POST['Arrivals'];
    $leaving = $_POST['Leaving'];

  
  $req =" insert into book(['Name'], ['Email'], ['Phone'], ['Address'], ['Location'], ['Guests'], ['Arrivals'], ['Leaving']) values
  ('$name',' $email',' $phone',' $address',' $location',' $guests',' $arrivals',' $leaving')";

mysqli_query($conn, $req);
header('location:pay.php');
}

else{
    echo 'something went wrong try again';
}


?>