<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NKshiksha</title>
    <!--css stylesheet-->
    <link rel="stylesheet" href="indexstyle.css">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
       <div class="navbar">
         <div class="nav-logo">
          <a href="index.php">
           <div class="logo border" >
              <p class="first"><u>NKshiksha</u></p>
              <p class="second"><u>learn from home</u></p>
            </div></a>
         </div> 
         <div >
          <a class="border" href="index.php">Home</a>
          <a class="border" href="#course">Course</a>
          <a class="border" href="quiz.php">Quiz</a>
          <a class="border" href="#about">About</a>
          <a class="border" href="#contact us">Contact us</a>
          <a class="border" href="frontpage.php">Logout</a>
          
         </div>
        
          
      </div>
       </div>
    </header>

    <!--header section end-->

    <!--Home section-->
    <section class="Home" id="Home">
    <div >
      <img  src="Images/logo.png" alt="NKshiksha">
      <h3> Welcome to NKshiksha</h3></div>
     <br><br>
      <p><h2>" People think of the 'E' in e-learning as 'electronic'. And certainly it's electronic.
        But here's a few more E's - Everywhere learning, Everday learning, Engaging learning, Evolving learning.. "<br>
                                                                 - Elliot Masie</h2></p>
    </div>
  </section>

    <!--Home section end-->
    
    <!--About section start-->
    <section class="about" id="about">

      <h1 class="heading">about us</h1>

      <div class="container">

          <figure class="about-image">
              <img src="Images/image1.jpg" alt="">
          </figure>

          <div class="about-content">
 
              <p>Nkshiksha is a leading e-learning platform dedicated to providing accessible 
                and high-quality education to learners worldwide. With a mission to empower individuals through lifelong learning,
                 we strive to make education more engaging, interactive, and convenient.</p>
              <p>At Nkshiksha, we envision a world where everyone has equal access to education, regardless of their background
                    or circumstances.We believe that education is the key to unlocking human 
                    potential and driving positive change in society</p>
              <a href="#" class="btn">
                  <span class="text text-1">read more</span>
                  
              </a>
          </div>

      </div>

  </section>
    <!--About section end-->
    
    <!--course section start-->
    <section class="course" id="course">
    <div class="course-heading">
        Course 
    </div>
    <div class="course-container">
    
<?php
  include("db.php");


    
   // $pdf= $_POST['pdf'];


    $query= "select * from course";

    $result= mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0) {
      $count =1;
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="course c"'.$count.'>'.'
        <img src="'. $row["images"].'" alt="html tutorial" style="width:180px; height: 180px;">'.
        '<p style="text-align: center;">'.
        '<a href="'.$row["pdf"].'" style="color: black;">'.$row['cname'].'</a></p>'.'</div>';
      }
    } else {
      echo "No Data Found!!!";
    }
  
?>
    </div>
    </section>
    
    <!--course section end-->
    
    <!--contact section start-->
    <section class="contact" id="contact us">  <!--start contact-->
      <div class="contact-heading">
      contact us  <!--contact heading-->
    </div>  
     <div class="row">     <!--start contact row-->
      
         <div class="r1">      <!--start contact us 1st column-->
          
           <form><br>
            Name:<input type="text" name="t1" placeholder="Enter your name"><br>
            Subject:<input type="text" name="t2" placeholder="Enter a subject"><br>
            E-mail:<input type="email" name="email" placeholder="Enter your email"><br>
            Message:<input type="textarea" name="message" style="height: 100px;" placeholder="how can we help you?"><br>
            <button onclick="myfunction()">send</button><br>

           </form>
           <script>
            function myfunction()
            {
              alert("your feedback sended successfully");
            }
           </script>
        </div>
     

      
        <div class="r2">
          <br>
          <h4>NKshiksha</h4>
          <p>NKshiksha,
            xyz,masat,
            silvassa-xxxxx<br>
            phone:123467899<br>
            <www class="Nkshiksha">Nkshiksha.com</www>
          </p>
          </div>
       
       </div><!--end contact us row-->
      </section>
    <!--contact section end-->

    <!--footer start-->
    <footer>
      <div class="footer-container">
       <div class="footer">
        <div class="footer-heading f1">
          <h5>About us</h5>
         E-learning platform
        </div>
        <div class="footer-heading f2">
          <h5>contact</h5>
          <p>Nkshiksha</p>
          <p>
            Nkshiksha,xyz,masat,
            silvassa-xxxxx<br>
            phone:123456789<br>
            www.Nkshiksha.com<br>
          </p>
        </div>
        <div class="footer-heading f3">
          <h5>Social media</h5>
          <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a>
          <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
          <a href="#"><i class="fa-brands fa-square-whatsapp"></i> whatsapp</a>
          <a href="#"><i class="fa-brands fa-youtube"></i> youtube</a>
          
        </div>
       </div>
     </div>
      
    </footer>
    <!--footer end-->
   


</body>
</html>
