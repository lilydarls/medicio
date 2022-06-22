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
     $full_name = $_POST['fullname'];
     $year_of_enrolment= $_POST['yearofenrolement'];
     $year_of_graduation = $_POST['yearofgraduation'];
     $head_master_during_enrolmennt = $_POST['headmasterduringenrolement'];
     $head_master_during_graduation = $_POST['headmasterduringgraduation'];
     $famous_teacher_during_graduation = $_POST['famousteacherduringgraduation'];
     $division = $_POST['division'];
     $Occupation = $_POST['occupation'];
     $Physical_address = $_POST['physicaladdress'];
     $Email = $_POST['email'];
     $phone_number = $_POST['phonenumber'];
     $facebook= $_POST['facebook'];
     $twitter = $_POST['twitter'];
     $profile_picture = $_POST['profilepicture'];
     
     $sql = "INSERT INTO bfgssalumn (fullname,yearofenrolement,yearofgraduation,headmasterduringenrolement,headmasterduringgraduation,famousteacherduringgraduation,
    division,occupation,Physicaladdress,email,phonenumber,facebook,twitter,profilepicture)
     VALUES ('$full_name','$year_of_enrolment','$year_of_graduation','$head_master_during_enrolmennt','$head_master_during_graduation','$famous_teacher_during_graduation',
     '$division','$Occupation','$Physical_address','$Email','$phone_number','$facebook','$twitter','$profile_picture')";
     if (mysqli_query($link, $sql)) {
        echo "New record created successfully !";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($link);
     }
     mysqli_close($link);
}

?>

