<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "brightfuture");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
if(isset($_POST['Submit']))
{    
     $first_name = $_POST['first_name'];
     $middle_name = $_POST['middle_name'];
     $last_name = $_POST['last_name'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $phone_number = $_POST['phone'];
     $password = $_POST['password'];
     $date_of_birth = $_POST['date_of_birth'];
     $cv = $_POST['file'];
     $facebook = $_POST['facebook'];
     $twitter = $_POST['twitter'];
     $instagram = $_POST['instagram'];
     
     $sql = "INSERT INTO students (first_name,middle_name,last_name,username,email,phone,password,date_of_birth,file,facebook,twitter,instagram)
     VALUES ('$first_name','$middle_name','$last_name','$username','$email','$phone_number','$password','$date_of_birth','$cv','$facebook','$twitter','$instagram')";
     if (mysqli_query($link, $sql)) {
        echo "New record created successfully !";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($link);
     }
     mysqli_close($link);
}

?>

