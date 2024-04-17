<?php
// தரவுத்தொகுப்பு இணைப்பு அளவுருக்கள்
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

// படிவத்திலிருந்து தரவுகளைப் பெறவும்
$doctor_id = $_POST['doctor_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$specialization = $_POST['specialization'];

// மருத்துவர் profielle ஐ புதுப்பிக்க SQL உரையை தயாரிக்கவும்
$sql = "மருத்துவ நிபுணரின் தகவல்களை புதுப்பிக்க SQL க்கான முன்னரங்கம்: பெயர்=?, மின்னஞ்சல்=?, கைப்பேசி=?, நிபுணத்துவம்=? WHERE doctor_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $name, $email, $mobile, $specialization, $doctor_id);

// SQL உரையை இயக்கவும்
if ($stmt->execute()) {
    echo "மருத்துவர் சுயவிவரம் வெற்றிகரமாக புதுப்பிக்கப்பட்டுள்ளது.";
} else {
    echo "முகவரியை புதுப்பிக்கும் போது பிழை: " . $conn->error;
}

// முன்னரங்கம் மற்றும் இணைப்பை மூடவும்
$stmt->close();
$conn->close();
?>
