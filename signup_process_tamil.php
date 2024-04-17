<?php
// தரவுத்தள இணைப்பு
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anganwadi";

// இணைப்பு உருவாக்கவும்
$conn = new mysqli($servername, $username, $password, $dbname);

// இணைப்பு சரிபார்க்கவும்
if ($conn->connect_error) {
    die("இணைப்பு தோல்வி: " . $conn->connect_error);
}

// படிவத் தரவுகளைச் சேகரிக்கவும்
$name = $_POST['name'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$blood_group = $_POST['blood_group'];
$parent_name = $_POST['parent_name'];
$mobile = $_POST['mobile'];
$pass = $_POST['pwd'];
$school_designation = $_POST['school_designation'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bpm = $_POST['bpm'];
$spo2 = $_POST['spo2'];
$pulse = $_POST['pulse'];
$symptoms = $_POST['symptoms'];
$prev_medical_history = $_POST['prev_medical_history'];
$treatment_taken = $_POST['treatment_taken'];

// தரவுத்தளத்திற்கு தரவுகளைச் சேர்க்க SQL
$sql = "INSERT INTO patients (name, dob, age, gender, address, blood_group, parent_name, mobile, password, school_designation, height, weight, bpm, spo2, pulse, symptoms, prev_medical_history, treatment_taken)
VALUES ('$name', '$dob', '$age', '$gender', '$address', '$blood_group', '$parent_name', '$mobile', '$pass', '$school_designation', '$height', '$weight', '$bpm', '$spo2', '$pulse', '$symptoms', '$prev_medical_history', '$treatment_taken')";

if ($conn->query($sql) === TRUE) {
    header('Location: user_welcome_tamil.html');
} else {
    echo "கணக்கு ஏற்கனவே உள்ளது! உள்நுழையவும்!";
}

$conn->close();
?>
