<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>நோயாளி பதிவு</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="date"], input[type="number"], input[type="password"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>நோயாளி பதிவு</h2>
        <form action="http://localhost:80/Project_Tamil/signup_process_tamil.php" method="post">
            <label for="name">பெயர்:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="dob">பிறந்த தேதிய:</label>
            <input type="date" id="dob" name="dob" required><br>
			
			<label for="age">வயது:</label>
			<input type="number" id="age" name="age" required><br>

			<label>பாலினம்:</label><br>
			<label><input type="radio" name="gender" value="male"> ஆண் </label> &nbsp;&nbsp;
			
			<label><input type="radio" name="gender" value="female"> பெண் </label><br><br>

            <label for="address">முகவரி:</label>
            <textarea id="address" name="address" required></textarea><br>

            <label for="blood_group">இரத்த வகை:</label>
            <input type="text" id="blood_group" name="blood_group" required><br>

            <label for="parent_name">பெற்றோரின் பெயர்:</label>
            <input type="text" id="parent_name" name="parent_name" required><br>

            <label for="parent_mobile">மொபைல் எண்ண:</label>
            <input type="number" id="mobile" name="mobile" required><br>
			
			<label for="password">கடவுச்சொல்லை உருவாக்கவும்:</label>
			<input type="password" id="pwd" name="pwd" required><br>
			
            <label for="school_designation">பள்ளி/பணி:</label>
            <input type="text" id="school_designation" name="school_designation" required><br>

            <label for="height"> உயரம் (செ.மீ.):</label>
            <input type="number" id="height" name="height" required><br>

            <label for="weight">எடை (கி.கி.):</label>
            <input type="number" id="weight" name="weight" required><br>

            <label for="bpm">இரத்த அழுத்தம் :</label>
            <input type="text" id="bpm" name="bpm" required><br>

            <label for="spo2">ஆக்ஸிஜனின் செறிவு:</label>
            <input type="number" id="spo2" name="spo2" required><br>

            <label for="pulse">நாடித்துடிப்பு :</label>
            <input type="number" id="pulse" name="pulse" required><br>

            <label for="symptoms">உடல்நிலை சிகிச்சைகள்:</label>
            <textarea id="symptoms" name="symptoms"></textarea><br>

            <label for="prev_medical_history">முந்தைய மருத்துவ வரலாறு:</label>
            <textarea id="prev_medical_history" name="prev_medical_history"></textarea><br>

            <label for="treatment_taken">எடுத்துக்கொண்ட சிகிச்சை:</label>
            <textarea id="treatment_taken" name="treatment_taken"></textarea><br>

            <input type="submit" value="சமர்ப்பிக்கவும்">
        </form><br><br>
		<a href="signin_tamil.html">இருக்கும் பயனர்!</a>
    </div>
</body>
</html>
