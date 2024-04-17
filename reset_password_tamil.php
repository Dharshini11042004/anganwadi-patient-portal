<?php
// தரவுத்தள இணைப்பு
$servername = "localhost";
$username = "root"; // உங்கள் MySQL பயனர் பெயர்
$password = ""; // உங்கள் MySQL கடவுச்சொல்
$database = "anganwadi"; // உங்கள் தரவுத்தள பெயர்

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("இணைப்பு தோல்வியுற்றது: " . $conn->connect_error);
}

// படிவத் தரவுகளைப் பெறுதல்
$mobile = $_POST['mobile'];
$newPassword = $_POST['new_password'];

// தரவுத்தளத்தில் கடவுச்சொல்லை இற்றைப்படுத்துதல்
$sql = "UPDATE patients SET password='$newPassword' WHERE mobile='$mobile'";

if ($conn->query($sql) === TRUE) {
    echo "கடவுச்சொல் மீட்டமைப்பு வெற்றிகரமாக நடைபெற்றது!";
} else {
    echo "கடவுச்சொல்லை புதுப்பிப்பதில் பிழை: " . $conn->error;
}

$conn->close();
?>
