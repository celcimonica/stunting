<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: auto;
            background-color: white;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .section {
            margin-bottom: 30px;
        }
        h2 {
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
            margin-bottom: 15px;
            color: #4CAF50;
        }
        p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .label {
            font-weight: bold;
        }
        .skills-list {
            list-style-type: square;
            padding-left: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Biodata</h1>
    
    <!-- Personal Information -->
    <div class="section">
        <h2>Personal Information</h2>
        <p><span class="label">Full Name:</span> John Doe</p>
        <p><span class="label">Date of Birth:</span> January 1, 1990</p>
        <p><span class="label">Gender:</span> Male</p>
        <p><span class="label">Address:</span> 123 Main Street, Cityville, Country</p>
        <p><span class="label">Phone:</span> +123 456 7890</p>
        <p><span class="label">Email:</span> john.doe@example.com</p>
    </div>
    
    <!-- Education -->
    <div class="section">
        <h2>Education</h2>
        <p><span class="label">Bachelor of Science in Computer Science</span></p>
        <p>University of Technology, Cityville (2010 - 2014)</p>
        <p><span class="label">High School Diploma</span></p>
        <p>Cityville High School (2006 - 2010)</p>
    </div>
    
    <!-- Skills -->
    <div class="section">
        <h2>Skills</h2>
        <ul class="skills-list">
            <li>Web Development (HTML, CSS, JavaScript)</li>
            <li>Backend Development (PHP, Laravel, MySQL)</li>
            <li>Problem Solving & Analytical Thinking</li>
            <li>Team Collaboration & Communication</li>
        </ul>
    </div>
    <button class="back-button float-right" onclick="history.back()">Kembali</button>
    <!-- <div class="container"> -->
    <!-- <button class="back-button" margin-left: auto; onclick="history.back()">Kembali</button> -->
</div>
</div>


</body>
</html>
