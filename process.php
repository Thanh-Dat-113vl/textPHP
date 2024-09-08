<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 100px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 200%;
            text-align: left;
        }

        .container h1 {
            color: #4CAF50;
            margin-bottom: 20px;
            text-align: left;
        }

        .data-item {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
            font-weight: bold;

           
        }

        .data-item span {
            color: #333;
        }

   

        
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = htmlspecialchars($_GET['name']);
        $message = htmlspecialchars($_GET['message']);
        $email = htmlspecialchars($_GET['email']);
        $phone = htmlspecialchars($_GET['phone']);

        echo "<h1>Thank you for contacting us</h1>";
        echo "<a>We will be back in touch with you within one business day using the infomation you just provided below: </a>";
        echo "<div class='data-item'>Name:<span class=''></span> " . $name . "</div>";
        echo "<div class='data-item'>Phone:<span class=''></span> " . $phone . "</div>";
        echo "<div class='data-item'>Email:<span></span> " . $email . "</div>";
        echo "<div class='data-item'>Message:<span></span> " . $message . "</div>";
    } else {
        echo "<h2>No Data Submitted</h2>";
    }
    ?>
</div>

</body>
</html>
