<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stunting Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result, .error {
            margin-top: 20px;
            font-size: 18px;
            text-align: center;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Stunting Calculator</h2>
    <form id="stuntingForm">
        <label for="age">Age (Months):</label>
        <input type="number" id="age" name="age" min="0" required>

        <label for="height">Height (cm):</label>
        <input type="number" id="height" name="height" step="0.1" required>

        <input type="submit" value="Calculate">
    </form>

    <div class="error" id="error"></div>
    <div class="result" id="result"></div>
    <button class="back-button float-right" onclick="history.back()">Kembali</button>

</div>

<script>
    document.getElementById('stuntingForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let age = document.getElementById('age').value;
        let height = document.getElementById('height').value;

        let errorText = "";
        let resultText = "";

        // Reset error and result messages
        document.getElementById('error').innerText = "";
        document.getElementById('result').innerText = "";

        // Validate the inputs
        if (age <= 0 || height <= 0) {
            errorText = "Error: Age and height must be positive values.";
            document.getElementById('error').innerText = errorText;
            return;
        }

        // Example threshold values for stunting
        const stuntingThresholds = {
            "12": 75, // At 12 months, stunting if height < 75 cm
            "24": 85, // At 24 months, stunting if height < 85 cm
            "36": 95  // At 36 months, stunting if height < 95 cm
        };

        // Convert age to string for comparison in stuntingThresholds
        if (stuntingThresholds[age] && height < stuntingThresholds[age]) {
            resultText = "The child is considered stunted.";
        } else {
            resultText = "The child is not considered stunted.";
        }

        // Display the result
        document.getElementById('result').innerText = resultText;
    });
    
</script>

</body>
</html>
