<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anganwadi";

// இணைப்பை உருவாக்கவும்
$conn = new mysqli($servername, $username, $password, $dbname);

// இணைப்பு சரிபார்க்கவும்
if ($conn->connect_error) {
    die("இணைப்பு தோல்வியடைந்தது: " . $conn->connect_error);
}
?>
