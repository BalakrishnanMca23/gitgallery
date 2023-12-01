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
                                $x=mysqli_query($con,"select * from image where id='28'");
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
                                $x=mysqli_query($con,"select * from image where id='29'");
                                while($y=mysqli_fetch_array($x)){
                                  echo '
    <div class="col" >
    <img src="admin/img/'.$y['img'].'"  style="width:75%; height:90%;
      padding:5%; margin-top:5%;">
    </div>';

    


   
                                }    
                                ?>   
    
  
<?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='30'");
                                while($y=mysqli_fetch_array($x)){
                                  echo '
    <div class="col" >
    <img src="admin/img/'.$y['img'].'"  style="width:75%; height:90%;
      padding:5%; margin-top:5%;">
    </div>';

    


   
                                }    
                                ?>   
  </div>
</div>

<!-- 
section -->


<div class=" text-center" style="background-color:#36F8CF;">

<div class="row" style="padding:6%;">
    
<?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='31'");
                                while($y=mysqli_fetch_array($x)){
                                  echo '
<div class="col-md-4" style="width: 25rem;">
<img src="admin/img/'.$y['img'].'" class="card-img-top" alt="..."><br><br>
  <div class="card-body">
    <h5 class="card-title">"Botanical Elegance"</h5><br>
    <p class="card-text">Step into a world of botanical wonder with our website "Botanical Elegance." Explore the breathtaking beauty of flowers in all their glory. From the delicate petals of roses to the vibrant hues of orchids, we celebrate the artistry of nature in bloom. </p>
   
</div>
</div>'
;

  


 
                              }    
                              ?>  


<?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='32'");
                                while($y=mysqli_fetch_array($x)){
                                  echo '
<div class="col-md-4" style="width: 25rem;">
<img src="admin/img/'.$y['img'].'"  class="card-img-top" alt="..."><br><br>
  <div class="card-body">
    <h5 class="card-title">"Leaves Unveiled"</h5><br>
    <p class="card-text">"Leaves Unveiled" is your gateway to the intricate world of foliage. Delve into the mesmerizing patterns, colors, and textures that define leaves from around the globe. Discover the artistry of nature as we celebrate the silent heroes that provide life to our planet.
.</p>
  
 
</div>
</div>';
}
?>
                                




                                <?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='33'");
                                while($y=mysqli_fetch_array($x)){
                                  echo '
<div class="col-md-4" style="width: 25rem;">
<img src="admin/img/'.$y['img'].'"  class="card-img-top" alt="..."><br><br>
<div class="card-body">
<h5 class="card-title">"Seasons in Focus"</h5><br>
<p class="card-text">"Seasons in Focus" is your portal to the ever-changing tapestry of the natural world. From the vibrant blooms of spring to the colorful foliage of fall, and the serene beauty of winter, we capture the essence of each season. </p>
</div>
</div>';
}
?>
</div>                     
                                
                                
                                
   
 
<!-- footer -->

<footer style="background-color: #4A42EF;color:white;">

      <div class="row">
        
      <?php 
                                include 'admin/dbconnect.php';
                                $x=mysqli_query($con,"select * from image where id='34'");
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