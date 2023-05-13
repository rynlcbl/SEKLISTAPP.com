<?php
require('header.php');
$username='';
$password='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from admin_users where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
        $username=$row['username'];
        $password=$row['password'];
	}else{
		redirect('admin.php');
	}
}

if(isset($_POST['submit'])){
    $username=get_safe_value($con,$_POST['username']);
    $password=get_safe_value($con,$_POST['password']);
    //$password=md5($password);
	$res=mysqli_query($con,"select * from admin_users where username='$username'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Username already exist";
			}
		}else{
			$msg="Username already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update admin_users set username='$username',password='$password' where id='$id'");
		}else{
			mysqli_query($con,"insert into admin_users(username,password) values('$username','$password')");
		}
		redirect('admin.php');
	}
}
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-3">
                        <div class="card-header py-4">
                        <h1 class="h3 mb-2 text-gray-800 position-absolute">Admin Form</h1><br>
                        </div>
                            <form method="post">
                                <div class="card-body card-block">
                                    <div class="form-group">
									<label for="categories" class=" form-control-label">Username</label>
                                        <input type="text" name="username" placeholder="Enter Username" class="form-control" required value="<?php echo $username?>">
                                    </div>
                                    <div class="form-group">
									<label for="categories" class=" form-control-label">Password</label>
                                        <input type="text" name="password" placeholder="Enter Password" class="form-control" required>
                                    </div>
                                <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-danger btn-block">
                                <span id="payment-button-amount">Submit</span>
                                </button>
                                <br>
                                <div style="color:red;"><?php echo $msg?></div>
                                </div>
                                </form>
                                </div>
                                
                                    </div>
                        
                    
                <!-- /.container-fluid -->

            
            <!-- End of Main Content -->

           <?php require('footer.php')?>