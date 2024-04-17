<?php
// தரவுத்தள இணைப்பு அங்காக்கம்
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

// POST தரவிலிருந்து தேடல் வினாவைப் பெறவும்
$search = $_POST['search_query'];

// SQL வினாவை தயாரிக்கவும்
$stmt = $conn->prepare("SELECT ID, name, dob, age, gender, address, blood_group, parent_name, mobile, school_designation, height, weight, bpm, spo2, pulse, symptoms, prev_medical_history, treatment_taken FROM patients WHERE name LIKE ? ORDER BY ID ASC");
$stmt->bind_param("s", $search_param);

// தேடல் அளவியை அமைக்கவும்
$search_param = "%$search%";

// கூறை நிறைவேற்றவும்
$stmt->execute();
$result = $stmt->get_result();

// CSV கோப்பு பெயரை வரையறுக்கவும்
$filename = "patient_details.csv";

// CSV கோப்பைப் பதிவிறக்குவதற்கான தலைப்புகளை அமைக்கவும்
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// CSV தரவுக்கான கோப்புப் பாயிண்டரை உருவாக்கவும்
$file = fopen('php://output', 'w');

// CSV தலைப்பு வரியை எழுதவும்
$header = array("ID", "பெயர்", "பிறந்த தேதி", "வயது", "பாலினம்", "முகவரி", "இரத்த வகை", "பெற்றோர் பெயர்", "கைப்பேசி எண்", "பள்ளி/பணி", "உயரம்", "எடை", "இரத்த அழுத்தம்", "ஆக்ஸிஜனின் செறிவு", "துடிப்பு", "அறிகுறிகள்", "முந்தைய மருத்துவ பிரச்சனை", "சிகிச்சை");
fputcsv($file, $header);

// CSV தரவுத் தார்களைக் எழுதவும்
while($row = $result->fetch_assoc()) {
    fputcsv($file, $row);
}

// கோப்புப் பாயிண்டரை மூடவும்
fclose($file);

// கூறை மற்றும் இணைப்பை மூடவும்
$stmt->close();
$conn->close();
?>
