<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Laboratory</title>
    <style>
        body {
            font-family: Times New Roman, serif;
            margin: 20px;
            background-color: #f5d6ed;
            text-align: center;
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
        .links {
            margin-top: 20px;
        }
        .links a {
            display: inline;  
            margin-right: 20px;
            text-decoration: none;
            color: #000000;
        }
        .links a:hover {
            text-decoration: underline;
        }
        .links a:not(:last-child)::after {
            content: " |";
            margin-left: 10px;
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
    <h1>Welcome to the my PHP Laboratory</h1>
    <p>Jean Rae Julliane A. Leaban  |  BSIT 2-A  |  ITEC-65 </p>
    <p>You can see here the link of my 3 php laboratories:</p>

    <div class="links"> 
        <a href="lab1.php">Fruits</a>
        <a href="lab2.php">Temperature</a>
        <a href="lab3.php">ATM</a> 
    </div>
</div>
    <div class="navbar">
        <a href="lab1.php">Lab 1 - Fruits</a>
    </div>

</body>
</html>