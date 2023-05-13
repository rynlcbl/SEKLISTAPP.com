<?php require('header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
    <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2" style="background:#b51d46;"><a href="admin.php" style="text-decoration:none;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-light text-uppercase mb-1" style="font-size:14px;">Admin</div>
                                <?php
                                    $sql= "select * from admin_users";
                                    if($result = mysqli_query($con, $sql)) {

                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );
                                                    
                                    // Display resultprintf("Total rows in this table :  %d\n", $rowcount);
                                }?>
                            <div class="h3 mb-0 font-weight-bold text-light"><?php echo $rowcount;?></div>
                        </div>
                        
                        <div class="col-auto">
                            <i class="fas fa-user fa-4x text-light"></i>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div> 
    </div>
</div><!-- /.container-fluid -->
</div><!-- End of Main Content -->

<?php require('footer.php'); ?>