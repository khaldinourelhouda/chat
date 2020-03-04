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
             <h2>Sign in</h2>
             <p>Login to MyChat</p>
          </div>
          <div class="form-group"> 
             <label>Email</label>
             <input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
          </div>
          <div class="form-group"> 
             <label>Password</label>
             <input type="password" class="form-control" name="pass" placeholder="password" autocomplete="off" required>
          </div>
          <div class="small">Forget password ?<a href ="forgot_pass.php">Click here</a></div><br>
          <div class="form-group"> 
           
           <button type="submit" class="btn btn-primary  btn-block  btn-lg" name="sign_in" >Sign in</button>
           
          </div>
          
          <?php include ("signin_user.php"); ?>
     </form>
     <div class="text-center small "  style="color :#67428B;">Dont have an account ? <a href ="signup.php">Create one</a></div>

   </div>
 
</body>
</html>