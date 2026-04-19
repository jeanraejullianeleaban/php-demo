<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - My Favorite Fruits</title>
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
         ul {
            list-style-type: disc;
            padding-left: 20px;
        }
         li {
            margin-bottom: 5px;
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
        <h1>My Favorite Fruits</h1>

        <form method="POST">
            <p>Fruit 1: <input type="text" name="fruit1" required></p>
            <p>Fruit 2: <input type="text" name="fruit2" required></p>
            <p>Fruit 3: <input type="text" name="fruit3" required></p>
            <p>Fruit 4: <input type="text" name="fruit4" required></p>
            <p>Fruit 5: <input type="text" name="fruit5" required></p>
            <button type="submit">Save My Favorite Fruits</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fruits = [
                $_POST['fruit1'],
                $_POST['fruit2'],
                $_POST['fruit3'],
                $_POST['fruit4'],
                $_POST['fruit5']
            ];

            echo "<h3>Your Favorite Fruits:</h3><ul>";

            foreach ($fruits as $fruit) {
                echo "<li>" . (strtoupper($fruit)) . "</li>";
            }
            echo "</ul>";

             echo "<p>My favorite fruit is: <b>" . strtoupper($fruits[0]) . "</b></p>";
        }
        ?>
    </div>
        <div class="navbar">
            <a href="lab2.php">Lab 2 - Temperature</a>
        </div>
</body>
</html>