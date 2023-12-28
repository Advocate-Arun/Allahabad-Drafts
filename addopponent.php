<!DOCTYPE html>
<html lang="en">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rozha One&display=swap" rel="stylesheet">

<!-- script to mobile number starts -->
    <script>
           // Add an event listener to validate the mobile number when the form is submitted
           document.querySelector('form').addEventListener('submit', function (event) {
            const mobileInput = document.getElementById('mobile');
            const mobileRegex = /^[0-9]{10}$/;

            if (!mobileRegex.test(mobileInput.value)) {
                alert('Please enter a valid 10-digit mobile number.');
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>
<!-- script to mobile number starts -->

<!-- xss to voice hindi starts -->

<!-- css to voice hindi ends -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Station Form</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    background-image: url('background.jpeg'); /* Replace with the path to your image */
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Optional: Prevents background scrolling */
    font-family: 'Rozha One', sans-serif;
}
.logo{
    display: flex;
}
h1{
    font-size:50px;
    padding-left: 30px;
}
#logoimg{
    height: 60px;
    width: 60px;
    padding: 30px;
    border-radius: 100px;
}
.formelement{
    padding-left: 20px;
    font-size: x-large;
    display: inline;
    align-items: center;
    justify-content: center;
    padding-bottom: 50px;
}

  


    </style>
</head>
<body onload="getLocation()">
    <div class="main">
        <div class="logo">
            <h1>न्याय साथी</h1>
            <img id="logoimg" src="nyay sathi logo.png" alt="">
        </div>
        <div class="formelement">
        <?php
session_start();

// Initialize opponent list in session if not already set
if (!isset($_SESSION["opponentlist"])) {
    $_SESSION["opponentlist"] = [];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oppstate = $_POST['oppstate'] ?? "";
    $oppcity = $_POST['oppcity'] ?? "";
    $opppoliceStation = $_POST['opppoliceStation'] ?? "";
    $opponent = $_POST['opponent'] ?? "";
    $oppage = $_POST['oppage'] ?? "";
    $oppfather = $_POST['oppfather'] ?? "";
    $oppaddress = $_POST['oppaddress'] ?? "";
    $oppmobile = $_POST['oppmobile'] ?? "";

    $opponentData = [
        'oppstate' => $oppstate,
        'oppcity' => $oppcity,
        'opppoliceStation' => $opppoliceStation,
        'opponent' => $opponent,
        'oppage' => $oppage,
        'oppfather' => $oppfather,
        'oppaddress' => $oppaddress,
        'oppmobile' => $oppmobile,
    ];

    // Get the current index in the opponent list
    $currentIndex = count($_SESSION["opponentlist"]);

    // Check if previous button was clicked
    if (isset($_POST['opponentt']) && $currentIndex > 0) {
        // Move back to the previous index
        $currentIndex++;
    }

    // Fill the opponent data in the current or subsequent empty index
    $_SESSION["opponentlist"][$currentIndex] = $opponentData;
}
?>
<!-- display opponent data -->
<h2>विपक्षीगण/प्रतिवादियों के नाम </h2>
<br>
    <ul>
        <?php foreach ($_SESSION["opponentlist"] as $index => $data): ?>
            <li>
                <strong>विपक्षी/प्रतिवादी <?php echo $index + 1; ?>:</strong>
                <ul>
                    <?php foreach ($data as $key => $value): ?>
                        <li><?php echo "$key: $value"; ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
<!-- display opponent data -->

<div class="buttons" style="display:inline;">
<?php
// Handle remove specific index button
if (isset($_POST['remove_index'])) {
    $indexToRemove = (int)$_POST['remove_index'];
    if (isset($_SESSION["opponentlist"][$indexToRemove])) {
        unset($_SESSION["opponentlist"][$indexToRemove]);
        // Reindex the array
        $_SESSION["opponentlist"] = array_values($_SESSION["opponentlist"]);
    }
}

// Handle clear all data button
if (isset($_POST['clear_all'])) {
    $_SESSION["opponentlist"] = [];
}
    // Display button for final submission
    echo '<a href="opposite.php"><button>विपक्षियों में और नाम जोड़े</button></a> <br>';
    ?>
     <?php
    // Display button for final submission
    echo '<a href="courtdetail.php"><button>Final Submission</button></a>';
    ?>



 <!-- Button to remove data of specific index -->
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="hidden" name="remove_index" value="<?php echo $index; ?>">
                        <input type="submit" value="Remove Index">
                    </form>

                    <!-- Button to clear all data -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="clear_all" value="Clear All Data">
    </form>
    </div>

        </div>
    </div>

            
        
    </script>




<!-- below starts javascrpt for geolocation -->


</body>
</html>
