<?php
session_start();
if(isset($_POST["submit_applicant"])){
$_SESSION["appstate"] = $_POST["appstate"];
$_SESSION["appcity"] = $_POST["appcity"];
$_SESSION["apppoliceStation"] = $_POST["apppoliceStation"];
$_SESSION["appli"] = $_POST["applicant"];
$_SESSION["appage"] = $_POST["appage"];
$_SESSION["appfat"] = $_POST["appfather"];
$_SESSION["appaddress"] = $_POST["appaddress"];
$_SESSION["appmobile"] = $_POST["appmobile"];
}



?>
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
    display: flex;
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
        <!-- increase the opponent -->
        
        <!-- increase the opponent -->
<?php 
$num_of_opponent=1;

// $num_of_opponent=$_POST["num_of_opponent"];
for($i=1;$i<=$num_of_opponent;$i++)
echo "
        <div class='formelement'>
                 <form action='addopponent.php' method='POST'>
                    <input type='hidden' id='ipAddress' name='ipAddress' value=''>
                 <!-- state select starts -->
                     <label for='state'>Select State:</label><br>
                     <select id='state' name='oppstate' onchange='updateCities()'>
                         <option value=''>विपक्षी किस राज्य में रहते है:</option>
                         <option value='uttar_pradesh'>उत्तर प्रदेश</option>
                <!-- Add other state options here -->
                     </select>
                <!-- state select ends -->

                        <br>

                       <label for='city'>विपक्षी किस जिले के निवासी है:</label><br>
                       <select id='city' name='oppcity' onchange='updatePoliceStations()'>
                        <option value=''>विपक्षी का जिला चुने:</option>
                      <!-- Cities will be dynamically populated based on the selected state -->
                       </select>

                       <br>

                       <label for='policeStation'>विपक्षी का घर किस थाना क्षेत्र में पड़ता है:</label><br>
                       <select id='policeStation' name='opppoliceStation'>
                        <option value=''>विपक्षी का थाना चुने:</option>
                       <!-- Police stations will be dynamically populated based on the selected city -->
                       </select>

                       <br>

                      

                    <label for='mobile'>विपक्षी/प्रतिवादी का नाम :</label><br>
                    <input type='text' id='' name='opponent' title='प्रार्थी का नाम ' required>
                     <br>
                     <label for='mobile'>विपक्षी की आयु लगभग कितने वर्ष की है ?</label><br>
                     <select name='oppage' id='ageSelect'>
                         <!-- JavaScript will populate the options here -->
                     </select>
                     
                     <script>
                         // Use JavaScript to dynamically generate options for years from 1 to 150 वर्ष
                         var yearSelect = document.getElementById('ageSelect');
                         for (var year = 1; year <= 150; year++) {
                             var option = document.createElement('option');
                             option.value = year;
                             option.text = year + ' वर्ष';
                             yearSelect.add(option);
                         }
                     </script>
                     <br>
                    <label for='mobile'>विपक्षी/प्रतिवादी के पिता का नाम  :</label><br>
                     <input type='text' id='' name='oppfather' title='प्रार्थी के पिता का नाम ' required>
                     <br>
                     <label for='mobile'>विपक्षी का पता :</label><br>
                     <input type='text' id='' name='oppaddress' title='प्रार्थी के पिता का नाम ' required>
                    <br>
                     <label for='mobile'>विपक्षी का मोबाइल नंबर:</label><br>
                    <input type='text' id='mobile' name='oppmobile' pattern='[0-9]{10}' title='Enter a 10-digit mobile number' required>
                    <br>

                <input name='opponentt' type='submit' value='Submit' style='width: 80px;
                height: 40px;
                border-radius: 30px;
                background: transparent;
                font-size: 18px;
                font-weight: 600;'>
            </form>
        </div>
