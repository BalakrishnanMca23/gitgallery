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
include 'dbconnect.php';
$result = mysqli_query($con,"select * from text");
$limit = 10; 
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

    mysqli_query($con, "delete from text where id=$id");
    
    echo "<script>alert('text Details Deleted Successfully');
    window.location='category1.php'</script>";
}
?>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $c1 = $_POST['c1'];
    
    
    
 

    include('dbconnect.php');
        mysqli_query($con, "update text set `c1`='$c1'  where id='$id' ");
    }
      
?>
<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"> Add category1 Details</h5>
                    <a href='addcategory1.php' class="btn btn-primary float-end">+ ADD</a>
                </div>
                <div class="card-body table-responsive">
                    <?php
                    $x = mysqli_query($con, "select * from text limit $start,$limit");

                    ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="" colspan="5">
                                    category1
                                </th>

                            </tr>
                        </thead>

                        <thead>
                            <tr>
                                <th>
                                    S.No
                                </th>

                                <th>
                                    text
                                </th>
                                

                                <th>operation</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($y = mysqli_fetch_array($x)) { ?>
                            <tr>
                                <td> <?php echo $y['id']; ?></td>

                                <td>

                                    <?php echo $y['c1']; ?>

                                </td>



                                <td><i class=" fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#viewModal<?php echo $y['id']; ?>"
                                        style="color:blue;margin-right:10px"></i>
                                    <i class="fas fa-edit" style="color:green;margin-right:10px" data-bs-toggle="modal"
                                        data-bs-target="#editModal<?php echo $y['id']; ?>"></i>
                                    <a href="category1.php?id='<?php echo $y['id']; ?>'">
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






                                                <div class="mb-3 col-6">
                                                    c1 : <span><?php echo $y['c1']; ?></span>

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
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="category1.php" method="post" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="mb-3 col-6">
                                                        c1 : <input required type="text" class="form-control" name="c1"
                                                            value="<?php echo $y['c1']; ?>" />
                                                        <input type="text" class="form-control" name="id" hidden                                                            value="<?php echo $y['id']; ?> " />
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