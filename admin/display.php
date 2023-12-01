



<?php $pagetitle = "customer details"; ?>

<?php 
include 'header1.php';
include 'dbconnect.php';

$result = mysqli_query($con,"select * from contact");
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
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($con, "delete from contact where id=$id");
    mysqli_query($con ,"update contact set id=id-1 where id>$id");
    echo "<script>alert('contact Details Deleted Successfully');
    window.location='display.php'</script>";
}
?>


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
                    $x = mysqli_query($con, "select * from contact limit $start,$limit");

                    ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="" colspan="5">
                                    contact form details
                                </th>

                            </tr>
                        </thead>

                        <thead>
                            <tr>
                                <th>
                                    S.No
                                </th>

                                <th>
                                    Name
                                </th>
                                <th>email</th>

                                <th>operation</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($y = mysqli_fetch_array($x)) { ?>
                            <tr>
                                <td> <?php echo $y['id']; ?></td>

                                <td>

                                    <?php echo $y['name']; ?>

                                </td>
                                <td>

<?php echo $y['email']; ?>

</td>

                                



                                <td><i class=" fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#viewModal<?php echo $y['id']; ?>"
                                        style="color:blue;margin-right:10px"></i>
                                        <a href="display.php?id='<?php echo $y['id']; ?>'">
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
                                                    Name : <span><?php echo $y['name']; ?></span>

                                                </div>
                                                <div class="mb-3">
                                                Email : <span><?php echo $y['email']; ?></span>

                                                     </div>
                                                     <div class="mb-3">
                                                Subject : <span><?php echo $y['subject']; ?></span>

                                                     </div>
                                                     <div class="mb-3">
                                                Message : <span><?php echo $y['msg']; ?></span>

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