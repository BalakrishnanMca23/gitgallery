<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" type="image/x-icon" href="images.jpg">
    

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="images.jpg" style="width:40px;">
    
    <div class="collapse navbar-collapse" style="padding-left:60rem ;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">about</a>
        </li>
       
      
      </ul>
     
    </div>
  </div>
</nav>

<?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='26'");
                                while($y=mysqli_fetch_array($x)){
                                  echo '
<div>
  <img src="admin/img/'.$y['img'].'" style="height:550px; width:100%;">
                                
</div>';


   
                                }    
                                ?> 

<div  class=" text-center" style="background-color:#06F396" >
<div class="row">

  
<?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='27'");
                                while($y=mysqli_fetch_array($x)){
                                  echo '
    <div class="col" >
    <img src="admin/img/'.$y['img'].'"  style="width:75%; height:80%;
      padding:5%; margin-top:5%;">
    </div>';

    


   
                                }    
                                ?> 
    <div class="col">
    <div class="container" style="padding:7%;">
    <form class="row g-3" action="form.php" method="post">
      

<center>
  <?php
include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from text where id='5'");
                                while($y=mysqli_fetch_array($x)){
                                  echo ' 
    <h4 style="color:red">'.$y['c1'].'</h4><br>';
                                }
                                ?>
   
</center>



<div class="col-md-6">
    <label >your name</label><br><br>
    <input type="text" name="name" class="form-control" placeholder="your name"
        style="height:50px; width:70%;">
</div>
<div class="col-md-6">
    <label >your email</label><br><br>
    <input type="email" name="email" class="form-control" placeholder="your email"
        style="height:57px; width:75%;">
</div>
<div class="col-md-6">
    <label>password</label><br><br>
    <input type="password" name="password" class="form-control" placeholder="Password"
        style="height:57px; width:75%;">
</div>
<div class="col-md-6">
    <label for="inputPassword2">contact</label><br><br>
    <input type="text" class="form-control" name="contact" placeholder="contact"
        style="height:57px; width:75%;">
</div>
<div class="col-md-7">
    <label for="inputPassword2">message</label><br><br>
    <input type="text" class="form-control" name="message" placeholder="type message"
        style="height:80%;">
</div>
<div>
    <input type="submit" name="submit" value="submit"
        style=" margin-top:14%;width:28%;height:35%;  ">
</div>
</form>
    </div>

                              </div>
  </div>
</div>

                              
                              
    



<!-- 
section -->
<div class=" text-center" style="background-color:#36F8CF; padding:7%;">
            <div class="row">
                <div class="col">
                    <i class="fa-solid fa-phone" style="font-size:80px;color:green;"></i><br>
                    <h2>Phone number</h2>
                    <h6>6566789877</h6>
                </div>
                <div class="col">
                    <i class="fa-solid fa-paper-plane" style="font-size:80px;color:yellow;"></i><br>
                    <h2>Email address</h2>
                    <h6>bala@gmail.com</h6>
                </div>
                <div class="col">
                    <i class="fa-solid fa-location-dot" style="font-size:80px;color:red;"></i><br>
                    <h2>Company Address</h2>
                    <h6>Sri Sastha Complex, Near Arya’s Hotel,
                        Nedunkulam Main Road, Chinna Anupanadi, Chinthamani (P.O),
                        Madurai – 625009.</h6>
                </div>
            </div>
        </div>
<!-- footer start -->

<footer style="background-color: #4A42EF;color:white;">

      <div class="row">
        
      <?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='24'");
                                while($y=mysqli_fetch_array($x)) {
                                  echo '
        <div class="col-6 col-md-6">
        <img src="admin/img/'.$y['img'].'" style="width:35%;height:35%;margin-top:10%;margin-left:10%;"><br>
          <br>
          
            <p style="margin-left: 10%; width: 70%;margin-top:20px;">
              Drinking fruit juice is always beneficial because you would find all
              the nutrients in it and you would also remain hydrated.
              Drinking fruit juice can boost the immune system
              and also be a health promoter and disease prevention as well.</p>
              <div class="icon" style="margin-left:20%;" >
                <a href="#"><i class="fa-brands fa-square-instagram" style=" color:orange;font-size: 2em;"></i> </a>
                <a href="#"><i class="fa-brands fa-facebook" style="color:skyblue;font-size: 2em;"></i> </a>
                <a href=""><i class="fa-brands fa-youtube" style=" color:red;font-size: 2em;"></i></a>
              </div>';
                                }
                                ?>
        


        </div>
        
        <div class="col-6 col-md-2">
          <h4 class="list-group-item" style="weight:30;margin-top: 40%;color:red;">About</h4><br>
          <ol style="margin-left:-15%;">

            <li class="list-group-item"><b>Home</b></li><br>
            <li class="list-group-item"><b>Contact</b></li><br>
            <li class="list-group-item"><b>About </b></li><br>
            <li class="list-group-item"><b>Gallery</b></li><br>

          
          </ol>
        </div>
        
      <?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='35'");
                                while($y=mysqli_fetch_array($x)) {
                                  echo '
        <div class="col-6 col-md-4">
          
          <div class="gallery-photos" style=" margin-top: 20%"><center>
          <h4 style="color:red;">Photo gallery </h4></center><br><br>
            <a href="pic1.jpg" >  <img src="admin/img/'.$y['img'].'" alt="Gallery" style="height:20%;width:31%;"></a>
            <a href="pic2.jpg">  <img src="admin/img/'.$y['img'].'" alt="Gallery" style="height:20%;width:31%"></a>
            <a href="pic3.jpg">  <img src="admin/img/'.$y['img'].'" alt="Gallery"style="height:20%;width:31%"></a><br><br>
            <a href="pic3.jpg">  <img src="admin/img/'.$y['img'].'" alt="Gallery" style="height:20%;width:31%"></a>
            <a href="pic2.jpg">  <img src="admin/img/'.$y['img'].'" alt="Gallery" style="height:20%;width:31%"></a>
            <a href="pic1.jpg"> <img src="admin/img/'.$y['img'].'" alt="Gallery" style="height:20%;width:31%"></a>
          </div>
        </div>';
        
      }
      ?>

      </div>
    </footer>
</body>

</html>