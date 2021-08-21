<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credential Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to the Personal Credential Manager</h1>
    <div class="form">
        <form autocomplete="off" action="" method="POST">
            
            <label for="acc">Account</label>
            <input type="text" name="acc" id="acc" placeholder="Netflix" required>
            <label for="usr">Username</label>
            <input type="text" name="user" id="usr" placeholder="Netflix" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" required>
            <label for="pass">Password</label>

            <img src="eyecloseN.png" alt="show password" class='passtoggle' id="show" width="27" height="20">
            
            <input type="password" name="pass" id="pass" placeholder="example" required > 
            <input type="submit" value="submit" name="submit" id="submit">
            <br>
            <p>View Saved Creds? <a href="show.php">HERE</a></p>
        </form>
    </div>
    <script src="logic.js"></script>
</body>
</html>
<?php
include 'config.php';
if(isset($_POST['submit']))
{
   include 'opensslEncryption.php';
    $acc=$_POST['acc'];
    $user=$_POST['user'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $encpass=openssl_encrypt($pass,$ciphermethod,$encKey,$opt,$encIV);
    // $encpass=password_hash($pass,PASSWORD_BCRYPT);
    $insertqry="insert into creds(account,username,email,password)value('$acc','$user','$email','$encpass')";
    $execInsertQry=mysqli_query($con,$insertqry);
    if($execInsertQry)
    {
        ?>
        <script>alert("Saved Successfully!");</script>
        <?php
    }
    else
    {
        ?>
        <script>alert("Something went wrong :|");</script>
        <?php
        echo ("Error desc: ". mysqli_error($con));
    }
}
mysqli_close($con);
?>