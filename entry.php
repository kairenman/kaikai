 <!DOCTYPE html>   
 <html>   
      <head>   
           <title>IAS 2 Hands On | PHP Login Registration Form with md5() Password Encryption</title>   
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
           <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
      </head>   
      <body>   
           <br /><br />   
           <div class="container" style="width:500px;">  
    <center><img src="bcclogin.png" width="300"></center> 
                <h3 align="center">Login and Registration Form with Password Encryption</h3>   
                <br />   
                <?php  
  if(isset($_GET["action"]) == "login")   
                {   
                ?>   
                <h3 align="center">Login</h3>   
                <br />   
                <form method="post">   
                     <label>Enter Username</label>   
                     <input type="text" name="username" class="form-control" />   
                     <br />   
                     <label>Enter Password</label>   
                     <input type="password" name="password" class="form-control" />   
                     <br />   
                     <input type="submit" name="login" value="Login" class="btn btn-info" />   
                     <br />   
                     <p align="center"><a href="index.php">Register</a></p>   
                </form>   
                <?php        
                }   
                else   
                {   
                ?>   
                <h3 align="center">Register</h3>   
                <br />   
                <form method="post">   
                     <label>Enter Username</label>   
                     <input type="text" name="username" class="form-control" />   
                     <br />   
                     <label>Enter Password</label>   
                     <input type="password" name="password" class="form-control" />   
                     <br />   
                     <input type="submit" name="register" value="Register" class="btn btn-info" />   
                     <br />   
                     <p align="center"><a href="index.php?action=login">Login</a></p>   
                </form>   
                <?php   
                }   
                ?>   
           </div>   
      </body>   
 </html>   
