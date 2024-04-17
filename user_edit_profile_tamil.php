<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>சுயவிவர திருத்தம்</title>
    <style>
      body {
        font-family: "Lato", sans-serif;
      }

      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #B6E8F8;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }

      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #111;
        display: block;
        transition: 0.3s;
      }

      .sidenav a:hover {
        color: #F2816E;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }

      #main {
        transition: margin-left 0.5s;
        padding: 16px;
      }

      @media screen and (max-height: 450px) {
        .sidenav { padding-top: 15px; }
        .sidenav a { font-size: 18px; }
      }

      footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
      }

      .container {
        width: 50%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      input[type="text"], input[type="date"], input[type="number"], textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #0056b3;
      }
    </style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
  <a href="user_welcome_tamil.html">முகப்பு பக்கம்</a><br>
  <a href="about_tamil.html">எங்களை பற்றி</a><br>
  <a href="contact_tamil.html">தொடர்பு கொள்ள</a><br>
  <a href="http://localhost:80/Project_Tamil/doctor_info_tamil.php">மருத்துவ நிபுணர் தகவல்</a><br>
  <a href="http://localhost:80/Project_Tamil/schemes_tamil.php">அரசு திட்டங்கள்</a><br>
  <a href="http://localhost:80/Project_Tamil/user_edit_profile_tamil.php">சுயவிவர திருத்தம்</a><br>
  <a href="http://localhost:80/Project_Tamil/check_medical_camp_tamil.php">மருத்துவ முகாம் தகவல்</a><br>
  <a href="http://localhost:80/Project/change_language.html">வெளியேறு</a><br>
</div>

<div id="main">
 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; திற</span>
 <center>
    <h2>சுயவிவர திருத்தம்</h2>
</center>
<div class="container">
    <form action="http://localhost:80/Project_Tamil/user_process_profile_tamil.php" method="post">

   		<label for="name">பெயர்:</label>
        <input type="text" id="name" name="name" required><br><br>
		
        <label for="dob">பிறந்த தேதி:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <label for="age">வயது:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="gender">பாலினம்:</label>
        <select id="gender" name="gender" required>
            <option value="male">ஆண்</option>
            <option value="female">பெண்</option>
            <option value="other">மற்றவை</option>
        </select><br><br>
        
        <label for="address">முகவரி:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <label for="blood_group">இரத்த வகை:</label>
        <input type="text" id="blood_group" name="blood_group" required><br><br>
        
        <label for="parents_name">பெற்றோர் பெயர்:</label>
        <input type="text" id="parents_name" name="parents_name" required><br><br>
        
        <label for="mobile_number">கைப்பேசி எண்:</label>
        <input type="text" id="mobile_number" name="mobile_number" required><br><br>
        
        <label for="school_designation">பள்ளி/பணி:</label>
        <input type="text" id="school_designation" name="school_designation" required><br><br>
        
        <label for="height">உயரம்:</label>
        <input type="text" id="height" name="height"><br><br>
        
        <label for="weight">எடை:</label>
        <input type="text" id="weight" name="weight"><br><br>
        
        <label for="symptoms">காணப்படும் அறிகுறிகள்:</label>
        <textarea id="symptoms" name="symptoms"></textarea><br><br>
        
        <label for="medical_history">முந்தைய மருத்துவ வரலாறு:</label>
        <textarea id="medical_history" name="medical_history"></textarea><br><br>
        
        <label for="treatment_taken">சிகிச்சை:</label>
        <textarea id="treatment_taken" name="treatment_taken"></textarea><br><br>
        
        <input type="submit" value="மாற்றங்களை சேமி">
    </form>
	</div>
	</div>
 <footer>
        <p>&copy; 2024 ஆன்கன்வாடி நோயாளி மையம். அனைத்து உரிமையும் பாதுகாக்கப்படுகின்றன.</p>
</footer>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>
