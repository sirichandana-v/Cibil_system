<?php 
// require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php"; 



	
if(isset($_POST['submit'])){
	
	

	$sql = "select * from borrow;";
	$query = mysqli_query($conn, $sql);

	if($query){
		echo "
			<script>
			alert('LOAN APPLICATION UNDER PROCESSING.CHECK YOUR EMAIL FOR MORE DETAILS');
			</script>
		";


	}
	else {
		echo "
		<script>
		alert('Unsuccessful');
		</script>
	";
	}

}
	
?>


<div class="container">
    <?php include "includes/nav2.php"; ?>
	<div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
		<div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
			
			<p class="page-header" style="text-align: center">APPLY LOAN</p>

			<div class="container">
				<form class="form-horizontal" role="form" action="lend-loans.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="Book Title" class="col-sm-2 control-label">LOANID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="bookTitle" id="bookTitle" placeholder="Enter loan id">
						</div>		
					</div>
					<div class="form-group">
						<label for="Book Title" class="col-sm-2 control-label">BANK NAME</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="bookTitle" id="bankname" placeholder="Enter bankname" >
						</div>		
					</div>
					<div class="form-group">
						<label for="Member Card ID" class="col-sm-2 control-label">SCHEME NAME</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="scheme" placeholder="Enter scheme name">
						</div>		
					</div>
						
					
					<div class="form-group ">
						<div class="col-sm-offset-2 col-sm-10 ">
							<button type="submit" class="btn btn-info col-lg-4 " name="submit">
								Submit
							</button>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>