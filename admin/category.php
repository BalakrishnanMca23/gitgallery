<?php
// Start the session to check if the user is authenticated
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: pages-login.php"); // Redirect to the login page if not authenticated
    exit();
}
?>



<?php $pagetitle = "category"; ?>

<?php 
include 'dbconnect.php';
$result = mysqli_query($con,"select * from image  ");
$limit = 5; 
$record = mysqli_num_rows($result);    
$pagi = ceil ($record / $limit);    

$start=0;
$current_page=1;
if(isset($_GET['start'])){
   $start=$_GET['start'];
   if($start<=0){
       $start=0;
       $current_page=1;
   }else{
      $current_page=$start;
      $start--;
      $start=$start*$limit;
}
}
?>


<?php
include('header1.php');
include('dbconnect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($con, "delete from image where id=$id");

    
    echo "<script>alert('image Details Deleted Successfully');
    window.location='category.php'</script>";
}
?>

<!-- upload -->
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $img = $_FILES['img']['name'];

    $imageFileType = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));

    $allowed_extensions = array('jpg', 'jpeg', 'png','avif');

    // Check if the uploaded file has an allowed extension
    if (in_array($imageFileType, $allowed_extensions)) {
        move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $img);

        $con = mysqli_connect("localhost", "root", "", "gallery");

        mysqli_query($con, "update image set `img`='$img' where id='$id'");
    } else {
        echo "Sorry, only JPG and PNG AVIF files are allowed.";
    }
}
?>





<!-- upload -->


<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"> Add category Details</h5>
                    <a href='addcategory.php' class="btn btn-primary float-end">+ ADD</a>
                </div>
                <div class="card-body table-responsive">
                    <?php
                    $x = mysqli_query($con, "select * from image limit $start,$limit");

                    ?>
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="" colspan="5">
                                    home
                                </th>

                            </tr>
                        </thead>

                        <thead>
                            <tr>
                                <th>
                                    S.No
                                </th>

                               
                                <th>image</th>

                                <th>operation</th>



                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                            while ($y = mysqli_fetch_array($x)) { ?>
                            <tr>
                                <td><?php echo $y['id']; ?></td>

                           
                                <td>

                                    <img src="img/<?php echo $y['img']; ?> " style="width:100px;height:100px;">

                                </td>



                                <td><i class=" fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#viewModal<?php echo $y['id']; ?>"
                                        style="color:blue;margin-right:10px"></i>
                                    <i class="fas fa-edit" style="color:green;margin-right:10px" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo $y['id']; ?>"></i>
                                    <a href="category.php?id='<?php echo $y['id']; ?>'">
                                        <i class="fas fa-trash" style="color:red;margin-right:10px"></i>
                                    </a>
                                </td>
                            </tr>


                            <div class="modal fade" id="viewModal<?php echo $y['id']; ?>"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"
                                                style="text-transform:uppercase">About Us</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">

                                                <div class="row">

                                                
                                                id:<input type="text" name="id" hidden value=<?php echo $y['id'];?>/>
                                                </div>






                                                <div class="mb-3">
                                                    Image : <img src="img/<?php echo $y['img']; ?>"
                                                        style="height:100px; width:100px;"></img>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editModal<?php echo $y['id']; ?>"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"
                                                style="text-transform:uppercase">Update</h1>
                                            <button type="button" name="submit" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="category.php" method="post" enctype="multipart/form-data">
                                                <div class="row">

                                                   
                                                    <div class="mb-3">

                                                    id:<input type="text" name="id" hidden value=<?php echo $y['id'];?>/>

                                                        Image :<img src="img/<?php echo $y['img']; ?>"
                                                            style="height:100px; width:100px;"></img>
                                                        <input type="file" class="form-control" name="img"
                                                            value="<?php echo $y['img']; ?>" />

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="submit" 
                                                            class="btn btn-primary">Update</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                                ?>
                            </div>
                </div>
            </div>
        </div>
        </tbody>
        </table>
        <u1 class="pagination mt-30">
            <?php 
                
                for($i=1;$i<=$pagi;$i++){
                  $class='';
                  if($current_page==$i){
                    $class='active';
                  }
                  ?>
            <li class="page-item <?php echo $class;?>"><a class="page-link"
                    href="?start=<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php }?>
        </u1>


    </div>
</div>
</div>


</div>
</div>
</div>

</div>
</div>
</div>
</div>

<?php include 'footer1.php';?>