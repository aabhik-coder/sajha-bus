<?php
    require("connection.php");
  $json = file_get_contents("php://input");
  $data = json_decode($json, true);
  $tickNum=$data['ticketNum'];
  $ticketTo=$data['ticketTo'];
  $query="UPDATE `ticket`SET `Status`='Expired'AND `TicketTo`='$ticketTo' WHERE `Ticketnumber`='$tickNum' ";
  $result=mysqli_query($conn,$query);
  if($result==1)
  {
    echo "1";
  }
  else
  echo "0";
?>