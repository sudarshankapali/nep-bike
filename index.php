<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["quote"];

    // Uncomment or modify the database-related code if needed
    // $sql = "INSERT INTO quotes (title) VALUES ('$value')";
    // $result = mysqli_query($conn, $sql);
    
    // Check if the value is not empty before redirecting
    if ($value) {
        $_SESSION["quotes"][] = $value;
        header("Location: /");
        exit();
    }
}
$quotes = isset($_SESSION["quotes"]) ? $_SESSION["quotes"] : [];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list website</title>
</head>
<body>
    <section title="header">
<h1>hello world</h1>
</section>
<section>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="quote" required>
        <button type="submit">Save</button>
</section>
<section>
    <ul>
        <?php
        foreach ($quotes as $quote) {
            echo "<li>" . $quote . "</li>";
        }
        ?>
    </ul>
</section>
</body>
</html>