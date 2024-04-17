<?php
// தரவுத்தள இணைப்பு
$servername = "localhost";
$username = "root"; // உங்கள் MySQL பயனர் பெயர்
$password = ""; // உங்கள் MySQL கடவுச்சொல்
$database = "anganwadi"; // உங்கள் தரவுத்தள பெயர்

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("இணைப்பு தோல்வியடைந்தது: " . $conn->connect_error);
}

// படிவ தகவல்களை பெறுங்கள்
$mobile = $_POST['mobile'];
$newPassword = $_POST['new_password'];

// தரவுத்தளத்தில் கடவுச்சொல்லை புதுப்பிக்க
$sql = "UPDATE patients SET password='$newPassword' WHERE mobile='$mobile'";

if ($conn->query($sql) === TRUE) {
    echo "<?php
// தரவுத்தள இணைப்பு
$servername = "localhost";
$username = "root"; // உங்கள் MySQL பயனர் பெயர்
$password = ""; // உங்கள் MySQL கடவுச்சொல்
$database = "anganwadi"; // உங்கள் தரவுத்தள பெயர்

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("இணைப்பு தோல்வியடைந்தது: " . $conn->connect_error);
}

// படிவ தகவல்களை பெறுங்கள்
$mobile = $_POST['mobile'];
$newPassword = $_POST['new_password'];

// தரவுத்தளத்தில் கடவுச்சொல்லை புதுப்பிக்க
$sql = "UPDATE patients SET password='$newPassword' WHERE mobile='$mobile'";

if ($conn->query($sql) === TRUE) {
    echo "கடவுச்சொல் மீளமைவு வெற்றிகரமாக முடிந்தது!";
} else {
    echo "கடவுச்சொல்லை புதுப்பிக்கும் போது பிழை: " . $conn->error;
}

$conn->close();
?>
!";
} else {
    echo "கடவுச்சொல்லை புதுப்பிக்கும் போது பிழை: " . $conn->error;
}

$conn->close();
?>
