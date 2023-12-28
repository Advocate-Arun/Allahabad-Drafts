<?php
session_start();

$_SESSION['address']=$_POST['address'];
$_SESSION['policeStation']=$_POST['policeStation'];
$_SESSION['city']=$_POST['city'];
$_SESSION['mobile']=$_POST['mobile'];
$_SESSION['applicant']=$_POST['applicant'];
$_SESSION['appfather']=$_POST['appfather'];
$_SESSION['officer']=$_POST['officer'];
$_SESSION['subject']=$_POST['subject'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content{
            width: 300px;
            height: 500px;
        }
    </style>
</head>
<body>
<form action="police.php" method="POST">
    <textarea name="content" class="content" placeholder="आपके साथ हुई घटना का तारीख, समय व जगह का पूर्ण विवरण दें "></textarea>
    <input type="submit" value="एप्लीकेशन डाउनलोड करें " style="color:green;">
</form>
<!-- php file to store client data -->
<?php
// Retrieve the JSON data sent from the client
$ipAddress = $_POST['ipAddress'];
?>

<!-- sssssss -->


<!-- php code to get geolocaiton below -->
<?php

    //Create connection
//   $connection = mysqli_connect("localhost","id20467616_root","Dragonball9#","id20467616_prashantverdict");
   
//       $lat = $_POST['lat'];
//       $long = $_POST['long'];

//       $q = "INSERT INTO `userdata` ( `name`, `mobile`, `ip`, `lat`, `longg`, `thana`, `jila`, `father`) VALUES ( '$_POST[applicant] ', '$_POST[mobile]', '$ipAddress', '$lat', '$long', '$_POST[policeStation]', '$_POST[city]', '$_POST[appfather]');";

//       $query = mysqli_query($connection, $q);
      
//       if($query){
//           echo json_encode("Data Inserted Successfully");
//           }
//       else {
//           echo json_encode('problem');
//           }
      

?>

<!-- geolovation php avove -->
</body>
</html>