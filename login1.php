
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="logCss.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>
    <body>
        
        <form  method="POST">
            <img src="images/image.jpeg" alt="user" >
          
             <input type="text" name="username" placeholder="username" required />
             <input type="password" name="password" placeholder="password" required/>
             <button type="submit" value="login" name="login">Login</button>  
           
            
            </form>
            
    </body>
</html>


<?php
$username = "b201210601@sakarya.edu.tr";
$password = "b201210601";

if(isset($_POST['login'])){
$getUserName = $_POST['username'];
$getPassword = $_POST['password'];
if($username === $getUserName && $password === $getPassword){
    /* session_start();
     $_SESSION['USER'] = $getUserName;
     $_SESSION['PASSWORD'] = $getPassword;
     $_SESSION['LOGIN'] = true;*/
           echo "<script> alert('HOŞ GELDİN ABDULLAH HALLAH')</script>";
           echo "<script> location.replace('index.php')</script>";
  
  
}else{
    echo "<script> alert('YALNIŞ ŞİFRE')</script>";
    echo"<script>locatoin.replace('login1.php')</script>";
}
}

?>
