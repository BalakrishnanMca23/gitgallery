<?php
// Start the session to check if the user is authenticated
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: pages-login.php"); // Redirect to the login page if not authenticated
    exit();
}
?>




<?php $pagetitle = "category1"; ?>

<?php
include('header1.php');
include('dbconnect.php');
?>

<?php
if(isset($_POST['submit'])){

    
    $c1 = $_POST['c1'];
   

   
    mysqli_query($con,"insert into text (`c1`) 
    values ('$c1')");
       
  



     
    

      echo "<script>window.location='category1.php';</script>";
   
}
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"> Add TEXT</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                </div>
                <div class="card-body table-responsive">

                    <form action="addcategory1.php" method="post" enctype="multipart/form-data">
                        <div class='row'>



                            <div class="mb-3 col-6">
                                <label class="form-label">text</label>
                                <input type="text" class="form-control" name="c1">
                            </div>

                            


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger text-light m-3" data-bs-dismiss="modal"><a
                                        style="color:white;" href="category1.php">Back</a></button>
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