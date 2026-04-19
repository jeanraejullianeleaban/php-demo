<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - Temperature Converter</title>
    <style>
         body {
            font-family: Times New Roman, serif;
            margin: 20px;
            background-color: #f5d6ed;
            font-size: 18px;
        }
         .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
         h1 {
            color: #333333;
        }
         form p {
            margin-bottom: 15px;
        }
         form input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
         button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
         button:hover {
            background-color: #0056b3;
        }
        .navbar {
            position: fixed;
            right: 10px;
            bottom: 10px;
            padding: 10px;
            background-color: #f8f9fa;
            text-align: right;
        }
        .navbar a {
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Temperature Converter</h1>

    <form method="POST">
        <p>Enter Celsius: <input type="text" name="celsius" required></p>
        <button type="submit">Convert to Fahrenheit</button>
    </form>

    <?php
    function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];
        $fahrenheit = celsiusToFahrenheit($celsius);

        echo "<h3>Result:</h3>";
        echo "<p>{$celsius}°C = {$fahrenheit}°F</p>";
    }
    ?>
    </div>
    <div class="navbar">
        <a href="lab3.php">Lab 3 - ATM</a>
    </div>
</body>
</html>