<!-- PHP Script to Process GET Request (process_get.php) -->
<!DOCTYPE html>
<html>
<head>
    <title>GET Request Processing</title>
</head>
<body>
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<h2>Hello, $name!</h2>";
    } else {
        echo "<h2>No name provided.</h2>";
    }
    if (isset($_GET['email'])) {
        $name = $_GET['email'];
        echo "<h2>Your email is: $email !</h2>";
    } else {
        echo "<h2>No email provided.</h2>";
    }
    ?>
</body>
</html>

