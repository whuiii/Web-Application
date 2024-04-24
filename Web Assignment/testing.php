<!--loginpage-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title style="color:#B20303;">Welcome</title>
<link rel="stylesheet" href="login.css">
<link rel ="icon" type= "favicon/x-icon" href= "favicon.ico">
</head>
<body>

<img class="logo" src="GYMNITY_LOGO.png" alt="Gymnity Logo">

<div class="container">
    <h2>Welcome</h2>
    <form action="login.php" method="post">
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

        <input type="text" name="username" id="username" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
    <div class="center"> <!-- Center the "Already registered?" link -->
        <p class="already-registered">Create a New Account? <a href="https://orthoscopic-cable.000webhostapp.com/Web%20Assignment/register_html.php">here</a></p>
    </div>
</div>

</body>
</html>
