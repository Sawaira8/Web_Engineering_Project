<?php
session_start();

$error = "";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hardcoded admin (abhi database nahi)
    if($email === "admin@gmail.com" && $password === "admin123"){
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="padding-top:120px;">

<h2 style="text-align:center;">Admin Login</h2>

<form method="POST" style="max-width:400px;margin:auto;background:#fff;padding:20px;border-radius:10px;">
    <?php if($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <input type="email" name="email" placeholder="Admin Email" required class="box">
    <input type="password" name="password" placeholder="Password" required class="box">
    <input type="submit" name="login" value="Login" class="btn">
</form>

</body>
</html>