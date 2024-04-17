<?php
// படிவம் சமர்ப்பிக்கப்பட்டதா என்பதை சரிபார்க்கவும்
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // படிவத்திலிருந்து தரவுகளை பெறவும்
    $scheme_name = $_POST['scheme_name'];
	$scheme_type = $_POST['scheme_type'];
    $scheme_link = $_POST['scheme_link'];

    // தரவுத்தள இணைப்பு அமைப்புகள்
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

    // புதிய திட்ட இணைப்பை தரவுத்தளத்தில் சேர்க்கவும்
    $sql = "INSERT INTO government_schemes (name, type, link) VALUES ('$scheme_name', '$scheme_type', '$scheme_link')";
    if ($conn->query($sql) === TRUE) {
        // வெற்றிகரமான சேர்க்கை பிறகு edit_schemes.php க்கு திருப்பவும்
        header("Location: doctor_welcome_tamil.html");
        exit;
    } else {
        echo "பிழை: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
