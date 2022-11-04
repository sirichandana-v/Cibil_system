<?php 
require 'includes/db-inc.php';


 ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example">
                <span class="sr-only">:</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Cibil System</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example">
            <ul class="nav navbar-nav">
                <li ><a href="admin.php">Home</a></li>
<li ><a href="viewstudents.php">Users</a></li>
<li ><a href="viewbanks.php">Banks</a></li>

                    <li><a href="borrow-student.php">View Blacklist</a></li>
			<li><a href="viewrev.php">View Applied Users</a></li>
						
		</ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>