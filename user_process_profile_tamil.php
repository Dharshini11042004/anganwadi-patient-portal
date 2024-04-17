<?php
// பார்வையாளர்கள் படிவத்தைச் சமர்ப்பித்துள்ளதாக சரிபார்க்கவும்
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // படிவத் தரவுகளைப் பெறவும்
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $blood_group = $_POST['blood_group'];
    $parents_name = $_POST['parents_name'];
    $mobile_number = $_POST['mobile_number'];
    $school_designation = $_POST['school_designation'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $symptoms = $_POST['symptoms'];
    $medical_history = $_POST['medical_history'];
    $treatment_taken = $_POST['treatment_taken'];

    // தரவுத்தள இணைப்பு அளவுருக்கள்
    $servername = "localhost";
    $username = "root"; // உங்கள் MySQL பயனர் பெயர்
    $password = ""; // உங்கள் MySQL கடவுச்சொல்
    $dbname = "anganwadi";

    // இணைப்பை உருவாக்கவும்
    $conn = new mysqli($servername, $username, $password, $dbname);

    // இணைப்பை சரிபார்க்கவும்
    if ($conn->connect_error) {
        die("இணைப்பு தோல்வியுற்றது: " . $conn->connect_error);
    }

    // தரவுத்தளத்தில் பயனர் சுயவிவரத்தைப் புதுப்பிக்கவும்
    $sql = "UPDATE patients SET name='$name', dob='$dob', age='$age', gender='$gender', address='$address', blood_group='$blood_group', parent_name='$parents_name', mobile='$mobile_number', school_designation='$school_designation', height='$height', weight='$weight', symptoms='$symptoms', prev_medical_history='$medical_history', treatment_taken='$treatment_taken' WHERE mobile='$mobile_number'";

    if ($conn->query($sql) === TRUE) {
        echo "சுயவிவரம் வெற்றிகரமாக புதுப்பிக்கப்பட்டது";
    } else {
        echo "சுயவிவரம் புதுப்பிக்கையில் பிழை: " . $conn->error;
    }

    $conn->close();
}
?>
