<!-- HTML Form for Sending POST Request -->
<!DOCTYPE html>
<html>
<head>
    <title>POST Request Example</title>
</head>
<body>
    <h1>Send a POST Request</h1>
    <form action="process_post.php" method="post">
        <label for="message">Enter a Message:</label>
        <textarea id="message" name="message" rows="4" 
cols="50"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
        echo "<h2>$message</h2>";
    } else {
        echo "<h2>No message provided.</h2>";
    }

    ?>
</body>
</html>

