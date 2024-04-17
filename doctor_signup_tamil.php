<?php
// தரவுத்தொகுதி இணைப்பு
$servername = "localhost";
$username = "root"; // உங்கள் MySQL பயனர் பெயர்
$password = ""; // உங்கள் MySQL கடவுச்சொல்
$database = "anganwadi"; // உங்கள் தரவுத்தொகுதி பெயர்

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("இணைப்பு தோல்வியுற்றது: " . $conn->connect_error);
}

// படிவ தரவைப் பெறவும்
$doctor_id = $_POST['doctor_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$specialization = $_POST['specialization'];

// தரவுத்தொகுதியில் தரவைச் சேர்க்கவும்
$sql = "INSERT INTO doctors (doctor_id, name, email, mobile, password, specialization) VALUES ('$doctor_id', '$name', '$email', '$mobile', '$password', '$specialization')";

if ($conn->query($sql) === TRUE) 
{
    header("Location: doctor_welcome_tamil.html");
        exit();
} else {
    echo "பயனர் கணக்கு ஏற்கனவே உள்ளது!!";
}

$conn->close();
?>
