<html>
    <head>
        <title>Nkshiksha</title>
        <link rel=stylesheet href=course.css>
    </head> 
  <body>

  <header>
        <div class="navbar">
          <div class="nav-logo">
           <a href="course.php">
            <div class="logo border" >
               <p class="first"><u>NKshiksha</u></p>
               <p class="second"><u>learn from home</u></p>
             </div></a>
          </div> 
          <div >
          <a class="border" href="admin.php">Logout</a>
          </div>
         
           
       </div>
        </div>
     </header>

    <!--course page start-->
    <div class="course">
        <div class="container">
          <div clas="row">
            <div class="card">
             <div class="card-header">
               <h1>Add course</h1>
             </div>
                <div class="card-body">
                <form action="#" method="POST" >
                     <div class="form-group">
                       <label>Course Name</label>
                       <input type="text" id="cname" class="form-control" name="cname" size="20" placeholder="course name">
                       </div>
                       <div class="form-group">
                       <label>Add pdf link</label>
                       <input type="text" id="pdf" class="form-control" name="pdf" size="20" placeholder="add links">
                       </div>
                       <div class="form-group">
                       <label>Add image link</label>
                       <input type="text" id="images" class="form-control" name="images" size="20" placeholder="add links">
                       </div>
                       <input type="submit" class="btn" name="submit">
                  
                  
                    
                  

                  
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
   <!--course end -->

   <?php
  include("db.php");

  if(isset($_POST['submit']))
  {
    $cname= $_POST['cname'];
    $pdf= $_POST['pdf'];
    $image= $_POST['images'];



    $query= "INSERT INTO course (cname,pdf,images) values('$cname','$pdf','$image')";

    $data= mysqli_query($conn,$query);

    if($data){
      echo "<div class='btn'><p style='color:white; margin-left: 350px' >submit SuccessFully!!!</br></div>";
    }
    else{
      echo "failed";
    }
  }
?>




  
</body>
</html>