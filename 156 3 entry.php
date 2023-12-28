<?php 
session_start();
$address=$_SESSION['address'];
$thana=$_SESSION['policeStation'];
$district=$_SESSION['city'];
$mobile=$_SESSION['mobile'];
$applicant=$_SESSION['applicant'];
$appfather=$_SESSION['appfather'];
$officer=$_SESSION['officer'];
$sub=$_SESSION['subject'];
$content=$_POST['content'];
?>
<!DOCTYPE html>
<html lang="en" style="width:800px;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>156 (3) CRPC</title>
    <style>
        pre,p{
            font-size: 22px;
        }
     .right{
        display: flex;
        justify-content: flex-end;
     }
    </style>
</head>
<body>
    <div>
<!-- to the section starts -->
<pre>
 सेवा में,
 <?php echo"श्रीमान "."$officer"."<br>";?>
 <?php echo"जनपद "."$district";?>
</pre>
<!-- to the section ends -->

<!-- vishay section starts -->
<pre>
    <?php echo"विषय- "."$sub"."<br>";?>
</pre>
<!-- vishay section ends -->

<!-- letter content section starts -->
<p>
 महोदय,<br>
 <?php echo"$content"."<br>"."अतः श्रीमान जी से अनुरोध है की अभियोग पंजीकृत कर अवशयक कार्यवाही करने की कृपा करें|";?>
</p>
<!-- letter content section ends -->
        
    </div>  

<div>
    <div class="right">
    <p>
    <?php echo"$applicant "."पुत्र "."$appfather"."<br>"."$address "."$thana "." जनपद "."$district"."<br>"."$mobile";?>
    </p>
</div>  
</div>
<!-- printing the page code starts -->
<?php
    // Check if the "Print" button is clicked
    if (isset($_POST['print'])) {
        echo "<script>window.print();</script>";
    }
    ?>

    <!-- Print button -->
    <?php
    echo '<script>
        window.onload = function() {
            window.print();
            setTimeout(function() {
                window.close();
            }, 1000);
        };
    </script>';
    ?>
<!-- printing the page code ends -->
</body>
</html>

