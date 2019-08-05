<!--
/*****************************
Developed by: Amanat Juwel
Developed at: August 30,2018 
*****************************/
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance Sheet Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	h1,h4{
  		text-align: center;
		margin-top: 50px;
  	}
  </style>
</head>
<body>

<div class="container">
<h4>Employee Attendance Sheet Generator</h4>
<form action="print.php" method="post" target="_blank">
  <div class="form-group">
    <label for="email">Employee</label>
    <input type="text" class="form-control input-sm" name="employee" required>
  </div>
  <div class="form-group">
    <label for="email">Designation</label>
	<input type="text" class="form-control input-sm" name="designation">
    <!--
	<select class="form-control input-sm" name="designation">
    	<option>Software Engineer</option>
    	<option>Jr. Software Engineer</option>
    	<option>Web Developer</option>
    	<option>Business Developer</option>
    	<option>Office Assistant</option>
    </select>
	-->
  </div>
  <div class="form-group">
    <label for="email">Month</label>
    <select class="form-control input-sm" name="month" id="month" >
	    <option>--select--</option>
    	<option>January</option>
    	<option>February</option>
    	<option>March</option>
    	<option>April</option>
    	<option>May</option>
    	<option>June</option>
    	<option>July</option>
    	<option>August</option>
    	<option>September</option>
    	<option>October</option>
    	<option>November</option>
    	<option>December</option>
    </select>
  </div>
  <div class="form-group">
    <label for="pwd">Number of Days <span class="month_name_span"></span></label>
	<input type="text" class="form-control input-sm" name="num_of_days" id="num_of_days" readonly >
  </div>
  <div class="form-group">
    <label for="pwd">First day of Friday <span class="month_name_span"></span></label>
    <select class="form-control input-sm" name="first_day_of_friday">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
    	<option>5</option>
    	<option>6</option>
    	<option>7</option>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<script type="text/javascript">

$(document).ready(function () {

   $("#month").change(function() {

        var month = $(this).val();
		
		$(".month_name_span").text('in '+month);
		
        if(month=='February'){
			$("#num_of_days").val(28);
		}
		else if(month=='April' || month=='June' || month=='September' || month=='November'){
			$("#num_of_days").val(30);
		}
		else{
			$("#num_of_days").val(31);
		}
    });

});
   
</script>

</body>
</html>
