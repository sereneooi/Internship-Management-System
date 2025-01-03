<!DOCTYPE html>
<?php
	require_once 'session.php';
	require_once '../connect.php';
?>
<html lang = "eng">
	<head>
		<title>Internship portal management system</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "http://sereneooi-bucket.s3-website-us-east-1.amazonaws.com/css/jquery.dataTables.css" />
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->

<!-------------------SIDEBAR0------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR0------------------>

		<div id = "sidecontent" class = "well pull-right">
				<div class = "alert alert-info">Students Profile</div>
				<button type="button" id="generate_report" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Generate Report</button>
				<button style = "display:none;" type = "button" id = "cancel_student" class = "btn btn-warning"><span class = "glyphicon glyphicon-hand-right"></span> Cancel</button>
				<br />
				<br />
				<div id = "s_table" class = "panel panel-default">
					<div  class = " panel-heading">	
						<table id = "table" class = "table table-bordered">
							<thead>
								<tr>
									<th>company name</th>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
									<th>Gender</th>
									<th>CV</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$s_query = $conn->query("SELECT * FROM `fill_details`") or die($conn->error);
									while($s_fetch = $s_query->fetch_array()){	
								?>
								<tr>
									<td><?php echo $s_fetch['company_name']?></td>
									<td><?php echo $s_fetch['first_name']?></td>
									<td><?php echo $s_fetch['last_name']?></td>
									<td><?php echo $s_fetch['email']?></td>
									<td><?php echo $s_fetch['gender']?></td>
                                    
									<td><a href="../upload/<?php echo $s_fetch['file']?>" targe="_blank" download><?php echo $s_fetch['file']?></a></td>
									<td><center> <a href = "#" name = "<?php echo $s_fetch['id']?>" data-toggle = "modal" data-target = "#delete_student" class = "btn btn-danger id"><span class=  "glyphicon glyphicon-trash"></span> Delete</a></center></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>	
				</div>
				<div class = "modal fade" id = "delete_student" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
					<div class = "modal-dialog" role = "document">
						<div class = "modal-content ">
							<div class = "modal-body">
								<center><label class = "text-danger">Are you sure you want to delete this particulars?</label></center>
								<br />
								<center><a class = "btn btn-danger delete_student" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
							</div>
						</div>
					</div>
				</div>
				
		</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<nav class = "navbar-default" id = "footer">
		<label class = "navbar-brand pull-right">&copy; Internship portal system  <?php echo date('Y', strtotime('+8 HOURS'))?></label>
		<label class = "navbar-brand ">tremendouschatikobo@gmail.com</label>
	</nav>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script src = "../js/script.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#pic')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200)
						.css('display', 'block');
					$('.pic_hide').hide();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.id').on('click', function(){
			$id = $(this).attr('name');
			$('.delete_student').on('click', function(){
				window.location = 'delete_student.php?id=' + $id;
			});
		});

		// Handle click event for the "Generate Report" button
	        $('#generate_report').on('click', function() {
	            // Perform actions to generate the report
	            $.ajax({
	                url: 'applied_report.php', // Replace with the actual URL of your report generation script
	                method: 'POST',
	                dataType: 'html', // Change to the appropriate data type
	                success: function(response) {
	                    // Handle the response, e.g., display the report or initiate download
	                    alert('Report generated successfully.');
				window.location = 'applied_report.php';
	                },
	                error: function(xhr, status, error) {
	                    // Handle any errors
	                    alert('Error generating the report: ' + error);
	                }
	            });
        	});
	});
</script>
</html>
