<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3 - ATM Machine Simulation</title>
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
            hr {
                border: none;
                border-top: 3px solid black; /* thickness + color */
                margin-top: 20px;
                margin-bottom: 10px;
            }
    </style>
</head>
<body>
    <div class="container">
        <h1>ATM Machine Simulation</h1>

    <form method="POST">
        <p>Account Name: <input type="text" name="name" required></p>

        <p>Initial Balance: <input type="number" name="balance" required></p> 

        <p>Action: 
            <select name="action">
                <option value="check">Check Balance</option>
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select>
        </p>
        <p>Amount (for Deposit/Withdraw): <input type="number" name="amount" value="0"></p>

        <button type="submit">Submit Transaction</button>
    </form>

    <?php
    class ATM {
        private $accountName;
        private $balance;

    public function __construct($accountName, $balance) {
        $this->accountName = $accountName;
        $this->balance = $balance;
    }

    public function getAccountName() {
        return $this->accountName;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            return "insufficient";
        } else {
            $this->balance -= $amount;
            return $this->balance;
        }
    }
}

$currency = "$";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $balance = $_POST["balance"];
    $action = $_POST["action"];
    $amount = $_POST["amount"];

    $atm = new ATM($name, $balance);

    echo "<hr>";
    echo "<h3>Transaction Result</h3>";

    echo "<b>Account:</b> " . $atm->getAccountName() . "<br><br>";

    if ($action == "check") {

        echo "<b>Action:</b> Balance Check<br><br>";
        echo "<b>Current Balance:</b> " . $currency . $atm->getBalance();

    } elseif ($action == "deposit") {

        echo "<b>Action:</b> Deposit of " . $currency . $amount . "<br><br>";
        echo "<b>New Balance:</b> " . $currency . $atm->deposit($amount);

    } elseif ($action == "withdraw") {

        echo "<b>Action:</b> Withdrawal of " . $currency . $amount . "<br><br>";

        $result = $atm->withdraw($amount);

        if ($result == "insufficient") {
            echo "<b>New Balance:</b> Insufficient Balance";
        } else {
            echo "<b>New Balance:</b> " . $currency . $result;
        }
    }
}
?>
    </div>
    <div class="navbar">
            <a href="index.php">Home</a>
    </div>
</body>
</html>