<?php 
// require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php"; 


?>


<div class="container">
    <?php include "includes/nav2.php"; ?>
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
		  	<div class="row">

<!--          <a href="lend-loans.php"><button class="btn btn-success col-lg-3 col-md-4 col-sm-11 col-xs-11 button" style="margin-left: 15px;margin-bottom: 5px"><span class="glyphicon glyphicon-plus-sign"></span> APPLY</button></a>-->
			 <!--  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
			  <form method="post" action="borrowedloans.php" enctype="multipart/form-data">
			  		<div class="input-group pull-right">
				      <span class="input-group-addon">
				        <button class="btn btn-success" name="search">Search</button> 
				      </span>
				      <input type="text" class="form-control" name="text">
			      </div>
			  	</form>
			    
			  </div> -->
  
			</div>
		  </div>

		  <table class="table table-bordered">
		         <tr> <th>INDEX</th>
					<th>LOANID</th>
					<th>BANKNAME</th>
				 <th>SCHEMENAME</th>
					<th>BENIFITS</th>
				 <th>APPLY</th>
				 
				 
 </tr>    
					</thead>
					 <?php

					$sql = "SELECT * FROM loans"; 	
					
					$query = mysqli_query($conn, $sql);
					$counter = 1;
						while($row = mysqli_fetch_array($query)){
							$_SESSION['loanid'] = $row['loanid'];
							
							?>
							<tbody>
							<tr>
							<td><?php echo $counter++; ?></td>
							<td><?php echo $row['loanid'];?></td>
							<td><?php echo $row['bankname']; ?></td>
							<td><?php echo $row['scheme']; ?></td>
							<td><?php echo $row['benifits']; ?></td>  
							<td><a href="lend-loans.php" id="show" class="show-in"><button class="btn btn-success">APPLY
	
							</button>
							<input type="hidden" class="loanid" value="<?php echo $row['loanid']; ?>">
							<input type="hidden" class="bankname" value="<?php echo $row['bankname']; ?>">
							<input type="hidden" class="scheme" value="<?php echo $row['scheme']; ?>">
							<input type="hidden" class="benifits" value="<?php echo $row['benifits']; ?>">
																			
							<input type="hidden" class="purpose" value="show">
							</a></td>
							</tr>
							</tbody>
							<?php }
					
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
        				<p>Are you sure you want to delete ?</p>
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
</body>
</html>