<?php

include 'dbconnection.php';

session_start();

if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}


 else{
if(isset($_POST['submit']))
{

$phone=$_POST['phone'];
$newpassword= md5($_POST['newpassword']);
$sql ="SELECT phone FROM users WHERE phone=:phone";
$query= $dbh -> prepare($sql);
$query-> bindParam(':phone', $phone, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
{
$con="update users set  password=:newpassword where phone=:phone";
$chngpwd1 = $dbh->prepare($con);

$chngpwd1-> bindParam(':phone', $phone, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();

echo '<script>alert("Your password successully changed")</script>';
} else {
echo '<script>alert("Your Phone Number is incorrect")</script>';

}
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>ubc</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Reset Password</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Phone Number" name="phone" required />
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="Password" placeholder="new password" name="newpassword" required />
          </div>
          <input type="submit" value="Reset Password" name="submit" class="btn solid" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Forgot Password ?</h3>
         
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>