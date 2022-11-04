<?php 
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php"; 




if(isset($_POST['del'])){

	$id = sanitize(trim($_POST['id']));

	$sql_del = "DELETE from loans where loanid = $id"; 
	$error = false;
	$result = mysqli_query($conn,$sql_del);
			if ($result)
			{
			$error = true;
			}
			

 }


 

?>


<div class="container">
    <?php include "includes/nav3.php"; ?>
	<!-- navbar ends -->
	<!-- info alert -->
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">

		<span class="glyphicon glyphicon-book"></span>
	    <strong>Loan Schemes</strong> 
	</div>

	   


	</div>
	<div class="container">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	 <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Deleted Successfully!</strong>
            </div>
            <?php } ?>
		  	<div class="row">
		  	  <a href="addloan.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-plus-sign"></span> Add a scheme</button></a>
			  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
			  	<!-- <form method="post" action="loan.php" enctype="multipart/form-data">
			  		<div class="input-group pull-right">
				      <span class="input-group-addon">
				        <button class="btn btn-success" name="search">Search</button> 
				      </span>
				      <input type="text" class="form-control" name="text">
			      </div>
			  	</form> -->
			    
			  </div><!-- /.col-lg-6 -->
  
			</div>
		  </div>

		  <table class="table table-bordered">
		
	 <thead>
	 <tr>
		
					<th>LOANID</th>
					<th>BANKNAME</th>
					<th>NAME OF THE SCHEME</th>
					<th>BENIFITS</th>	
			 
	 </tr>
</thead>

  <?php 


if(isset($_POST['search'])){
	
	$text = sanitize(trim($_POST['text']));

	 $sql = "SELECT * FROM loans where loanid = $text ";

	 $query = mysqli_query($conn, $sql);

	 

	 while($row=mysqli_fetch_array($query)){ ?>
		<tbody>
			
		<td><?php echo $row['loanid']; ?></td>
	
		<td><?php echo $row['bankname']; ?></td>
			<td><?php echo $row['scheme']; ?></td>
		<td><?php echo $row['benifits']; ?></td>
	
		<form method='post' action='loan.php'>
		<input type='hidden' value="<?php echo $row['loanid']; ?>" name='id'>
<td><button name='del' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button></td>
				
</form>
		</tbody>
	<?php  }
 }
 else{
	$sql2 = "SELECT * from loans";

	$query2 = mysqli_query($conn, $sql2); 
	$counter = 1;
	while ($row = mysqli_fetch_array($query2)) { ?>
	<tbody>
		<td><?php echo $row['loanid']; ?></td>
		<td><?php echo $row['bankname']; ?></td>
		<td><?php echo $row['scheme']; ?></td>
		<td><?php echo $row['benifits']; ?></td>
		
		<form method='post' action='loan.php'>
		<input type='hidden' value="<?php echo $row['loanid']; ?>" name='id'>
<td><button name='del' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button></td>
				
</form>
		</tbody>
	
<?php 	}
	
 } 

 ?>
		   </table>
		 
	  </div>
	</div>
	<div class="mod modal fade" id="popUpWindow">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Are you sure you want to delete?</p>
        			</div>

        			<!-- button -->
        			<div class="modal-footer ">
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-warning pull-right"  style="margin-left: 10px" class="close" data-dismiss="modal">
        					No
        				</button>&nbsp;
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-success pull-right"  class="close" data-dismiss="modal" data-toggle="modal" data-target="#info">
        					Yes
        				</button>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="modal fade" id="info">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Book deleted <span class="glyphicon glyphicon-ok"></span></p>
        			</div>

        		</div>
        	</div>
        </div>
		




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
<script>
 function Delete() {
            return confirm('Would you like to delete');
        }
</script>
</body>
</html>