<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Feedback Form</title>
</head>
<body>

    <div class="main">
        <form action="submit.php" method="post">
            <input type="email" name="email" placeholder="Email"><br>
            <input type="name" name="name" placeholder="Name"><br>
            <textarea name="message" placeholder="Your message"></textarea><br>
            <button type="submit">Send</button>
        </form>
    </div>

</body>
</html>