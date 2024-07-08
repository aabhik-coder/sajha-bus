<?php
    require("connection.php");
    //json data decode
    $data = json_decode(file_get_contents('php://input'), true);
    $Origin = $data['origin'];
    $Destination = $data['destination'];
    $query="SELECT * FROM `busfare` WHERE (`Origin`='$Origin' AND `Destination`='$Destination') OR  (`Origin`='$Destination' AND `Destination`='$Origin')";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)==1) {
        while($row = mysqli_fetch_assoc($result)) {
            $data=$row["TotalFare"];
            echo $data;
        }
    } else {
        echo "Not found";
    }
    $conn->close();
?>