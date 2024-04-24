<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title style="color:#B20303;">Create New Account</title>
<link rel ="icon" type= "favicon/x-icon" href= "favicon.ico">
<link rel="stylesheet" href="register.css">

</head>
<body>

<img class="logo" src="GYMNITY_LOGO.png" alt="Gymnity Logo">

<div class="container">
    <h2>Create New Account</h2>
    <form action="register.php" method="post" onsubmit="return validateForm();">
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="text" name="username" id="username" placeholder="Username to Display">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Sign Up">
    </form>
    <p class="already-registered">Already registered? <a href="https://orthoscopic-cable.000webhostapp.com/Web%20Assignment/testing.php">Login</a></p>
</div>

</body>
</html>