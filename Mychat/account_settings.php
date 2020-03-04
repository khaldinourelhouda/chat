
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
  <title>Search for friends</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="../css/find_people.css">
   
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<div class="row">
   <div class="col-sm-2">
   </div>
   <?php
                  $user=  $_SESSION['user_email'];
                  $get_user="select * from users where user_email='$user'";
                  $run_user=mysqli_query($con,$get_user);
                  $row=mysqli_fetch_array($run_user);
                  $user_name=$row['user_name'];
                  $user_pass=$row['user_pass'];
                  $user_email=$row['user_email'];
                  $user_profile=$row['user_profile'];
                  $country=$row['user_country'];
                  $gender=$row['user_gender'];


          ?>
   <div class="col-sm-8">
       <form action="" method="post" enctype="multipart/form-data">
       <table class="table table-border table-hover">
           <tr align="center">
               <td colspan="6" class="active"><h2>change setting account</h2></td>
           </tr>

           <tr>
           <td style="font-weight :bold ;">change your username</td>
           <td><input type="text" name="u_name" class="form_control" require value="<?php echo $user_name ;?>"/></td>
           </tr>

           <tr><td></td>
           <td ><a class="btn btn-default "style="text-decoration:none; font-size:18px;" href="upload.php">
           <i class="fa fa-user" aria-hidden="true">change profile</i></a></td>
           </tr>

           <tr>
           <td style="font-weight :bold ;">change your email</td>
           <td><input type="text" name="u_email" class="form_control" require value="<?php echo $user_email ;?>"/></td>
           </tr>

           <tr>
           <td style="font-weight :bold ;">country</td>
           <td><select class="form-control" name="u_country" required>
              <option ><?php echo $country ;?></option>
              <option>Pakistan</option>
              <option>United State Amarica</option>
              <option>India</option>
              <option>UK</option>
              <option>Tunisia</option>
            </select>
          </td>
           </tr>

           
           <tr>
           <td style="font-weight :bold ;">gender</td>
           <td><select class="form-control" name="u_gender" required>
              <option ><?php echo $gender ;?></option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </td>
           </tr>

           <tr>
           <td style="font-weight :bold ;">forgotten password</td>
           <td><button type="button"  class="btn btn-default"  data-toggle="modal" data-target="#myModal">
           forgotten password</button>
           <div id="myModal" class="modal fade" role="dialog">
               <div class="modal-dialog">
                   <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                              <form action="" method="post" id="f">
                              <strong>what is your school best friend name</strong>
                              <textarea class="form-control" cols="83" rows="4" 
                              name="content" placeholder="Someone"></textarea><br>
                              <input class="btn btn-default" type="submit" name="sub" 
                              value="submit" style="width:100px;";><br><br>
                              <pre>answer the brove question we will ask you 
                              this question if you forgot your</pre><br><br>
                              </form>

                              <?php 
                                   if(isset($_POST['sub'])){
                                     $btn=htmlentities($_POST['content']);
                                     if($btn==''){

                                      echo"<script>alert('please enter something')</script>";

                                         echo"<script>window.open('account_settings.php','_self')</script>";
                                         exit();
                                        
                                     }
                                     else{
                                       $update="update users set forgotten_answer='$btn' where user_email='$user'";
                                       $run=mysqli_query($con,$update);
                                       if($run){
                                        echo"<script>alert('working...')</script>";

                                        echo"<script>window.open('account_settings.php','_self')</script>";
                                        exit();
                                       }
                                       else{
                                        echo"<script>alert('error while update information')</script>";

                                        echo"<script>window.open('account_settings.php','_self')</script>";
                                        exit();
                                       }
                                     }
                                    }
                              
                              ?>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                        </div>
                   </div>
               </div>
           </div>



           
           </tr>
             <tr><td></td><td><a class="btn btn-default" style=" text-decoration:none; font-size:20px;" 
             href="change_password.php"><i class="fa fa-key fa fw" aria-hidden="true"></i>change password</a></td></tr>
            
            
             <tr align="center">
           <td colspan="6">
           <input type="submit" name="update" class="btn btn-info" require value="update"/></td>
           </tr>


     </table>
       </form>

       <?php
                      if(isset($_POST['update'])){

                        $user_name=htmlentities($_POST['u_name']);
                        $user_email=htmlentities($_POST['u_email']);
                        $country=htmlentities($_POST['u_country']);
                        $gender=htmlentities($_POST['u_gender']);

                  $update="update users set user_name='$user_name' , user_email='$user_email',
                  user_country='$country' ,user_gender='$gender' where user_email='$user'";
                  $run=mysqli_query($con,$update);
                  
                  if($run){

                    echo"<script>window.open('account_settings.php','_self')</script>";
                    
                   }

                      }

          ?>
</div>
<div class="col-sm-2"> 

</div>
</div><br><br>

</body>
</html>
<?php } ?>