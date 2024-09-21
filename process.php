<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Submitted Data</title>
</head>
<body class="d-flex justify-content-center align-items-center bg-light" style="height: 100vh;">

<div class="container bg-white p-5  border">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);

        echo "<h1 class='text-success'>Thank you for contacting us</h1>";
        echo "<p class=' py-4'>We will be back in touch with you within one business day using the information you provided below:</p>";

        echo "<dl class='row mb-3'>";
        echo "<dt class='col-sm-2'>Name:</dt> <dd class='col-sm-9'>" . $name . "</dd>";
        echo "<dt class='col-sm-2'>Phone:</dt> <dd class='col-sm-9'>" . $phone . "</dd>";
        echo "<dt class='col-sm-2'>Email address:</dt> <dd class='col-sm-9'>" . $email . "</dd>";
        echo "<dt class='col-sm-2'>Message:</dt> <dd class='col-sm-9'>" . $message . "</dd>";
        echo "</dl>";
    } else {
        echo "<h2>No Data Submitted</h2>";
    }
    ?>
</div>

<!-- Bootstrap JS & Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
