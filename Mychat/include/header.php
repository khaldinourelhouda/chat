<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
    border-right:1px solid #bbb;
  }
  
  li:last-child {
    border-right: none;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
</style>
<ul>
    
          <?php
                  $user=  $_SESSION['user_email'];
                  $get_user="select * from users where user_email='$user'";
                  $run_user=mysqli_query($con,$get_user);
                  $row=mysqli_fetch_array($run_user);
                  $user_name=$row['user_name'];
                  echo" <a href='home.php?user_name=$user_name' style='color:white ;' >My chat</a>";

          ?>
   
   
   <li><a style="color:white ; text-decoration:none; font-size:20px;" href="account_settings.php">Setting</a></li>
   
</ul>