<?php   
 //entry.php   
 session_start();   
 if(!isset($_SESSION["username"]))   
 {   
      header("location:index.php?action=login");   
 }   
 ?>   
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
                <h3 align="center">Welcome to Information Assurance and Security 2!</h3>   
    <h5 align="center">Encryption protects data by scrambling it with a 
randomly generated passcode,  
    called an encryption key. Without the key, third parties will be unable 
to view your data.  
    However, hackers can attempt to steal access by impersonating an 
authorized user.  
    Encryption authentication helps protect the key from bad 
actors.</h5> 
                <br />   
                <?php   
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';   
                echo '<label><a href="logout.php">Logout</a></label>';   
                ?>   
           </div>   
      </body>   
 </html>  
