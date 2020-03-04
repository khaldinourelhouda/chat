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
             <h2>Forgot Password</h2>
             <p> MyChat</p>
          </div>
          <div class="form-group"> 
             <label>Email</label>
             <input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
          </div>
          <div class="form-group"> 
             <label>Bestfriend name</label>
             <input type="text" class="form-control" name="bf" placeholder="someone" autocomplete="off" required>
          </div>
          
          <div class="form-group"> 
           
           <button type="submit" class="btn btn-primary  btn-block  btn-lg" name="submit" >Sign in</button>
           
          </div>
          
     </form>
     <div class="text-center small "  style="color :#67428B;">Back to Signin ? <a href ="signin.php">Click here</a></div>

   </div>
 <?php
 session_start();
 include ("include/connection.php");
 
 if(isset($_POST['submit'])){
 
     $email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
     $recovery_account=htmlentities(mysqli_real_escape_string($con,$_POST['bf']));
     $select="select * from users where user_email ='$email'  and forgotten_answer='$recovery_account'";
 
     $query=mysqli_query($con,$select);
     $check_user=mysqli_num_rows($query);

     if($check_user ==1){
        $_SESSION['user_email']=$email;

         echo"<script>window.open('create_password.php','_self')</script>";
    }

    else{
        
        echo"<script>alert('your email or bestfriend name is incorrect')</script>";

        echo"<script>window.open('forgot_pass.php','_self')</script>";

    }
}
 ?>
</body>
</html>