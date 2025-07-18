<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nkshiksha</title>
    <link rel="stylesheet" href="login.css">
    <!--font awesome-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' rel='stylesheet'>
</head>
<body>

<header>
        <div class="navbar">
          <div class="nav-logo">
           <a href="login.php">
            <div class="logo border" >
               <p class="first"><u>NKshiksha</u></p>
               <p class="second"><u>learn from home</u></p>
             </div></a>
          </div> 
          <div >
           <a class="border" href="frontpage.php"><i class="fa-solid fa-house"></i></a>
          </div>
        </div>
       
     </header>

    <!--login page start-->
    <div class="login">
        <div class="container">
          <div clas="row">
            <div class="card">
             <div class="card-header">
               <h1>Login form</h1>
             </div>
                <div class="card-body">
                   <form action="#" method="POST" >

                     <div class="form-group">
                        <label >Username</label>
                        <input type="text" id="username" class="form-control" name="username" size="20" placeholder="username">
                        <i class="fa-solid fa-user"></i>
                     </div>
                     <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" id="password" class="form-control" name="password" minlength="8" placeholder="password">
                       <i class="fa-solid fa-lock"></i>

                     </div>
                     <input type="checkbox" id="showpassword" onclick="myfunction()" ><label>Show Password</label>
                     <div class="forgot">
                     <a href="#">forgot password</a>
                    </div>
                     <input type="submit" class="btn" name="login" value="Login">
                     <div class="signup">
                        <p>Don't have an account?<a href="signup.php">Sign Up</a></p>
                     </div>

                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
   <!--login end -->


</body>

<script type="text/javascript">
 
 let password= document.getElementById("password");
 let showpassword= document.getElementById("showpassword");
     showpassword.onclick = function(){
      if(showpassword.checked)
      {
        password.type = 'text';
      }
      else
      {
        password.type = 'password';
      }
      
     }


</script>
</html>

<?php
  include("db.php");

  if(isset($_POST['login']))
  {
      $un= $_POST['username'];
      $pass= $_POST['password'];

      $query= "select * from signup where email= '$un' && password='$pass' ";

      $data= mysqli_query($conn,$query);

      $total= mysqli_num_rows($data);

     // echo $total;

     if($total == 1)
     {
       //echo "login ok";
      header('location:index.php');
     }
     else{
      echo "Login failed";
     }

  }
?>