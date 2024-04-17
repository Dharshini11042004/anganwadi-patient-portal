<?php
// தரவுத்தள இணைப்பு
$host = "localhost"; // உங்கள் தரவுத்தள மேற்பார்வை பகுப்புக்கு மாற்றவும்
$username = "root"; // உங்கள் தரவுத்தள பயனர் பெயரை மாற்றவும்
$password = ""; // உங்கள் தரவுத்தள கடவுச்சொல்லை மாற்றவும்
$database = "anganwadi"; // உங்கள் தரவுத்தள பெயரை மாற்றவும்

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("இணைப்பை உருவாக்க முடியவில்லை: " . mysqli_connect_error());
}

// படிவத்தை அனுப்புவதைச் செயல் படுத்து
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = $_POST['doctor_id'];
    $password = $_POST['password'];

    // மருத்துவர் நுழைவு சான்றுகளைச் சரிபார்க்கவும்
    $sql = "SELECT * FROM doctors WHERE doctor_id='$doctor_id' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // மருத்துவர் உறுதி செய்யப்பட்டார், டாஷ்போர்டு அல்லது மற்றொரு பக்கத்திற்கு மாற்றம்
        header("Location: doctor_welcome_tamil.html");
        exit();
    } else {
        // தவறான சான்றுகள், பிழை செய்தி காட்டவும்
        echo "<script>alert('தவறான மருத்துவர் அடையாள எண் அல்லது கடவுச்சொல்');</script>";
    }
}

mysqli_close($conn);
?>
