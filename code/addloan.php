<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php";

if(isset($_POST['submit'])){

    $loanid = sanitize(trim($_POST['loanid']));
    $bankname = sanitize(trim($_POST['bankname']));
    $scheme = sanitize(trim($_POST['scheme']));
    $benifits = sanitize(trim($_POST['benifits']));
    
    
$sql = "INSERT INTO loans(loanid, bankname,scheme,benifits)
                 values ('$loanid','$bankname','$scheme','$benifits')";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script>alert('New loan scheme has been added  ');
					location.href ='loan.php';
					</script>";
    }
    else {
        echo "<script>alert('scheme not added!');
					</script>";	
    }

}

?>


<div class="container">
    <?php include "includes/nav3.php"; ?>
    
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 20px">
        <div class="jumbotron login2 col-lg-10 col-md-11 col-sm-12 col-xs-12">
       
            <p class="page-header" style="text-align: center">ADD LOAN SCHEME</p>

            <div class="container">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addloan.php" method="post">
                    <div class="form-group">
                        <label for="Title" class="col-sm-2 control-label">LOANID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="loanid" placeholder="Enter Title" id="loanid" required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="Author" class="col-sm-2 control-label">BANKNAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bankname" placeholder="Enter bankname" id="bankname" required>
                        </div>      
                    </div>
                   <div class="form-group">
                        <label for="Author" class="col-sm-2 control-label">SCHEME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="scheme" placeholder="Enter scheme" id="scheme" required>
                        </div>      
                    </div>
                     <div class="form-group">
                        <label for="Author" class="col-sm-2 control-label">BENIFITS</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="benifits" placeholder="Enter benifits" id="benifits" required>
                        </div>      
                    </div>
                  
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  name="submit" class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info">
                                ADD SCHEME
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
		var input = document.getElementById('loanid').focus();
	}
 </script>
</body>
</html>