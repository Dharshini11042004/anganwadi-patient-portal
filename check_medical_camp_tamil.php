<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>மருத்துவ முகாமைப் பார்க்கவும்</title>
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
        <h2>மருத்துவ முகாமைப் பார்க்க</h2>
    </center>
    <div class="container">
        <!-- Medical camp details display -->
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root"; // Your MySQL username
        $password = ""; // Your MySQL password
        $dbname = "anganwadi";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("இணைப்பு தோல்வியுற்றது: " . $conn->connect_error);
        }

        // Fetch medical camp details from the database
        $sql = "SELECT * FROM medical_camp";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>இடம்</th><th>தேதி</th><th>நேரம்</th><th>சுட்டு அடையாளம்</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['venue'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "<td>" . $row['landmark'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "எந்த மருத்துவ முகாம்களும் திட்டமிடப்படவில்லை.";
        }

        $conn->close();
        ?>
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
