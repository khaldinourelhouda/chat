<!DOCTYPE html>
<html>
<head>
  <title>Login to your account</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="signin-form">
     <form action="" method="post">
          <div class="form-header">
             <h2>create new password</h2>
             <p> MyChat</p>
          </div>
          <div class="form-group"> 
             <label>Password</label>
             <input type="password" class="form-control" name="pass1" placeholder="password" autocomplete="off" required>
          </div>
          <div class="form-group"> 
             <label>Confirm Password</label>
             <input type="password" class="form-control" name="pass2" placeholder="password" autocomplete="off" required>
          </div>
          
          <div class="form-group"> 
           
           <button type="submit" class="btn btn-primary  btn-block  btn-lg" name="change" >Change</button>
           
          </div>
          
        
     </form>
    
   </div>

   <?php
 session_start();
 include ("include/connection.php");
 if(isset($_POST['change'])){
    $user=  $_SESSION['user_email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

    if($pass1 != $pass2){
        echo"
          <div class='alert alert-danger' role='alert'>
          <strong>your new password didn't match with confirm password</strong>
          </div>
          ";
    }
    
    if($pass1 == $pass2 and $c_pass == $user_pass){
        $update=mysqli_query($con,"update users set user_pass='$pass1' where user_email='$user'");
        session_destroy();
         
        echo"<script>alert('go ahead and sign in')</script>";

        echo"<script>window.open('signin.php','_self')</script>";
    }

 }

 ?>
 
</body>
</html>