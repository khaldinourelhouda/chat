
<!DOCTYPE html>
<html>
<head>
  <title>Create new account</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="signup-form">
     <form action="signup.php" method="post">
          <div class="form-header">
             <h2>Sign in</h2>
             <p>Fill out this form and start chating with your friends</p>
          </div>
          <div class="form-group"> 
             <label>Username</label>
             <input type="text" class="form-control" name="user_name" placeholder="Exemple:alisher" autocomplete="off" required>
          </div>
          <div class="form-group"> 
             <label>Password</label>
             <input type="password" class="form-control" name="user_pass" placeholder="password" autocomplete="off" required>
          </div>
          <div class="form-group"> 
             <label>Email adresse</label>
             <input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
          </div>
          <div class="form-group"> 
             <label>Country</label>
             <select class="form-control" name="user_country" required>
              <option disabled="" >select a country</option>
              <option>Pakistan</option>
              <option>United State Amarica</option>
              <option>Tunisie</option>
              <option>India</option>
              <option>UK</option>
              <option>France</option>
            </select>
          </div>
          <div class="form-group"> 
             <label>Gender</label>
             <select class="form-control" name="user_gender" required>
              <option disabled="" >select your gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group"> 
             <label class="checkbox_inline" >
              <input type="checkbox" required>I accept the <a href="#">Terme of use</a>&amp;<a href="#">Privacy Policy</a></label>
            
          </div>
          <div class="form-group"> 
           <button type="submit" class="btn btn-primary  btn-block  btn-lg" name="sign_up" >Sign up</button>
         </div>
          
         
          <?php include ("signup_user.php"); ?>
     </form>
     <div class="text-center small "  style="color :#67428B;">Already have an account  <a href ="signin.php">Signin here</a></div>

   </div>
   </div>
</body>
</html>