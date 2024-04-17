<?php
// தரவுத்தள இணைப்பு
$servername = "localhost";
$username = "root"; // உங்கள் MySQL பயனர் பெயர்
$password = ""; // உங்கள் MySQL கடவுக்குறியீடு
$database = "anganwadi"; // உங்கள் தரவுத்தளப் பெயர்

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("இணைப்பு தோல்வி: " . $conn->connect_error);
}

// படிவத் தரவுகளைப் பெற்றெடுக்கவும்
$mobile = $_POST['mobile'];
$password = $_POST['password'];

// பயனர் இருப்பதை சரிபார்க்க SQL கேள்வி
$sql = "SELECT * FROM patients WHERE mobile='$mobile' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "உள்நுழைவு வெற்றியடைந்தது!";
    // டாஷ்போர்டு அல்லது பிறப் பக்கத்திற்கு திருப்பவும்
    header('Location: user_welcome_tamil.html');
} else {
    echo "தவறான மொபைல் எண் அல்லது கடவுக்குறியீடு.";
}

$conn->close();
?>
