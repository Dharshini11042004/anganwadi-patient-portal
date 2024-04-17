<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="ta">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>அரசாங்க திட்டங்களை திருத்தவும்</title>
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
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
            .sidenav a {
                font-size: 18px;
            }
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
  <a href="doctor_welcome_tamil.html">முகப்பு பக்கம்</a><br>
  <a href="doctor_about_tamil.html">எங்களை பற்றி</a><br>
  <a href="doctor_contact_tamil.html">தொடர்பு கொள்ள</a><br>
  <a href="patient_info_tamil.html">நோயாளி பதிவு</a><br>
  <a href="http://localhost:80/Project_Tamil/edit_medical_camp_tamil.php">முகாம் அட்டவணை</a><br>
  <a href="http://localhost:80/Project_Tamil/edit_schemes_tamil.php">அரசாங்க திட்டங்கள் திருத்தம்</a><br>
  <a href="edit_doctor_profile_tamil.html">மருத்துவர் சுயவிவர திருத்தம்</a><br>
  <a href="http://localhost:80/Project/change_language.html">வெளியேறு</a><br>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; திற</span>
    <center>
        <h2>அரசாங்க திட்டங்களை திருத்தவும்</h2>
    </center>
    <!-- புதிய திட்டத்தைச் சேர்க்கும் படிவம் -->
    <form action="http://localhost:80/Project_Tamil/process_scheme_tamil.php" method="post">
        <label for="scheme_name">திட்டத்தின் பெயர்:</label>
        <input type="text" id="scheme_name" name="scheme_name" required><br><br>
        <label for="scheme_type">திட்டத்தின் வகை:</label>
        <input type="text" id="scheme_type" name="scheme_type" required><br><br>
        <label for="scheme_link">திட்டத்தின் இணைப்பு:</label>
        <input type="text" id="scheme_link" name="scheme_link" required><br><br>
        <input type="submit" value="திட்டத்தைச் சேர்க்கவும்">
    </form>

    <hr>

    <!-- நிலவுள்ள திட்டங்களை காட்சிப்படுத்தவும் -->
    <h3>தற்போதைய திட்டங்கள்:</h3>
    <ul>
        <?php
        // தரவுத்தள இணைப்பு அங்காக்கம்
        $servername = "localhost";
        $username = "root"; // உங்கள் MySQL பயனர் பெயர்
        $password = ""; // உங்கள் MySQL கடவுச்சொல்
        $dbname = "anganwadi";

        // இணைப்பை உருவாக்கவும்
        $conn = new mysqli($servername, $username, $password, $dbname);

        // இணைப்பு சரிபார்க்கவும்
        if ($conn->connect_error) {
            die("இணைப்பு தோல்வியடைந்தது: " . $conn->connect_error);
        }

        // தரவுத்தளத்தில் இருந்து தற்போதைய திட்டங்களைப் பெறவும்
        $sql = "SELECT * FROM government_schemes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li><a href='" . $row['link'] . "' target='_blank'>" . $row['name'] . "</a></li>";
            }
        } else {
            echo "<li>திட்டங்கள் கிடைக்கவில்லை</li>";
        }

        $conn->close();
        ?>
    </ul>
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
    document.getElementById("main").style.marginLeft = "0";
}
</script>
</body>
</html>
