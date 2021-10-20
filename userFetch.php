<?php
include_once 'db_connect.php';
$result = mysqli_query($connection, "SELECT * FROM register");
while ($row = mysqli_fetch_assoc($result)) {
?>

	<!-- <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div> -->
	<?php
	if ($row['status'] == 1) {
	?>
		<div class="">
			<h5><?php echo "<font color='#009900'>". $row['fullName'] .  "</font><br>"; ?> <span class="chat_date"></span></h5>

		</div><?php
			} else {
				echo "<font color='#FF0000'>" . $row['fullName'] .  "</font><br>";
			}
		}
