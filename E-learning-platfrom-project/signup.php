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
           <a href="signup.php">
            <div class="logo border" >
               <p class="first"><u>NKshiksha</u></p>
               <p class="second"><u>learn from home</u></p>
             </div></a>
          </div> 
          <div >
          <a class="border" href="firstpage.php">home<i class="fa-solid fa-house"></i></a>
          </div>
         
           
       </div>
        </div>
     </header>
 
    <!--login page start-->
    <div class="login">
        <div class="container">
          <div clas="row">
            <div class="card">
             <div class="card-header">
               <h1>Signup form</h1>
             </div>
                <div class="card-body">
                   <form action="signup.php" method="POST" >
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" id="Fname" class="form-control"  name="fname" size="20" placeholder="firstname">
                        
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" id="lname" class="form-control" name="lname" size="20" placeholder="lastname">
                      </div>
                   
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="email">
                        
                     </div>

                     <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" id="password" class="form-control" name="password" minlength="8" placeholder="password">
                       <i class='bx bxs-key'></i>
                       
                     </div>
                     <input type="checkbox" id="showpassword" onclick="myfunction()" ><label>Show Password</label>
                     <div class="forgot">
                     <a href="#">forgot password?</a>
                    </div>
                     <input type="submit" class="btn" name="submit" value="submit" required>
                    </form>
                    <div class="signup">
                        <p>Already Registered?<a href="Login.php">Log In</a></p>
                    </div>
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

  if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $pass= $_POST['password'];

    $query= "INSERT INTO signup values('$fname','$lname','$email','$pass')";

    $data= mysqli_query($conn,$query);

    if($data){
      echo "<div class='btn'><p style='color:white; margin-left: 350px' >Registered SuccessFully!!!</br><a href= 'login.php' style='color:yellow;'>Click here to login</a></div>";
    }
    else{
      echo "failed";
    }
  }
?>