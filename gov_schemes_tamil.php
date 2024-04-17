<?php
// தரவுத்தள இணைப்பு அளவுகோல்
$servername = "localhost";
$username = "root"; // உங்களது MySQL பயனாளர் பெயர்
$password = ""; // உங்களது MySQL கடவுச்சொல்
$dbname = "anganwadi";

// இணைப்பை உருவாக்கவும்
$conn = new mysqli($servername, $username, $password, $dbname);

// இணைப்பை சரிபார்க்கவும்
if ($conn->connect_error) {
    die("இணைப்பு தோல்வியுற்றது: " . $conn->connect_error);
}

// திட்டங்களை வகைப்படுத்தி பெறவும்
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $sql = "government_schemes அட்டவணையில் WHERE type = '$type' க்கு விரும்பிய திட்டங்களை பெறவும்";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<center><br><br><br>";
		echo "<h1>" .$type. "</h1><br><br>";
        while ($row = $result->fetch_assoc()) {
            echo "<a href='" . $row['link'] . "' target='_blank'><h3>" . $row['name'] . "</h3></a><br><br>";
        }
		echo "</center>";
    } else {
        echo "திட்டங்கள் எதுவும் காணப்படவில்லை.";
    }
} else {
    echo "தவறான கோரிக்கை.";
}

$conn->close();
?>
