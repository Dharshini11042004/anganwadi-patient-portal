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

// தேடல் வினாவை செயலாக்கவும்
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search'];
    // SQL வினாவை தயாரிக்கவும்
    $stmt = $conn->prepare("SELECT ID, name, dob, age, gender, address, blood_group, parent_name, mobile, school_designation, height, weight, bpm, spo2, pulse, symptoms, prev_medical_history, treatment_taken FROM patients WHERE name LIKE ? ORDER BY ID ASC");
    $stmt->bind_param("s", $search_param);

    // தேடல் அளவியை அமைக்கவும்
    $search_param = "%$search%";

    // கூறை நிறைவேற்றவும்
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>பெயர்</th><th>பிறந்த தேதி</th><th>வயது</th><th>பாலினம்</th><th>முகவரி</th><th>இரத்த வகை</th><th>பெற்றோர் பெயர்</th><th>கைப்பேசி எண்</th><th>பள்ளி/பணி</th><th>உயரம்</th><th>எடை</th><th>இரத்த அழுத்தம்</th><th>ஆக்ஸிஜனின் செறிவு</th><th>துடிப்பு</th><th>அறிகுறிகள்</th><th>முந்தைய மருத்துவ வரலாறு</th><th>சிகிச்சை பெற்றது</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["dob"]."</td>";
            echo "<td>".$row["age"]."</td>";
            echo "<td>".$row["gender"]."</td>";
            echo "<td>".$row["address"]."</td>";
            echo "<td>".$row["blood_group"]."</td>";
            echo "<td>".$row["parent_name"]."</td>";
            echo "<td>".$row["mobile"]."</td>";
            echo "<td>".$row["school_designation"]."</td>";
            echo "<td>".$row["height"]."</td>";
            echo "<td>".$row["weight"]."</td>";
            echo "<td>".$row["bpm"]."</td>";
            echo "<td>".$row["spo2"]."</td>";
            echo "<td>".$row["pulse"]."</td>";
            echo "<td>".$row["symptoms"]."</td>";
            echo "<td>".$row["prev_medical_history"]."</td>";
            echo "<td>".$row["treatment_taken"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        // CSV ஆகப் பதிவிறக்கத் தேர்வைச் சேர்க்கவும்
        echo "<form action='download_tamil.php' method='post'>";
        echo "<input type='hidden' name='search_query' value='$search'>";
        echo "<input type='submit' value='CSV ஆகப் பதிவிறக்கவும்'>";
        echo "</form>";
    }
	else {
        echo "விளைவு எதுவும் கிடையாது.";
    }

    // கூறை மூடவும்
    $stmt->close();
}
// இணைப்பை மூடவும்
$conn->close();
?>
