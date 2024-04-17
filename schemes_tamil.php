<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>இந்திய அரசின் திட்டங்கள்</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            color: #555;
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
		transition: margin-left .5s;
		padding: 16px;
	}

	@media screen and (max-height: 450px) {
		.sidenav {padding-top: 15px;}
		.sidenav a {font-size: 18px;}
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
            <h2>இந்திய அரசின் திட்டங்கள்</h2>
            <ul>
                <li><a href="http://localhost:80/Project_Tamil/gov_schemes_tamil.php?type=child_healthcare">குழந்தை சுகாதார மற்றும் ஆஹார திட்டங்கள்</a></li>
                <li><a href="http://localhost:80/Project_Tamil/gov_schemes_tamil.php?type=citizen_healthcare">குடிமக்களின் சுகாதார திட்டங்கள்</a></li>
            </ul>
        </div>
    </center>
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
