
	<a href="logout.php">Logout</a>
	<h1>Hi There REGULAR USER XD</h1>

	<br>
	Hello, <?php echo $user_data['first_name']; ?>

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
						</tr>

						<?php

							while($row=mysqli_fetch_assoc($result))
							{
								$userid = $user_data['user_id'];
								$userfn = $user_data['first_name'];
								$userln = $user_data['last_name'];
								$userbday = $user_data['birthdate'];
								$useremail = $user_data['email'];

						?>
							<tr>
								<td><?php echo $userid ?></td>
								<td><?php echo $userfn ?></td>
								<td><?php echo $userln ?></td>
								<td><?php echo $userbday ?></td>
								<td><?php echo $useremail ?></td>
								<td><a href="edit.php?GetID=<?php echo $userid ?>">Edit</a></td>
								<td><a href="softd.php?SDel=<?php echo $userid ?>">Delete</a></td>
							</tr>
						<?php
							}
						?>

					</table>
				</div>

			</div>
		</div>
	</div>
