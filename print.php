<!--
/*****************************
Developed by: Amanat Juwel
Developed at: August 30,2018 
*****************************/
-->

<?php 

$employee = $_POST['employee'];	
$designation = $_POST['designation'];	
$month = $_POST['month'];	
$num_of_days = $_POST['num_of_days'];	
$first_day_of_friday = $_POST['first_day_of_friday'];	

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance Sheet Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
  </style>
  <style type="text/css">
  	th{
  		text-align: center;
  		padding: 3px;
  	}
  	td{
  		text-align: center;
  		padding: 3px;
  	}
  	.page-margin{
  		margin-left: 5%;
		margin-right: 5%;
  	}
  	h4,p{
  		text-align: center;
  		margin: 0px;
  		padding: 0px;
  	}
  </style>
</head>
<body onload="window.print()">
<br>
<div class="container-fluid">
<div class="row">
	<div class="col-xs-4">&nbsp </div>
	<div class="col-xs-4">
		<h4>Employee Attendance Sheet</h4>
		<p><strong>Name:</strong> <?php echo $employee; ?></p>
		<p><strong>Designation:</strong> <?php echo $designation; ?></p>
		<p><strong><?php echo $month." - ".date('Y'); ?></strong></p>
		<br>
	</div>
	<div class="col-xs-4">
		<table class="table-bordered" style="width:88%;">
			<tr>
				<td style="text-align:left;">Allocated Leave:</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
			</tr>
			<tr>
				<td style="text-align:left;">Leave Taken:</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>
			</tr>
		</table>
	</div>
</div>
</div>
<div class="page-margin">

	<table class="table-bordered" style="width: 100%">
		<thead>
			<tr>
				<th style="width: 10%">Day</th>
				<th style="width: 30%">In Time</th>
				<th style="width: 30%">Out Time</th>
				<th style="width: 30%">Signature</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				for($i=1; $i<= $num_of_days; $i++){
					if($i==$first_day_of_friday){
					?>
					<tr>
						<th><?php echo $i; ?></th>
						<th colspan="3">FRIDAY</th>
					</tr>
					<?php	
						$first_day_of_friday = $first_day_of_friday+7;
					}//end of if
					else{
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<?php
				
					} // end of else
				} // end of for loop
			?>
		</tbody>
	</table>
	<br>
	<p style="font-size: 10px" class="pull-right">Software generated sheet</p>	
</div>
    
</body>
</html>
