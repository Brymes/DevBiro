<?php   
    include('session.php');
    include('includes/libraries.php');
    if(isset($_COOKIE["color_scheme"])) {
        $color_scheme = $_COOKIE["color_scheme"];
    }
    else{
        $color_scheme = "light";
    }
    // Load the CSS for the correct color-scheme
    if ($color_scheme == 'dark') {
        ?><link rel="stylesheet" href="./css/style-dark.css"><?php
    } else {
        ?><link rel="stylesheet" href="./css/style-light.css"><?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevBiro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        if ($color_scheme == 'dark') {
            ?><form method="post"><button type="submit" name="light" class="theme-switch">🌞</button></form><?php
        } else {
            ?><form method="post"><button type="submit" name="dark" class="theme-switch">🌛</button></form><?php
        }
        if (isset($_POST['light'])) {
            setcookie("color_scheme", "light", strtotime( '+1 year' ));
            ?>
            <script>
                window.location.assign('index.php');
            </script>
            <?php
        }
        if (isset($_POST['dark'])) {
            setcookie("color_scheme", "dark", strtotime( '+1 year' ));
            ?>
            <script>
                window.location.assign('index.php');
            </script>
            <?php
        }
    ?>
    <?php
        if (isset($_SESSION['user_id'])) {
            include('workspace.php');
        }
        else{
            include('landingpage.php');
        }
    ?>

    <?php include('includes/footer.php'); ?>
</body>
</html>