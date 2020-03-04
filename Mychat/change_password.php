
<!DOCTYPE html>
<?php
session_start();
include ("include/connection.php");
include ("include/header.php");
if(!isset($_SESSION['user_email'])){
 header("location:signin.php");
}
else {
?>
<html>
<head>
  <title>Change Password </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="../css/find_people.css">
   
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
body { overflow-x:hidden;}

</style>

<body>
<div class="row">
   <div class="col-sm-2"></div>
          <div class="col-sm-8">
          <form method="post" enctype="multipart/form-data" action="">
                  <table class="table table-bordered table-hover">
                       <tr align="center">
                             <td colspan="6" class="active"><h2>change password</h2></td>
                        </tr>
                        
                        <tr>
                           <td style="font-weight :bold ;">current password</td>
                          <td><input type="password" name="current_pass" class="form_control" id="mypass" required 
                          placeholder="curent password"/></td>
                        </tr>

                        <tr>
                           <td style="font-weight :bold ;">new password</td>
                          <td><input type="password" name="u_pass1" class="form_control" id="mypass" required 
                          placeholder="new password"/></td>
                        </tr>

                        <tr>
                           <td style="font-weight :bold ;">confirm password</td>
                          <td><input type="password" name="u_pass2" class="form_control" id="mypass" required 
                          placeholder="confirm password"/></td>
                        </tr>

                        <tr align="center">
                             <td colspan="6">
                             <input type="submit" name="change" value="change" class="btn btn-info"></td>
                        </tr>
                  </table>
                  </form>
                  <?php
                          if(isset($_POST['change'])){
                            $c_pass=$_POST['current_pass'];
                            $pass1=$_POST['u_pass1'];
                            $pass2=$_POST['u_pass2'];

                            $user=  $_SESSION['user_email'];
                            $get_user="select * from users where user_email='$user'";
                            $run_user=mysqli_query($con,$get_user);
                            $row=mysqli_fetch_array($run_user);
                            $user_pass=$row['user_pass'];

                            if($c_pass !== $user_pass){
                                  echo"
                                  <div  class='alert alert-danger' role='alert'>
                                  <strong>your old password didn't match</strong>
                                  </div>
                                  ";
                            }
                            if($pass1 != $pass2){
                                echo"
                                  <div class='alert alert-danger' role='alert'>
                                  <strong>your new password didn't match with confirm password</strong>
                                  </div>
                                  ";
                            }
                            
                            if($pass1 == $pass2 and $c_pass == $user_pass){
                                $update=mysqli_query($con,"update users set user_pass='$pass1' where user_email='$user'");
                                echo "
                                  <div class='alert alert-danger' role='alert'>
                                  <strong>your password is changed</strong>
                                  </div>
                                  ";
                            }
                            
                          }
                  ?>
          </div>
   
</div>

  

</body>
</html>
<?php } ?>