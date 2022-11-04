<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php";

if(isset($_POST['submit'])){

    $username = sanitize(trim($_POST['username']));
    $bankname = sanitize(trim($_POST['bankname']));
    
    
$sql = "INSERT INTO books(username, bankname)
                 values ('$username','$bankname')";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script>alert('New user has been added to the blacklist ');
					location.href ='bookstable.php';
					</script>";
    }
    else {
        echo "<script>alert('user not added!');
					</script>";	
    }

}

?>


<div class="container">
    <?php include "includes/nav3.php"; ?>
    
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 20px">
        <div class="jumbotron login2 col-lg-10 col-md-11 col-sm-12 col-xs-12">
       
            <p class="page-header" style="text-align: center">ADD USER</p>

            <div class="container">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addbook.php" method="post">
                    <div class="form-group">
                        <label for="Title" class="col-sm-2 control-label">USERNAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" placeholder="Enter Title" id="password" required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="Author" class="col-sm-2 control-label">BANKNAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bankname" placeholder="Enter Author" id="password" required>
                        </div>      
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  name="submit" class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info">
                                ADD USER
                            </button>
                            
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
        
    </div>
    



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
 	window.onload = function () {
		var input = document.getElementById('username').focus();
	}
 </script>
</body>
</html>