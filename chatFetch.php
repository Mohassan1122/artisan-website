<?php
include_once 'db_connect.php';
session_start();

$new_email = $_SESSION['email'];
$result = mysqli_query($connection, "SELECT * FROM message_tb Where chat_email = '$new_email'");
while ($row = mysqli_fetch_assoc($result)) { ?>

  <div class="incoming_msg">
    <img src="img/icons/profile.png" width="50px" alt="">
    <div class="received_msg">
      <div class="received_withd_msg">
        <p><?php echo $row['chat_value'] ?></p>
        <span class="time_date"> <?php echo $row['time'] ?> | <?php echo $row['date'] ?></span>
      </div>
    </div>
  </div>
<?php
}

$result = mysqli_query($connection, "SELECT * FROM message_tb Where chat_email != '$new_email'");
while ($row = mysqli_fetch_assoc($result)) { ?>

  <div class="outgoing_msg">
    <div class="sent_msg">
      <p><?php echo $row['chat_value'] ?></p>
      <span class="time_date"><?php echo $row['time'] ?> | <?php echo $row['date'] ?></span>
    </div>
  </div><?php
  }