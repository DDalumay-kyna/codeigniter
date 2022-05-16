
	<a href="logout.php">Logout</a>

<div class+"container">
	<div clas="row">
		<div class="col-lg-6 m-auto">
			<div class+"card mt-5">
				<table class="table table-bordered">
					<tr>
						<td> User ID </td>
						<td> User First Name</td>
						<td> User last Name</td>
						<td> birthday</td>
						<td> User email </td>
						<td> Edit </td>	
						<td> Delete </td>
						<td> Disabled </td>
						<td> enable </td>
					</tr>

					<?php

						while($row=mysqli_fetch_assoc($result))
						{
							$userid = $row['user_id'];
							$userfn = $row['first_name'];
							$userln = $row['last_name'];
							$userbday = $row['birthdate'];
							$useremail = $row['email'];

					?>
						<tr>
							<td><?php echo $userid ?></td>
							<td><?php echo $userfn ?></td>
							<td><?php echo $userln ?></td>
							<td><?php echo $userbday ?></td>
							<td><?php echo $useremail ?></td>
							<td><a href="edit.php?GetID=<?php echo $userid ?>">Edit</a></td>
							<td><a href="delete.php?Del=<?php echo $userid ?>">Delete</a></td>
							<td><a href="softd.php?SDel=<?php echo $userid ?>">Disable</a></td>
							<td><a href="enable.php?EDel=<?php echo $userid ?>">Enable</a></td>
						</tr>
					<?php
						}
					?>

				</table>
			</div>

		</div>
	</div>
</div>
