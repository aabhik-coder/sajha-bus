<?php
    require("connection.php");
// if(isset($_POST['Continue1'])){
//     $Origin=$_POST['Origin'];
//     $Destination=$_POST['Destination'];

//     $query="SELECT * FROM `busfare` WHERE (`Origin`='$Origin' AND `Destination`='$Destination') OR  (`Origin`='$Destination' AND `Destination`='$Origin')";
//     $result=mysqli_query($conn,$query);
//     if (mysqli_num_rows($result)==1) {
//         // OUTPUT DATA OF EACH ROW
//         while($row = mysqli_fetch_assoc($result)) {
//             echo $row["TotalFare"];
//         }
//     } else {
//         echo "0 results";
//     }
    $Origin=$_POST['Origin'];
    $Destination=$_POST['Destination'];
    $fName=$_POST['fName'];
    
    $conn->close();
}