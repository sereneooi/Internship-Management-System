<div id = "activities" class = "tab-pane fade">
	<img src = "http://serene-bucket.s3-website-us-east-1.amazonaws.com/images/calendar.png" class = "pull-left" height = "80" width = "80"/>
	<h2 class = "text-success pull-left" style='font-size:40px; color:black;'>Internship Activities</h2>
	<br style = "clear:both;"/>
	<hr style = "border-top:1px solid #000;"/>
	<h3 class = "text-primary"><?php echo date("M Y", strtotime("+8 HOURS"))?></h3>
	<br />
	<div id = "act_table" class = "panel panel-default">
				<div  class = " panel-heading">	
					<table id = "table" class = "table table-bordered">
						<thead>
							<tr>
								<th>Job Name</th>
								<th>Job Description</th>
								<th>Start</th>
								<th>End</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$act_query = $conn->query("SELECT * FROM `activity`") or die($conn->error);
							while($act_fetch = $act_query->fetch_array()){
							?>
							<tr>
								<td><?php echo $act_fetch['title']?></td>
								<td><?php echo $act_fetch['description']?></td>
								<td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['start']))."</label>"?></td>
								<td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['end']))."</label>"?></td>
								<td><center><a href = "student_login.php"?activity_id=<?php echo $act_fetch['activity_id']?>" class = "btn btn-warning"><span class=  "glyphicon glyphicon-edit"></span> Apply</a> </center></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>	
			</div>
	
</div>