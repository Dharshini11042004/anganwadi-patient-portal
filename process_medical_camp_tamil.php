<?php
// படிவம் சமர்ப்பிக்கப்பட்டது என்று சரிபார்க்கவும்
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // படிவத் தகவலைப் பெற்றல்
    $venue = $_POST['venue'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $landmark = $_POST['landmark'];

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

    // புதிய மருத்துவ முகாமை விவரங்களை தரவுத்தொகுப்பில் சேர்க்கவும்
    $sql = "INSERT INTO medical_camp (venue, date, time, landmark) VALUES ('$venue', '$date', '$time', '$landmark')";
    if ($conn->query($sql) === TRUE) {
        // வெற்றிகரமாக சேர்க்கப்பட்ட பிறகு edit_medical_camp.phpக்கு திருப்பவும்
        header("Location: doctor_welcome_tamil.html");
        exit;
    } else {
        echo "பிழை: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
