<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/login/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo-header">
            <img src="./images/codingschool.png" class="logo" width="300px" height="75px">
        </div>
</header>
                <div class="nav-login">
                    <p class="login-form">
                        LOGIN TO YOUR ACCOUNT
                    </p>
                        <?php
                            if(isset($_SESSION['u_id'])) {
                              echo  '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit">Log Out</button>';
                            } else {
                        echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="uid" placeholder="Username" />
                            <input type="password" name="pwd" placeholder="Password" />
                            <button type="submit" name="submit">Login</button>
                        </form>';
                        }
                        ?>
                    </div>
                </div>
            <div class="go-back">
                <a href="index.php">Go back to homepage</a>
            </div>
</body>
</html>