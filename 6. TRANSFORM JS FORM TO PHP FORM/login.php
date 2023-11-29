<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
</head>
<body>
    <form method="post">
        <input type="text" name="password" id="password" placeholder="Password">
        <button id="login_btn" type="submit">Log in</button>
    </form>
    <?php
        if (isset($_POST['password'])) {
            $password = $_POST['password'];

            if ($password === '1234') {
                echo '<div>This is sensitive data visible only if the user knows the correct password</div>';
            }
        }
    ?>
    <script src="js/script.js"></script>
</body>
</html>