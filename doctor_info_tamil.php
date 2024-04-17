<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>மருத்துவர் விவரங்கள்</title>
    <style>
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        input[type="text"] {
            padding: 8px;
            width: 300px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

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
        <div class="container">
            <h2>மருத்துவர் விவரங்கள்</h2>
        </center>
        <form action="http://localhost:80/Project_Tamil/doctor_info_tamil.php" method="get">
            <input type="text" name="search" placeholder="ஒரு மருத்துவரைத் தேடுங்கள்...">
            <input type="submit" value="தேடு">
        </form>
        <table>
            <tr>
                <th>ஐடி</th>
                <th>பெயர்</th>
                <th>மின்னஞ்சல்</th>
                <th>மொபைல்</th>
                <th>சிறப்பு</th>
            </tr>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "anganwadi";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("தொடர்பு தோல்வி: " . $conn->connect_error);
    }

    // Fetch doctors from database
    $sql = "SELECT doctor_id, name, email, mobile, specialization FROM doctors";
    if (isset($_GET['search']) && !empty($_GET['search'])) {
        $search = $_GET['search'];
        $sql .= " WHERE name LIKE '%$search%' OR specialization LIKE '%$search%'";
    }
    $sql .= " ORDER BY name ASC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['doctor_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['specialization'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>மருத்துவர்கள் இல்லை</td></tr>";
    }

    $conn->close();
?>
        </table>
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
