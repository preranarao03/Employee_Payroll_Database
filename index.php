<?php

session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
    <div class=container >
       <div style="border: 1px solid gray; width: 50%; margin-left: 20%; margin-top: 5%; background-color: #F2F4F4" >
       <div style="padding: 10px">
        <form action="index.php" method="post">
            <center><h2>Login Now</h2></center>
           <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="abc ...">
           </div> 
            <div class="form-group">
            <label for="username">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="**********">
           </div> 
            <div class="form-group">
            <br>
            <input type="submit" name="login" id="login" class="btn btn-primary btn-block" value="login">
           </div> 
        </form>
       </div>
 
       </div> 
    </div>

    </body>
</html>

<?php
include('db/config.php');

if(isset($_POST['login'])){

    $username = $_POST['username'];
    
    $password = $_POST['password'];

    $newpassword = md5($password);

    $sql = "select * from admin where username= '".$username."' and password= '".$newpassword."' ";
    $run = mysqli_query($conn,$sql);

    $count= mysqli_num_rows($run);

    if($count>0){
        $_SESSION['username']=$username;
        header('location:dashboard.php');

    }
    else{

        echo "<center><h2 style='color:red'>Username or Password is wrong!</h2></center>";
    }

    

    
}
?>