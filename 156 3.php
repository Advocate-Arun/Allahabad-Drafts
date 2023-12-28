<?php

session_start();
$_SESSION["nystate"] = $_POST["nystate"];
$_SESSION["nycity"] = $_POST["nycity"];
$_SESSION["nypoliceStation"] = $_POST["nypoliceStation"];
$_SESSION["nycourtroom"] = $_POST["nycourtroom"];
$_SESSION["nycourtnumber"] = $_POST["nycourtnumber"];
$_SESSION["nydatee"] = $_POST["nydatee"];
// session to local variables 
$appstate=$_SESSION["appstate"];
$appcity=$_SESSION["appcity"];
$apppoliceStation=$_SESSION["apppoliceStation"];
$applicant=$_SESSION["appli"];
$appage=$_SESSION["appage"];
$appfather=$_SESSION["appfat"];
$appaddress=$_SESSION["appaddress"];
$appmobile=$_SESSION["appmobile"];

// $oppstate=$_SESSION["oppstate"];
// $oppcity=$_SESSION["oppcity"];
// $opppoliceStation=$_SESSION["opppoliceStation"];
// $opplicant=$_SESSION["opponent"];
// $oppage=$_SESSION["oppage"];
// $oppfather=$_SESSION["oppfather"];
// $oppaddress=$_SESSION["oppaddress"];
// $oppmobile=$_SESSION["oppmobile"];

$nystate=$_SESSION["nystate"];
$nycity=$_SESSION["nycity"];
$nypoliceStation=$_SESSION["nypoliceStation"];
$nycourtroom=$_SESSION["nycourtroom"];
$nycourtnumber=$_SESSION["nycourtnumber"];
$nydatee=$_SESSION["nydatee"];
// session to local variables
?>
<!DOCTYPE html>
<html lang="en" style="width:800px;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>156 (3) CRPC</title>
    <style>
        *{
            padding: 0;
            border: 0;
            margin: 0;
        }
    .center{
    display: flex;
    justify-content: center;
    text-decoration: underline;
    margin-bottom: 0;
    }
    .leftright{
        display: flex;
        margin: 0;
        border-bottom: 2px solid;
    }
    .main{
        padding: 30px;
    }
    .appleft{
        text-align: end;
    }
    .oppleft{
        text-align: end; 
    }
    .versus{
        text-align: center;
    }
    .thanadistrict{
        text-align: center;
    }
    .subject{
        padding-left: 100px;
    }
    .content{
        padding-left: 35px;
    }
    </style>
</head>
<body>
  <div class="main">
<!-- court district court name court number case number and year -->
       <div>
         <h3 class="center">न्यायालय <?php echo " $nycourtroom  "; ?> <?php echo " $nycourtnumber "."$nycity"; ?></h3>
         <h3 class="leftright"><p style="width:50%; ">प्रार्थना पत्र सं0-</p>                              <p style="width:50%;     text-align: end;">सन <?php echo "$nydatee";?></p></h3>
       </div>
<!-- court district court name court number case number and year -->


<!-- applicant details  -->
       <div class="applicant">
          <div class="appright">
                <?php echo " $applicant "." उम्र लगभग $appage पुत्र "." $appfather "."<br>"."निवासी- $appaddress, $apppoliceStation, जनपद $appcity "; ?>
          </div>
          <div class="appleft">
                <?php echo ".......प्रार्थी"; ?>
          </div>
       </div>
<!-- applicant details  -->

<!-- opposite party details -->
        <div class="opponent">
            <div class="versus">बनाम</div>
          <div class="oppright">
                <?php
            if (isset($_SESSION["opponentlist"]) && !empty($_SESSION["opponentlist"])) {
                // Iterate over all elements in $_SESSION["opponentlist"]
                foreach ($_SESSION["opponentlist"] as $l => $opponentData) {
                    // Access individual values from the associative array
                    $opponentName = $opponentData['opponent'];
                    $opponentAge = $opponentData['oppage'];
                    $opponentFather = $opponentData['oppfather'];
                    $opponentAddress = $opponentData['oppaddress'];
                    $opponentThana = $opponentData['opppoliceStation'];
                    $opponentCity = $opponentData['oppcity'];
            
                    // Echo or use the values as needed
                    echo " $opponentName "." उम्र लगभग $opponentAge पुत्र "." $opponentFather "."<br>"." $opponentAddress , $opponentThana जनपद $opponentCity<br><br> ";
                }
            } else {
                echo "No opponent data available.";
            }

                  ?>
          </div>
          <div class="oppleft">
                <?php echo ".......विपक्षीगण"; ?>
          </div>
       </div>
<!-- opposite party details -->

<!-- thana district and application under which CRPC -->
                      <div class="thanadistrict">थाना-<?php echo " $nypoliceStation "; ?></div>
                      <div class="thanadistrict">जनपद-<?php echo " $nycity "; ?></div>
            <div class="subject">विषय- प्रार्थना पत्र अंतर्गत धारा 156(3) सी0आर0पी0सी0 |</div>
            <div class="">महोदय जी,</div><br>
<!-- thana district and application under which CRPC -->

<!-- application details with yah ki format  -->
            <div class="content"><?php echo "प्रार्थी माननीय नयायालय से निम्न लिखित निवेदन करता है -"; ?></div>
            <div class="content"><?php echo "1. यह की ".""; ?></div>
            <div class="content"><?php echo "1. यह की ".""; ?></div>
            <div class="content"><?php echo "1. यह की ".""; ?></div>
            <div class="content"><?php echo "1. यह की ".""; ?></div>
            <div class="content"><?php echo "1. यह की ".""; ?></div>
            <div class="content"><?php echo "1. यह की ".""; ?></div>
            <div class="content"><?php echo "1. यह की ".""; ?></div>
<!-- application details with yah ki format  -->


<!-- prayer -->
                                <div class="thanadistrict"><b>-प्रार्थना-</b></div>
                                <div class="content">
                                <div><?php echo " अतः माननीय नयायालय से प्रार्थना है की सम्बंधित अधिकारी को निर्देशित कर उपरोक्त वर्णित विपक्षीगण पर अभियोग पंजीकृत कर विधि अनुसार विवेचना करें | "; ?></div><br>
                                <?php echo "दिनांक-___________"; ?>
                                </div>

                                <div class="appleft">
                                <?php echo "प्रार्थी"."$applicant उम्र लगभग $appage <br>"."पुत्र $appfather <br>"."निवासी- $appaddress , $apppoliceStation , जनपद $appcity "; ?>
                                </div>
<!-- prayer -->

<!-- applicant -->

<!-- applicant -->
  </div>
</body>
</html>