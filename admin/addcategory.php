

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
include('header1.php');
include('dbconnect.php');
?>
<?php
if(isset($_POST['submit'])){

    
    
    $img = $_FILES['img']['name'];
    $cleanimg = str_replace(' ', '', $img);
    $fileEx=pathinfo($cleanimg,PATHINFO_EXTENSION);
    $uniqueimg = uniqid(). '.' . $fileEx;
    move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $uniqueimg);
   

   
    mysqli_query($con,"insert into image (`img`) 
    values ('$uniqueimg')");
       
    



     
    

      echo "<script>window.location='category.php';</script>";
   
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"> Add category Details</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body table-responsive">

                    <form action="addcategory.php" method="post" enctype="multipart/form-data">
                        <div class='row'>




                            <div class="mb-3">

                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="img">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger text-light m-3" data-bs-dismiss="modal"><a
                                        style="color:white;" href="category.php">Back</a></button>
                                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                            </div>








                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>

</html>