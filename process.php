<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            max-width: 900px;
            border: 1px solid black ;
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
            color: #4CAF50;
        }
        
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);

        echo "<h1>Thank you for contacting us</h1>";
        echo "<a >We will be back in touch with you within one business day using the infomation you just provided below: </a>";

        echo "<dl class='row'> <dt class='col-3'>Name:</dt> <dd class='col-sm-5'>" . $name . "</dd>  </dl>  ";
        echo "<dl class='row'> <dt class='col-sm-3 font-size-100px'>Phone:</dt> <dd class='col-sm-5'>" . $phone . "</dd>  </dl>  ";
        echo "<dl class='row'> <dt class='col-sm-3'>Email address:</dt> <dd class='col-sm-5'>" . $email . "</dd>  </dl>  ";
        echo "<dl class='row'> <dt class='col-sm-3'>Message:</dt> <dd class='col-sm-5'>" . $message . "</dd>  </dl>  ";



    } else {
        echo "<h2>No Data Submitted</h2>";
    }
    ?>
</div>

</body>
</html>