";
?>
    </div>






    <script>
        function updateCities() {
            // Logic to dynamically populate the city dropdown based on the selected state
            const stateSelect = document.getElementById('state');
            const citySelect = document.getElementById('city');

            // Clear previous options
            citySelect.innerHTML = '';

            // Add new options based on the selected state
            const selectedState = stateSelect.value;

            // You can add more logic to fetch cities based on the selected state
            if (selectedState === 'uttar_pradesh') {
                const citiesInUttarPradesh = ['आगरा', 'अलीगढ', 'खैर', 'प्रयागराज', 'अम्बेडकरनगर', 'औरैया', 'आजमगढ', 'बागपत', 'बहराइच', 'बलिया', 'बलरामपुर', 'बाँदा', 'बाराबंकी', 'बरेली', 'बस्ती', 'बिजनौर', 'बदायूँ', 'बुलंदशहर', 'चंदौली', 'चित्रकूट', 'देवरिया', 'एटा', 'इटावा', 'अयोध्या', 'फ़र्रूख़ाबाद', 'फतेहपुर', 'फ़िरोजाबाद', 'गौतमबुद्ध नगर', 'गाजियाबाद', 'ग़ाज़ीपुर', 'गोंडा', 'गोरखपुर', 'हमीरपुर', 'हरदोई', 'हाथरस', 'जलौन', 'जौनपुर', 'झाँसी', 'ज्योतिबा फुले नगर', 'कन्नौज', 'कानपुर देहात', 'कानपुर नगर', 'कौशाम्बी', 'कुशीनगर (पड़रौना)', 'लखीमपुर-खिरी', 'ललितपुर', 'लखनऊ', 'महाराजगंज', 'महोबा', 'मैनपुरी', 'मथुरा', 'मऊ', 'मेरठ', 'मिर्ज़ापुर', 'मुरादाबाद', 'मुजफ्फरनगर', 'पीलीभीत', 'प्रतापगढ', 'रायबरेली', 'रामपुर', 'सहारनपुर', 'संत कबीरनगर', 'भदोही', 'शाहजहाँपुर', 'श्रावस्ती', 'सिद्धार्थनगर', 'सीतापुर', 'सोनभद्र', 'सुल्तानपुर', 'उन्नाव', 'वाराणसी'];
                citiesInUttarPradesh.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.text = city;
                    citySelect.appendChild(option);
                });
            }
            // Add similar logic for other states

            // Call the updatePoliceStations function to update the police station dropdown based on the selected city
            updatePoliceStations();
        }

        function updatePoliceStations() {
            // Logic to dynamically populate the police station dropdown based on the selected city
            const citySelect = document.getElementById('city');
            const policeStationSelect = document.getElementById('policeStation');

            // Clear previous options
            policeStationSelect.innerHTML = '';

            // Add new options based on the selected city
            const selectedCity = citySelect.value;

            // You can add more logic to fetch police stations based on the selected city
            if (selectedCity === 'आगरा') {
                const policeStationsInAgra = ['थाना कोतवाली', 'थाना छत्ता बाजार', 'थाना सदर बाज़ार', 'महिला थाना रकाबगंज', 'थाना हरिपर्वत', 'थाना जगदीशपुरा', 'थाना लोहा मंडी', 'थाना एम एम गेट', 'थाना मंटोला', 'थाना नाई कि मंडी', 'थाना न्यू आगरा', 'थाना शाहगंज', 'थाना सिकंदरा', 'थाना एत्माउदौलाह', 'थाना ताजगंज', 'थाना रकाबगंज', 'थाना फतेहाबाद', 'थाना एत्मादपुर', 'थाना फतेहपुर सीकरी', 'थाना कागारौल', 'थाना खंदौली', 'थाना सैयां', 'थाना अछनेरा', 'थाना शमसाबाद', 'थाना डोंकी', 'थाना जैतपुर', 'थाना खेरागढ़', 'थाना बाह', 'थाना मालपुरा', 'थाना बरहन', 'थाना निबोहरा', 'थाना जगनेर', 'थाना बंसई जगनेर', 'थाना बसोनी', 'थाना पिनाहट', 'थाना मनसुखपुरा', 'थाना रिठोरा', 'थाना बंसई अरेला', 'थाना खेरा राठोर', 'थाना इरादतनगर', 'थाना ट्रांस यमुना', 'थाना कमला नगर', 'थाना पर्यटन', 'थाना ताज सुरक्षा', 'थाना बमरौली कटारा', 'थाना चित्राहट', 'थाना किरावली'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }
            
            // Add similar logic for other cities
            if (selectedCity === 'अलीगढ') {
                const policeStationsInAgra = ['थाना अकराबाद', 'थाना अतरोली', 'थाना बनादेवी', 'थाना बरला', 'थाना चन्डोस', 'थाना छारा', 'थाना सिविल लाइन', 'थाना दंदों', 'थाना देल्ही गेट', 'थाना गंगीरी', 'थाना गभाना', 'थाना गाँधी पार्क', 'थाना गोंडा', 'थाना हरदुआगंज', 'थाना इगलास', 'थाना जवां', 'थाना खैर', 'थाना कोतवाली', 'थाना क्वार्सी', 'थाना लोधा', 'थाना मडराक', 'थाना पाली मुकीमपुर', 'थाना पिसावां', 'थाना सासनी गेट', 'थाना टप्पल', 'थाना विजयगढ़', 'थाना माहिला थाना', 'थाना गोधा', 'थाना रोरावर', 'थाना महुआ खेडा'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }


// Add similar logic for other cities template to compy frommmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
             if (selectedCity === 'अम्बेडकरनगर') {
                const policeStationsInAgra = ['थाना कोतवाली अकबरपुर', 'थाना आलापुर', 'थाना अलीगंज', 'थाना अहिरौली', 'थाना बसखारी', 'थाना भीटी', 'थाना हंसवर', 'थाना इब्राहिमपुर', 'थाना जलालपुर', 'थाना जैतपुर', 'थाना महरुआ', 'थाना मालीपुर', 'थाना महिला थाना', 'थाना सम्मनपुर', 'थाना समसपुर (बेवाना)', 'थाना जहागीरगंज', 'थाना राजेसुल्तानपुर', 'थाना टांडा', 'थाना कटका'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
             }

             // Add similar logic for other cities
             if (selectedCity === 'प्रयागराज') {
                const policeStationsInAgra = ['थाना खुल्दाबाद', 'थाना कोतवाली', 'थाना शाहगंज', 'थाना कैंट', 'थाना सिविल लाइन्स', 'थाना महिला थाना', 'थाना शिवकुटी', 'थाना एयरपोर्ट', 'थाना धूमनगंज', 'थाना पूरामुफ्ती', 'थाना अतरसुइया', 'थाना करेली', 'थाना मुट्ठीगंज', 'थाना कर्नलगंज', 'थाना जॉर्जटाउन', 'थाना कीडगंज', 'थाना दारागंज', 'थाना झूंसी', 'थाना हण्डिया', 'थाना सराय ममरेज', 'थाना उतरांव', 'थाना बहरिया', 'थाना मउआइमा', 'थाना फूलपुर', 'थाना होलागढ़', 'थाना नवाबगंज', 'थाना सोरांव', 'थाना फाफामऊ', 'थाना सराय इनायत', 'थाना थरवई', 'थाना औ0 क्षेत्र', 'थाना करछना', 'थाना नैनी', 'थाना कोरांव', 'थाना मांडा', 'थाना मेजा', 'थाना बारा', 'थाना लालापुर', 'थाना शंकरगढ़', 'थाना घूरपुर', 'थाना कौंधियारा', 'थाना खीरी'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
             }

              // Add similar logic for other cities   
                if (selectedCity === 'औरैया') {
                const policeStationsInAgra = ['महिला थाना औरैया', 'थाना औरैया', 'थाना अछल्दा', 'थाना अजीतमल', 'थाना अयाना', 'थाना बेला', 'थाना विधुना', 'थाना दिबियापुर', 'थाना एरवाकटारा', 'थाना फफूंद', 'थाना सहायल', 'थाना कुदरकोट', 'थाना सहार'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }

                if (selectedCity === 'आजमगढ') {
                const policeStationsInAgra = ['थाना अहिरौला', 'थाना अतरौलिया', 'थाना बरदह', 'थाना बिलरियागंज', 'थाना दीदारगंज', 'थाना देवगाँव', 'थाना गम्भीरपुर', 'थाना जहानागंज', 'थाना जीयनपुर', 'थाना कन्धरापुर', 'थाना कप्तानगंज', 'थाना कोतवाली', 'थाना महराजगंज', 'थाना मेहनगर', 'थाना मेहनाजपुर', 'थाना महिला थाना', 'थाना मुबारकपुर', 'थाना निज़ामाबाद', 'थाना पवई', 'थाना फूलपुर', 'थाना रानी की सराय', 'थाना रौनापार', 'थाना सरायमीर', 'थाना सिधारी', 'थाना तहबरपुर', 'थाना तरवा'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }

                if (selectedCity === 'जौनपुर') {
                const policeStationsInAgra = ['थाना बदलापुर', 'थाना बक्शा', 'थाना बरसठी', 'थाना चन्दवक', 'थाना गौरा बादशाहपुर', 'थाना जलालपुर', 'थाना केराकत', 'थाना खेतासराय', 'थाना खुटहन', 'थाना कोतवाली', 'थाना लाईन बाजार', 'थाना मछली शहर', 'थाना मडियॉहू', 'थाना महराजगंज', 'थाना महिला थाना', 'थाना मीरगंज', 'थाना मुंगरा बादशाहपुर', 'थाना नेवढिया', 'थाना पवारा', 'थाना रामपुर', 'थाना सराय ख्वाजा', 'थाना सरपतहा', 'थाना शाहगंज', 'थाना सिकरारा', 'थाना सिंगरामउ', 'थाना सुजानगंज', 'थाना सुरेरी', 'थाना जफराबाद'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }

                if (selectedCity === 'मिर्ज़ापुर') {
                const policeStationsInAgra =['थाना अदलहाट', 'थाना अहरौरा', 'थाना चिल्ह', 'थाना चुनार', 'थाना गैपुरा', 'थाना हलिया', 'थाना जमालपुर', 'थाना कच्छवा', 'थाना कटरा कोतवाली', 'थाना कोतवली सिटी', 'थाना कोतवली देहात', 'थाना लालगंज', 'थाना मरिहान', 'थाना पडरी', 'थाना विंध्याचल', 'थाना महिला', 'थाना संतनगर', 'थाना ड्रमनगंज', 'थाना राजगढ़'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }

            if (selectedCity === 'बागपत') {
                const policeStationsInAgra =['थाना खेकड़ा', 'थाना चांदी नगर', 'थाना छपरौली', 'थाना दोघट', 'थाना बालेनी', 'थाना बिनौली', 'थाना बड़ौत', 'थाना रमाला', 'थाना सिंघावली अहीर', 'महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }

            if (selectedCity === 'बहराइच') {
                const policeStationsInAgra =['थाना कोतवाली नगर', 'थाना कोतवाली देहात', 'थाना कैसरगंज', 'थाना खैरी घाट', 'थाना जरवल रोड', 'थाना दरगाह शरीफ', 'थाना नवाबगंज', 'थाना नानपारा', 'थाना पयागपुर', 'थाना फखरपुर', 'थाना बौडी', 'थाना मुर्तिहा', 'थाना महिला', 'थाना मोतीपुर', 'थाना रुपैडिहा', 'थाना रानीपुर', 'थाना रामगांव', 'थाना रिसिया', 'थाना सुजौली', 'थाना विशेश्वरगंज', 'थाना हुजूरपुर', 'थाना हरदी', 'थाना मटेरा'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }


            if (selectedCity === 'बलिया') {
                const policeStationsInAgra =['थाना कोतवाली', 'थाना बॉसडीह रोड', 'थाना बॉसडीह कोतवाली', 'थाना सहतवार', 'थाना रेवती', 'थाना सुखपुरा', 'थाना सिकंदरपुर', 'थाना उभावं', 'थाना बैरिय', 'थाना दुबहर', 'थाना हल्दी', 'थाना फेफना', 'थाना रसड़ा कोतवाली', 'थाना नरही', 'थाना चितबडागाँव', 'थाना नगर', 'थाना गडवार', 'थाना दोकती', 'थाना खेजुरी', 'थाना मनियर', 'थाना भीमपुरा', 'थाना जी०आर०पी० बलिया —', 'थाना पकरी', 'थाना आर०पि०एफ० पोस्ट'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }

            if (selectedCity === 'बलरामपुर') {
                const policeStationsInAgra =['थाना को० नगर', 'थाना को० देहात', 'थाना महराजगंज तराई', 'थाना गौरा चौराहा', 'थाना तुलसीपुर', 'थाना को० जरवा', 'थाना को० गैसडी', 'थाना पचपेड़वा', 'थाना ललिया', 'थाना हर्रैया', 'थाना को० उतरौला', 'थाना रेहरा बाज़ार', 'थाना साहदुल्लानगर'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }
            

            if (selectedCity === 'बाँदा') {
                const policeStationsInAgra =['थाना कोतवाली नगर', 'थाना कोतवाली देहात', 'थानाध्यक्ष मटौंध', 'थानाध्यक्ष तिन्दवारी', 'थानाध्यक्ष पैलानी', 'थानाध्यक्ष चिल्ला', 'थानाध्यक्ष जसपुरा', 'थानाध्यक्ष अतर्रा', 'थानाध्यक्ष बदौसा', 'थानाध्यक्ष फतेहगंज', 'थानाध्यक्ष नरैनी', 'थानाध्यक्ष गिरवां', 'थानाध्यक्ष कालिंजर', 'थानाध्यक्ष बबेरु', 'थानाध्यक्ष बिसण्डा', 'थानाध्यक्ष कमासिन', 'थानाध्यक्ष मर्का', 'महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }

            

            if (selectedCity === 'बाराबंकी') {
                const policeStationsInAgra =['थाना कोतवाली', 'थाना हैदरगढ़', 'थाना सतरिख', 'थाना दरियाबाद', 'थाना बडडूपुर', 'थाना देवा', 'थाना कुर्सी', 'थाना जैदपुर', 'थाना रामनगर', 'थाना मोहम्मदपुर', 'थाना फतेहपुर', 'थाना सफदरगंज', 'थाना रामसनेही घाट', 'थाना सुबेहा', 'थाना असन्द्रा', 'थाना टिकैत नगर', 'थाना लोनी कटरा', 'थाना मसौली', 'थाना कोठी', 'थाना घुंघटेर', 'थाना बदोसराय', 'थाना जहांगीराबाद'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'बरेली') {
                const policeStationsInAgra =["थाना अलीगंज","थाना अनवला","थाना बहेड़ी","थाना भुट्टा","थाना भामोरा","थाना भोजीपुरा","थाना बारादरी","थाना छावनी","थाना कलेक्टरबक्कगंज","थाना देवरानिया","थाना फतेहगंज पश्चिम","थाना फतेहगंज पूर्व","थाना फरीदपुर","थाना हफीजगंज","थाना इज़्ज़तनगर","थाना कुलाड़िया","थाना कोटवाली","थाना महिला थाना","थाना मीरगंज","थाना नरियावल","थाना नवाबगंज","थाना प्रेमनगर","थाना क़िला","थाना सिरौली","थाना शीशगढ़","थाना शेरगढ़","थाना शाही","थाना सुभाष नगर","थाना विशारतगंज"];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'बस्ती') {
                const policeStationsInAgra =['थाना कैन्ट', 'थाना दुबौलिया', 'थाना गौर', 'थाना हर्रैया', 'थाना कलवारी', 'थाना कप्तानगंज', 'थाना कोतवाली (महिला)', 'थाना कोतवाली', 'थाना लालगंज', 'थाना मुन्देरवा', 'थाना नगर', 'थाना पैकवालिया', 'थाना परशुरामपुर', 'थाना पुरानी बस्ती', 'थाना रुधौली', 'थाना सोनहा', 'थाना वाल्टरगंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'बिजनौर') {
                const policeStationsInAgra =['थाना अफजलगढ़', 'थाना किरतपुर', 'थाना कोतवाली देहात', 'थाना कोतवली शहर', 'थाना चांदपुर', 'थाना धामपुर', 'थाना नगीना', 'थाना नगीना देहात', 'थाना नजीबाबाद', 'थाना नूरपुर', 'थाना नहटौर', 'थाना नांगल', 'थाना बढ़ापुर', 'थाना मंडावर', 'थाना मंडावली', 'थाना महिला बिजनौर', 'थाना रेहड़', 'थाना शेरकोट', 'थाना शिवालाकला', 'थाना स्योहारा', 'थाना हल्दौर', 'थाना हिमपुर'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'बदायूँ') {
                const policeStationsInAgra =['थाना सिविल लाइन्स', 'थाना कोतवाली', 'थाना बिनावर', 'थाना कुवारगाव', 'थाना उझानी', 'थाना कादरचौक', 'थाना मुसाझाग', 'थाना उसहैत', 'थाना दातागंज', 'थाना हजरतपुर', 'थाना उसावां', 'थाना अलापुर', 'थाना सहसवान', 'थाना मुजरिया', 'थाना ज़रीफनगर', 'थाना बिल्सी', 'थाना उघेती', 'थाना महिला बदायूँ', 'थाना बिसौली', 'थाना वज़ीरगंज', 'थाना फैजगंज बेहटा'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'बुलंदशहर') {
                const policeStationsInAgra =['थाना आहार', 'थाना अहमदगढ़', 'थाना अंगौटा', 'थाना अनू हहर', 'थाना आरनिया', 'थाना औरंगाबाद', 'थाना बुगरसी (नरसेना)', 'थाना भवानबहादुरपुर नगर', 'थाना छतरी', 'थाना डिवाई', 'थाना गुलावठी', 'थाना जहांगीराबाद', 'थाना खानपुर', 'थाना कोटवाली देहात', 'थाना खुर्जा नगर', 'थाना कोटवाली', 'थाना खुर्जा देहात', 'थाना नरौरा', 'थाना पहासु', 'थाना रामघाट', 'थाना शिकारपुर', 'थाना सयाना', 'थाना सलेमपुर', 'थाना सिकंदराबाद', 'थाना महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'चंदौली') {
                const policeStationsInAgra =['थाना अलीनगर', 'थाना बबुरी', 'थाना बलुआ', 'थाना चकरघट्टा', 'थाना चकिया', 'थाना चंदौली', 'थाना धानापुर', 'थाना धीना', 'थाना इलिया', 'थाना कंदवा', 'थाना महिला थाना', 'थाना मुगलसराय', 'थाना नौगढ़', 'थाना सकलडीहा', 'थाना सैयदराजा', 'थाना शहाबगंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'चित्रकूट') {
                const policeStationsInAgra =['थाना कर्वी', 'थाना बहिल पुरवा', 'थाना बरगढ़', 'थाना मानिकपुर', 'थाना मारकुंडी', 'थाना मऊ', 'थाना पहाड़ी', 'थाना रैपुरा', 'थाना राजापुर', 'थाना महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'देवरिया') {
                const policeStationsInAgra =['थाना बघौचघाट', 'थाना बनकटा', 'थाना बरहज', 'थाना बरियारपुर', 'थाना भलुअनी', 'थाना भटनी', 'थाना भाटपाररानी', 'थाना एकौना', 'थाना गौरीबाजार', 'थाना खामपार', 'थाना खुखुन्दू', 'थाना कोतवाली देवरिया', 'थाना लार', 'थाना मदनपुर', 'थाना महुवाडीह', 'थाना मईल', 'थाना रामपुर कारखाना', 'थाना रुद्रपुर', 'थाना सलेमपुर', 'थाना श्रीरामपुर', 'थाना सुरौली', 'थाना तरकुलवा', 'थाना महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'एटा') {
                const policeStationsInAgra =['थाना अलीगंज', 'थाना अमापुर', 'थाना अवागढ़', 'थाना बागवाला', 'थाना जैथरा', 'थाना जलेसर', 'थाना जसरथपुर', 'थाना कोतवाली', 'थाना कोतवाली देहात', 'थाना मलावन', 'थाना मारहरा', 'थाना मिरहची', 'थाना नयागांव', 'थाना पिलुआ', 'थाना राजा का राम पुर', 'थाना रिजोर', 'थाना सकीट', 'थाना सकरौली'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'इटावा') {
                const policeStationsInAgra =['थाना बकेवर', 'थाना बलरई', 'थाना बढ़पुरा', 'थाना बसरेहर', 'थाना भरेह', 'थाना भरथना', 'थाना बिथौली', 'थाना चकरनगर', 'थाना चौबीया', 'थाना सिविल लाइन', 'थाना एकदिल', 'थाना फ्रेंड्सकालोनी', 'थाना जसवंतनगर', 'थाना कोतवाली', 'थाना लवेदी', 'थाना महिला थाना', 'थाना पछायगाव', 'थाना साहनान', 'थाना सैफई', 'थाना उसराहर', 'थाना वैदपुरा'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'अयोध्या') {
                const policeStationsInAgra =['थाना कोतवाली अयोध्या', 'थाना इनायत नगर', 'थाना कैंट', 'थाना कुमारगंज', 'थाना कोतवाली नगर', 'थाना खंडासा', 'थाना गोसाईगंज', 'थाना तारून', 'थाना पटरंगा', 'थाना पूराकलंदर', 'थाना कोतवाली बीकापुर', 'थाना मवई', 'थाना महाराजगंज', 'थाना महिला थाना', 'थाना रुदौली', 'थाना रामजन्मभूमि', 'थाना रौनाही', 'थाना हैदरगंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'फ़र्रूख़ाबाद') {
                const policeStationsInAgra =['थाना कादरी गेट, फर्रुखाबाद', 'थाना कोतवाली कायमगंज', 'थाना कोतवाली फतेहगढ़', 'थाना कोतवाली फर्रुखाबाद', 'थाना कोतवाली मोहम्मदाबाद', 'थाना अमृतपुर', 'थाना कमालगंज', 'थाना कम्पिल', 'थाना जहांनगंज', 'थाना नवाबगंज', 'थाना मउदरवाजा', 'थाना मेरापुर', 'थाना राजेपुर, जनपद फर्रुखाबाद', 'थाना शमसाबाद', 'महिला थाना फतेहगढ़'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'फतेहपुर') {
                const policeStationsInAgra =['थाना असोथर', 'थाना औंग', 'थाना बकेवर', 'थाना बिन्दकी', 'थाना चांदपुर', 'थाना धाता', 'थाना गाजीपुर', 'थाना हथगाम', 'थाना हुसैनगंज', 'थाना जाफरगंज', 'थाना जहानाबाद', 'थाना कल्याणपुर', 'थाना खागा', 'थाना ख़खरेरू', 'थाना किशुनपुर', 'थाना कोतवाली सदर', 'थाना ललौली', 'थाना मलवां', 'थाना सुल्तानपुर घोष', 'थाना थरियांव'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'फ़िरोजाबाद') {
                const policeStationsInAgra =['थाना एका', 'थाना खैरगढ़', 'थाना जसराना', 'थाना टूंडला', 'थाना नगला खंगर', 'थाना नगला सिंघी', 'थाना नारखी', 'थाना नसीरपुर', 'थाना पचोखरा', 'थाना फरिहा', 'थाना फिरोजाबाद उत्तर', 'थाना फिरोजाबाद दक्षिण', 'थाना बसई मोहम्मदपुर', 'थाना मक्खनपुर', 'थाना महिला', 'थाना मटसेना', 'थाना रामगढ', 'थाना रसूलपुर', 'थाना लाइनपार', 'थाना शिकोहाबाद', 'थाना सिरसागंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'गौतमबुद्ध नगर') {
                const policeStationsInAgra =['थाना से०- 20', 'थाना से०- 39', 'थाना एक्सप्रेसवे', 'थाना से०-24', 'थाना से०-58', 'थाना फेज-३', 'थाना से०-49', 'थाना फेज 2', 'थाना से०-126', 'थाना कासना', 'थाना नॉलेज पार्क', 'थाना सूरजपुर', 'थाना फेज-1', 'थाना दनकौर', 'थाना इकोटेक १', 'थाना इकोटेक ३', 'थाना बिसरख', 'थाना बादलपुर', 'थाना दादरी', 'थाना जारचा', 'थाना जेवर', 'थाना रबूपुरा', 'थाना से०-63', 'थाना से०-142', 'थाना बीटा-2'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'गाजियाबाद') {
                const policeStationsInAgra =['थाना कोतवाली', 'थाना सिहानी गेट', 'थाना कविनगर', 'थाना महिला थाना', 'थाना विजयनगर', 'थाना मसूरी', 'थाना खोड़ा मकनपुर', 'थाना इंद्रापुरम', 'थाना लिंक रोड', 'थाना ट्रोनिका सिटी', 'थाना लोनी', 'थाना लोनी बोर्डर', 'थाना साहिबाबाद', 'थाना मोदीनगर', 'थाना मुरादनगर', 'थाना निवाड़ी', 'थाना भोजपुर', 'थाना नंदग्राम', 'थाना मधुबनबापूधाम', 'थाना कौशाम्बी', 'थाना टीलामोड़', 'थाना शालीमार गार्डन', 'थाना अंकुर विहार', 'थाना वेव सिटी', 'थाना क्रासिंग रिपब्लिक'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'ग़ाज़ीपुर') {
                const policeStationsInAgra =['थाना कोतवाली', 'थाना करण्डा', 'थाना जंगीपुर', 'थाना महिला थाना', 'थाना कासिमाबाद', 'थाना नोनहरा', 'थाना मरदह', 'थाना विरनों', 'थाना मोहम्दाबाद', 'थाना भावरकोल', 'थाना बरेसर', 'थाना करीमुद्दीनपुर', 'थाना सैदपुर', 'थाना खानपुर', 'थाना सादात', 'थाना बहरियाबाद', 'थाना भुडकुडा', 'थाना नंदगंज', 'थाना शादियाबाद', 'थाना दुल्लहपुर', 'थाना जमानिया', 'थाना दिलदारनगर', 'थाना गहमर', 'थाना सुहवल', 'थाना रेवतीपुर', 'थाना नगसरहाल्ट'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'गोंडा') {
                const policeStationsInAgra =['थाना बेगमगंज', 'थाना धानेपुर', 'थाना इटियाथोक', 'थाना कटरा बाज़ार', 'थाना कौढ़िया', 'थाना करनैलगंज', 'थाना खरगुपुर', 'थाना खोदारे', 'थाना कोतवाली', 'थाना कोतवाली देहात', 'थाना मनकापुर', 'थाना मोतीगंज', 'थाना नवाबगंज', 'थाना परसपुर', 'थाना स्वामीनारायण छपिया', 'थाना तरबगंज', 'थाना वजीरगंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'गोरखपुर') {
                const policeStationsInAgra =['थाना बढ़हलगंज', 'थाना बांसगांव', 'थाना बेलीपार', 'थाना बेलघाट', 'थाना कैम्पियरगंज', 'थाना कैंट', 'थाना चौरीचौरा', 'थाना चिलुआताल', 'थाना गगहा', 'थाना गोला', 'थाना गोरखनाथ', 'थाना गुलहरिया', 'थाना हरपुर बुदहट', 'थाना झंगहा', 'थाना खजनी', 'थाना खोराबार', 'थाना कोतवाली', 'थाना महिला थाना', 'थाना पिपराईच', 'थाना पीपीगंज', 'थाना राजघाट', 'थाना सहजनवा', 'थाना शाहपुर', 'थाना सिकरीगंज', 'थाना तिवारीपुर', 'थाना उरुवा', 'थाना रामगढ़ताल', 'थाना गीडा', 'थाना एम्स'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'हमीरपुर') {
                const policeStationsInAgra =['थाना बिवांर', 'थाना चिकासी', 'थाना जलालपुर', 'थाना जरिया', 'थाना कोतवाली नगर', 'थाना कुरारा', 'थाना ललपुरा', 'थाना महिला थाना', 'थाना मझगवां', 'थाना मौदहा', 'थाना मुस्करा', 'थाना राठ', 'थाना सिसोलर', 'थाना सुमेरपुर'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'हरदोई') {
                const policeStationsInAgra =['थाना अरवल', 'थाना अतरौली', 'थाना बेहटागोकुल', 'थाना बेनीगंज', 'थाना बघौली', 'थाना बिलग्राम', 'थाना हरपालपुर', 'थाना हरियावां', 'थाना कछौना', 'थाना कासिमपुर', 'थाना कोतवाली', 'थाना देहात कोतवाली', 'थाना लोनार', 'थाना माधोगंज', 'थाना माहिला', 'थाना मल्लावां', 'थाना पाली', 'थाना पंचदोरा', 'थाना पिहानी', 'थाना शाहाबाद', 'थाना सांडी', 'थाना संडीला', 'थाना सुरसा', 'थाना टंडीयवन'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'हाथरस') {
                const policeStationsInAgra =['थाना चंदपा', 'थाना हसायन', 'थाना हाथरस', 'थाना हाथरस गेट', 'थाना हाथरस जं०', 'थाना मुरसान', 'थाना सादाबाद', 'थाना सहपऊ', 'थाना सासनी', 'थाना सिकंदराराऊ', 'थाना महिला'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'जलौन') {
                const policeStationsInAgra =['थाना आटा', 'थाना एट', 'थाना चुर्खी', 'थाना डकोर', 'थाना गोहन', 'थाना कोतवाली जालौन', 'थाना कदौरा', 'थाना कैलिया', 'थाना कोटरा', 'थाना कोतवाली कालपी', 'थाना कोतवाली कोंच', 'थाना कोतवाली उरई', 'थाना कुठौन्द', 'थाना माधौगढ़', 'थाना महिला उरई', 'थाना नदीगांव', 'थाना रामपुरा', 'थाना रेंढ़र', 'थाना सिरसाकलार', 'थाना जी0आर0पी0 उरई'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'झाँसी') {
                const policeStationsInAgra =['थाना बबीना', 'थाना बडागांव', 'थाना बरुआसागर', 'थाना चिरगांव', 'थाना एरच', 'थाना गरोठा', 'थाना गुरसराय', 'थाना ककरवई', 'थाना कटरा', 'थाना कोतवाली', 'थाना लहचौरा', 'थाना महिला', 'थाना मोठ', 'थाना मऊरानीपुर', 'थाना नवाबाद', 'थाना पूँछ', 'थाना प्रेमनगर', 'थाना रक्सा', 'थाना सदर बाज़ार', 'थाना सकरार', 'थाना समथर', 'थाना शाहजहांपुर', 'थाना सीपरी बाज़ार', 'थाना टहरौली', 'थाना टोडी फतेह्पुर', 'थाना उल्दन'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'ज्योतिबा फुले नगर') {
                const policeStationsInAgra =[];//condfuosdfkkkkkkkfkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'कन्नौज') {
                const policeStationsInAgra =['थाना इन्दरगढ़', 'थाना कोतवाली कन्नौज', 'थाना गुरसहायगंज', 'थाना छिबरामऊ', 'थाना ठठिया', 'थाना तालग्राम', 'थाना तिर्वा', 'थाना विशुनगढ़', 'थाना सौरिख'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'कानपुर देहात') {
                const policeStationsInAgra =['थाना अकबरपुर', 'थाना अमराहट', 'थाना बरौर', 'थाना भोगनीपुर', 'थाना डेरापुर', 'थाना देवराहट', 'थाना गजनेर', 'थाना मंगलपुर', 'थाना मूसानगर', 'थाना राजपुर', 'थाना रसूलाबाद', 'थाना रूरा', 'थाना सट्टी', 'थाना सिकंदरा', 'थाना शिवली', 'थाना महिला रनिया'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'कानपुर नगर') {
                const policeStationsInAgra =['थाना अनवरगंज', 'थाना अर्मापुर', 'थाना बाबुपुरवा', 'थाना बादशाहिनाका', 'थाना बजरिया', 'थाना बर्रा', 'थाना बेकनगंज', 'थाना विधनू', 'थाना बिल्हौर', 'थाना बिठूर', 'थाना कैंट', 'थाना चकेरी', 'थाना चमनगंज', 'थाना चौबेपुर', 'थाना कलेक्टर गंज', 'थाना फजलगंज', 'थाना घाटमपुर', 'थाना गोविन्द नगर', 'थाना ग्वालटोली', 'थाना हरबंश मोहल', 'थाना जूही', 'थाना काकादेव', 'थाना ककवन', 'थाना कल्यानपुर', 'थाना कर्नलगंज', 'थाना किदवई नगर', 'थाना कोहना', 'थाना कोतवाली', 'थाना महिला', 'थाना महाराजपुर', 'थाना मूलगंज', 'थाना नरवल', 'थाना नौबस्ता', 'थाना नवाबगंज', 'थाना नजीराबाद', 'थाना पनकी', 'थाना फीलखाना', 'थाना रेल बाज़ार', 'थाना रायपुरवा', 'थाना सचेंडी', 'थाना सजेती', 'थाना शिवराजपुर', 'थाना सीसामऊ', 'थाना स्वरूपनगर'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'कौशाम्बी') {
                const policeStationsInAgra =['थाना करारी', 'थाना कोखराज', 'थाना कौशाम्बी', 'थाना चारवा', 'थाना पश्चिम सरीरा', 'थाना पिपरी', 'थाना पुरामुफ्ती', 'थाना मंझनपुर', 'थाना महिला', 'थाना महेवा घाट', 'थाना मोहब्बतपुर पईन्सा', 'थाना सराय अकिल', 'थाना सैनी'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'कुशीनगर (पड़रौना)') {
                const policeStationsInAgra =['थाना पड़रौना', 'थाना जटहाँ बाज़ार', 'थाना खड्डा', 'थाना कसया', 'थाना हाटा', 'थाना अहिरौली बाजार', 'थाना तुर्कपट्टी', 'थाना हनुमानगंज', 'थाना कप्तानगंज', 'थाना कुबेरस्थान', 'थाना रामकोला', 'थाना महिला थाना', 'थाना विशुनपुरा', 'थाना बरवापट्टी', 'थाना पटहेरवा', 'थाना नेबुआ-नौरगिया', 'थाना सेवरही', 'थाना तरयासुजान'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'लखीमपुर-खिरी') {
                const policeStationsInAgra =['थाना खीरी', 'थाना फरधान', 'थाना महिला थाना', 'थाना ईसानगर', 'थाना फूलबेहड़', 'थाना धौरहरा', 'थाना मोहम्मदी', 'थाना हैदराबाद', 'थाना पसगवा', 'थाना गोला', 'थाना भीरा', 'थाना मैलानी', 'थाना पलिया', 'थाना सम्पूर्णानगर', 'थाना गौरीफंटा', 'थाना चन्दनचैकी', 'थाना निघासन', 'थाना सिंगाही', 'थाना तिकोनिया', 'थाना मितौली', 'थाना मैगलगंज', 'थाना नीमगाॅव'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'ललितपुर') {
                const policeStationsInAgra =['थाना बालाबेहट', 'थाना बानपुर', 'थाना बार', 'थाना गिरार', 'थाना जखौरा', 'थाना जाखलौन', 'थाना कोतवाली', 'थाना मदनपुर', 'थाना मदवरा', 'थाना महरौनी', 'थाना नाराहट', 'थाना पाली', 'थाना पुराकलान', 'थाना सौजना', 'थाना तालबेहट'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'लखनऊ') {
                const policeStationsInAgra =['थाना अलीगंज', 'थाना आलमबाग', 'थाना अमीनाबाद', 'थाना आशियाना', 'थाना बाज़ार खाला', 'थाना बंथरा', 'थाना बखशी के तालाब', 'थाना चौक', 'थाना कैंट', 'थाना चिनहट', 'थाना गोमती नगर', 'थाना गुडुम्बा', 'थाना गाजीपुर', 'थाना गौतम पल्ली', 'थाना गोसाई गंज', 'थाना हसन गंज', 'थाना हजरतगंज', 'थाना हुसैन गंज', 'थाना इंदिरा नगर', 'थाना ईटौंजा', 'थाना जानकी पूरम', 'थाना कैसर बाग', 'थाना कृष्णा नगर', 'थाना काकोरी', 'थाना महानगर', 'थाना महीला थाना', 'थाना मनक नगर', 'थाना मोहनलालगंज', 'थाना मडियाव', 'थाना मलीहाबाद', 'थाना मॉल', 'थाना नाका', 'थाना नगराम', 'थाना निगोहाँ', 'थाना सआदत गंज', 'थाना सरोजनी नगर', 'थाना तालकटोरा', 'थाना ठाकुरगंज', 'थाना विकास नगर', 'थाना वजीर गंज', 'थाना पारा', 'थाना पीजीआई', 'थाना विभूति खण्ड'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'महाराजगंज') {
                const policeStationsInAgra =['थाना कोतवाली महराजगंज', 'थाना ठूठीबारी', 'थाना सौनौली', 'थाना चौक', 'थाना निचलौल', 'थाना बरगदवा', 'थाना परसामलिक', 'थाना नौतनवा', 'थाना कोल्हुई', 'थाना पुरन्दरपुर', 'थाना फरेंदा', 'थाना बृजमनगंज', 'थाना पनियरा', 'थाना श्यामदेउरवा', 'थाना घुघली', 'थाना कोठीभार', 'थाना सोहगीबरवा', 'थाना महिला थाना', 'थाना सिन्दुरिया', 'थाना भिटौली'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'महोबा') {
                const policeStationsInAgra =['थाना अजनर', 'थाना चरखारी', 'थाना कबरई', 'थाना खरेला', 'थाना कुलपहाड़', 'थाना महोबा', 'थाना महोबकंठ', 'थाना पनमाड़ी', 'थाना श्रीनगर', 'थाना खन्ना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'मैनपुरी') {
                const policeStationsInAgra =['थाना कोतवाली', 'थाना एलाऊ', 'थाना दन्नाहार', 'थाना महिला', 'थाना भोगाव', 'थाना बेवर', 'थाना किशनी', 'थाना बिछवां', 'थाना घिरोर', 'थाना कुरावली', 'थाना औंछा', 'थाना करहल', 'थाना कुर्रा', 'थाना बरनाहल'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'मथुरा') {
                const policeStationsInAgra =['थाना बल्देव', 'थाना बरसाना', 'थाना छाता', 'थाना फ़रह', 'थाना गोवेरधन', 'थाना गोविंदनगर', 'थाना कोसी', 'थाना कोतवाली', 'थाना मांट', 'थाना मगोरा', 'थाना नौझील', 'थाना राया', 'थाना सदरबाजार', 'थाना शेरगढ़', 'थाना सुरीर', 'थाना वृन्दावन', 'थाना जमुनापार', 'थाना हाईवे', 'थाना रिफाइनरी', 'थाना महावन', 'थाना जैत', 'थाना महिला'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'मऊ') {
                const policeStationsInAgra =['थाना मधुबन', 'थाना दोहरीघाट', 'थाना घोसी', 'थाना कोपागंज', 'थाना मुहम्मदाबाद', 'थाना सरायलखन्सी', 'थाना चिरैयाकोट', 'थाना रानीपुर', 'थाना कोतवाली मऊ', 'थाना हलधरपुर', 'थाना दक्षिण टोला', 'थाना बेलौली रामपुर'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'मेरठ') {
                const policeStationsInAgra =['थाना भावनपुर', 'थाना ब्रहमपुरी', 'थाना सिविललाईन', 'थाना देहलीगेट', 'थाना दौराला', 'थाना फलावदा', 'थाना हस्तिनापुर', 'थाना इन्चोली', 'थाना जानी', 'थाना कंकरखेड़ा', 'थाना खरखौदा', 'थाना किठौर', 'थाना कोतवाली', 'थाना लालकुर्ती', 'थाना लिसाडीगेट', 'थाना महिला थाना', 'थाना मवाना', 'थाना मेडिकल कालिज', 'थाना मुण्डाली', 'थाना नौचन्दी', 'थाना बहसूमा', 'थाना परीक्षितगढ', 'थाना परतापुर', 'थाना रेलवेरोड', 'थाना सदरबाजार', 'थाना सरुरपुर', 'थाना सरधना', 'थाना ट्रान्सपोर्टनगर', 'थाना पल्लवपुरम', 'थाना गंगानगर'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'मुरादाबाद') {
                const policeStationsInAgra =['थाना भगतपुर', 'थाना सोभोजपुर', 'थाना बिलारी', 'थाना छजलैट', 'थाना सिविल लाइन्स', 'थाना डिलारी', 'थाना गलशहीद', 'थाना हज़रात नगर गर्गी', 'थाना कांठ', 'थाना कटघर', 'थाना कोतवाली', 'थाना कुंदरकी', 'थाना मजोला', 'थाना महिला थाना', 'थाना मैन्थर', 'थाना मोन्डा पांडे', 'थाना मुगल पुरा', 'थाना नागफनी', 'थाना पकवारा', 'थाना ठाकुर द्वारा'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'मुजफ्फरनगर') {
                const policeStationsInAgra =['थाना कोतवाली', 'थाना सिविल लाइन्स', 'थाना महिला थाना', 'थाना चरथावल', 'थाना पुरकाजी', 'थाना छपार', 'थाना नई मंडी', 'थाना फुँगाना', 'थाना भोरा कला', 'थाना तितावी', 'थाना रतनपुरी', 'थाना खतौली', 'थाना मंसूरपुर', 'थाना सिखेड़ा', 'थाना जानसठ', 'थाना रामराज', 'थाना शाहपुर', 'थाना भोपा', 'थाना ककरौली', 'थाना बुढाना', 'थाना मीरापुर'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'पीलीभीत') {
                const policeStationsInAgra =['थाना अमरिया', 'थाना कोतवाली', 'थाना गजरौला', 'थाना जहानाबाद', 'थाना दियुरिया कलां', 'थाना न्युरिया', 'थाना पूरनपुर', 'थाना बरखेड़ा', 'थाना बिलसंडा', 'थाना बीसलपुर', 'थाना महिला थाना', 'थाना माधोटांडा', 'थाना सुनगढ़ी', 'थाना सेहरा मऊ उत्तरी', 'थाना हजारा'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'प्रतापगढ') {
                const policeStationsInAgra =['थाना कोतवाली नगर', 'थाना अन्तु', 'थाना कोहडौर', 'थाना महिला थाना', 'थाना रानीगंज', 'थाना मानधाता', 'थाना फतनपुर', 'थाना पट्टी', 'थाना कन्धई', 'थाना आसपुर देवसरा', 'थाना जेठवारा', 'थाना महेशगंज', 'थाना बाघराय', 'थाना लालगंज', 'थाना संग्रामगढ़', 'थाना सांगीपुर', 'थाना उदयपुर', 'थाना कुण्डा', 'थाना मानिकपुर', 'थाना नवाबगंज', 'थाना हथिगवां'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'रायबरेली') {
                const policeStationsInAgra =['थाना बछरावां', 'थाना डलमऊ', 'थाना डीह', 'थाना भदोखर', 'थाना गदागंज', 'थाना गुरुबक्स्गंज', 'थाना हरचंदपुर', 'थाना मिल एरिया', 'थाना जगतपुर', 'थाना खीरो', 'थाना कोतवाली', 'थाना लालगंज', 'थाना महाराजगंज', 'थाना नसीराबाद', 'थाना सलोन', 'थाना सरेनी', 'थाना शिवगढ़', 'थाना ऊंचाहार', 'थाना महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'रामपुर') {
                const policeStationsInAgra =['थाना अज़ीम नगर', 'थाना भोट', 'थाना बिलासपुर', 'थाना सिविल लाइन्स', 'थाना गंज', 'थाना केमरी', 'थाना खजुरिया', 'थाना कोतवाली', 'थाना मिलक', 'थाना पटवाई', 'थाना शाहाबाद', 'थाना शहजादनगर', 'थाना स्वार', 'थाना टांडा', 'थाना महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'सहारनपुर') {
                const policeStationsInAgra =['थाना कोतवाली नगर', 'थाना मंडी', 'थाना कुतबशेर', 'थाना सदर बाज़ार', 'थाना कोतवाली देहात', 'थाना जनकपुरी', 'थाना फ़तेहपुर', 'थाना गागलहेडी', 'थाना चिलकाना', 'थाना महिला थाना', 'थाना देवबंद', 'थाना नागल', 'थाना बडगाव', 'थाना नकुड', 'थाना सरसावां', 'थाना रामपुर', 'थाना बेहट', 'थाना बिहारीगढ़', 'थाना मिर्ज़ापुर', 'थाना गंगोह', 'थाना नानौता', 'थाना तीतरो'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'संत कबीरनगर') {
                const policeStationsInAgra =['थाना बेलहर कला', 'थाना धर्मसिंघवा', 'थाना मेहदावल', 'थाना महुली', 'थाना खलीलाबाद', 'थाना धनघटा', 'थाना दुधारा', 'थाना बखिरा', 'थाना महिला थाना'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'भदोही') {
                const policeStationsInAgra =['थाना ऊंझ', 'थाना कोइरौना', 'थाना गोपीगंज', 'थाना औराई', 'थाना चौरी', 'थाना भदोही', 'थाना ज्ञानपुर', 'थाना सुरियावां', 'थाना दुर्गागंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'शाहजहाँपुर') {
                const policeStationsInAgra =['थाना परौर', 'थाना कलान', 'थाना मिर्जापुर', 'थाना जलालाबाद', 'थाना गढ़िया रंगीन', 'थाना मदनापुर', 'थाना अल्लाहगंज', 'थाना खुदागंज', 'थाना तिलहर', 'थाना जैतीपुर', 'थाना निगोही', 'थाना कटरा', 'थाना बन्‍डा', 'थाना पुवॉया', 'थाना सिंधौली', 'थाना खुटार', 'थाना रोजा', 'थाना सह्रामाऊ पश्चिम', 'थाना कॉठ', 'थाना सदर बाजार', 'थाना कोतवाली', 'थाना रामचंद्र मिशन', 'थाना महिला'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'श्रावस्ती') {
                const policeStationsInAgra =['थाना कोतवाली इकौना', 'थाना कोतवाली गिलौला', 'थाना कोतवाली भिनगा', 'थाना कोतवाली मल्हीपुर', 'थाना कोतवाली सिरसिया', 'थाना कोतवाली सोनवा', 'थाना महिला कोतवाली'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'सिद्धार्थनगर') {
                const policeStationsInAgra =['थाना मोहाना', 'थाना जोगिया उदयपुर', 'थाना गौलौरा', 'थाना पथरा बाज़ार', 'थाना त्रिलोकपुर', 'थाना उसका बाज़ार', 'थाना शोहरतगढ़', 'थाना कपिलवस्तु', 'थाना खेसरहा', 'थाना महिला पुलिस', 'थाना इटवा', 'थाना चिलिया', 'थाना धेबरुआ', 'थाना भवानीगंज', 'थाना मिश्रौलिया', 'थाना सिद्धार्थनगर', 'थाना डुमरियागंज', 'थाना लोटन'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'सीतापुर') {
                const policeStationsInAgra =['थाना अटरिया', 'थाना बिसवां', 'थाना हरगांव', 'थाना इमलिया सुल्तानपुर', 'थाना कमलापुर', 'थाना खैराबाद', 'थाना कोतवाली', 'थाना लहरपुर', 'थाना मछरेहटा', 'थाना महमूदाबाद', 'थाना महोली', 'थाना मानपुर', 'थाना मिश्रिख', 'थाना पिसावां', 'थाना रामकोट', 'थाना रामपुर कलां', 'थाना रामपुर मथुरा', 'थाना रेउसा', 'थाना सदरपुर', 'थाना सकरन', 'थाना सदना', 'थाना सिधौली', 'थाना तालगांव', 'थाना तम्बोर', 'थाना थानगाँव', 'थाना जी आर पी सीतापुर', 'थाना महिला सीतापुर', 'थाना नैमिषारणय', 'थाना कोतवाली देहात'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'सोनभद्र') {
                const policeStationsInAgra =['थाना अनपरा', 'थाना ओबरा', 'थाना करमा', 'थाना कोन', 'थाना घोरावल', 'थाना चोपन', 'थाना जुगैल', 'थाना दुद्धी', 'थाना पन्नूगंज', 'थाना पिपरी', 'थाना बभनी', 'थाना बीजपुर', 'थाना महिला', 'थाना मांची', 'थाना म्योरपुर', 'थाना रामपुर बरकोनिया', 'थाना रायपुर', 'थाना रॉबर्ट्सगंज', 'थाना शक्तिनगर', 'थाना शाहगंज', 'थाना हाथीनाला', 'थाना विन्डमगंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'सुल्तानपुर') {
                const policeStationsInAgra =['थाना कोतवाली नगर', 'थाना कोतवाली देहात', 'थाना महिला', 'थाना धम्मौर', 'थाना गोसाईंगंज', 'थाना हलियापुर', 'थाना कुरेभार', 'थाना कुडवार', 'थाना लम्भुआ', 'थाना चांदा', 'थाना जयसिंह पुर', 'थाना मोतिगरपुर', 'थाना करौंदीकला', 'थाना कादीपुर', 'थाना दोस्तपुर', 'थाना अखंड नगर', 'थाना बल्दीराय', 'थाना बंधुअकला', 'थाना धनपतगंज'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'उन्नाव') {
                const policeStationsInAgra =['थाना अचलगंज', 'थाना अजगैन', 'थाना आसीवन', 'थाना असोहा', 'थाना औरास', 'थाना बांगरमऊ', 'थाना बारासगवर', 'थाना बेहटा मुजावर', 'थाना बीघापुर', 'थाना बिहार', 'थाना दही', 'थाना फतेहपुर चौरासी', 'थाना गंगाघाट', 'थाना हसनगंज', 'थाना कोतवाली उन्नाव', 'थाना महिला', 'थाना माखी', 'थाना मौरावां', 'थाना पुरवा', 'थाना सफीपुर', 'थाना सोहरामऊ'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }



            if (selectedCity === 'वाराणसी') {
                const policeStationsInAgra =['थाना अदलहाट', 'थाना अहरौरा', 'थाना चिल्ह', 'थाना चुनार', 'थाना गैपुरा', 'थाना हलिया', 'थाना जमालपुर', 'थाना कच्छवा', 'थाना कटरा कोतवाली', 'थाना कोतवली सिटी', 'थाना कोतवली देहात', 'थाना लालगंज', 'थाना मरिहान', 'थाना पडरी', 'थाना विंध्याचल', 'थाना महिला', 'थाना संतनगर', 'थाना ड्रमनगंज', 'थाना राजगढ़'];
                policeStationsInAgra.forEach(station => {
                    const option = document.createElement('option');
                    option.value = station;
                    option.text = station;
                    policeStationSelect.appendChild(option);
                });
            }


            }
            
        
    </script>


<!-- javascript for ip address -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    // Function to retrieve and store the IP address
    function getIPAddress() {
      $.getJSON("https://api.ipify.org?format=json", function(data) {
        // Store the IP address in the hidden input field
        $("#ipAddress").val(data.ip);
      });
    }
    getIPAddress();

    // Function to submit the form
  </script>

<!-- javascript for ip addressv -->


<!-- below starts javascrpt for geolocation -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    var x = document.getElementById("coordinates");

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        setTimeout(getLocation, 5000);
      } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
    $.ajax({
            url: "voice complaint.php",
            type: "post",
            data: { lat: position.coords.latitude, long: position.coords.longitude},
            success: function (data) {
              var dataParsed = JSON.parse(data);
              console.log(dataParsed);
            }
          });
    }
    </script>

<!-- below starts javascrpt for geolocation -->


</body>
</html>
