<?php
    require("connection.php");
    $data = json_decode(file_get_contents('php://input'), true);
    $Origin = $data['Origin'];
    $Destination = $data['Destination'];
    $Fname = $data['Fname'];
    $Fare=$data['Fare'];
    $Ticketnumber=$data['Ticketnumber'];
    $Status=$data['Status'];
    $query="INSERT INTO `ticket`(`Ticketnumber`, `Fname`, `Origin`, `Destination`, `Fare`, `Status`) VALUES ('$Ticketnumber','$Fname','$Origin','$Destination','$Fare','$Status')";
    $result=mysqli_query($conn,$query);
    if($result==0)
    echo "ERROR SENDING DATA TO DATABASE";

?>