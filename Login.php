
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sahachalak Logint</title>
</head>
<body>
    <?php
        require("connection.php");
    ?>
    <div class="main">
        <div class="left">
            <div class="logo">
                <img src="Images/image 1.png" alt="Logo" class="logoimg">
            </div>
            <div class="bus">
                <img src="Images/bus-30-1-1024x562 1.png" alt="Bus">
            </div>
        </div>
        <div class="right">
            <div class="sahachalakLogin">
                <a href="index.php">
                    <button>Back To Homepage</button>
                </a>
            </div>
            <div class="TicketCard">
                <form  method="POST">
                    <h1>Sahachalak Login</h1>
                    <h2>Login credentials are provided by Sajha Yatayat Karyalaya</h2>
                    
                        <input type="text" name="Sajhauserid"placeholder="Enter Userid" style="margin-top: 20px;">
                        <input type="Password" name="SajhauserPass"placeholder="Enter Password">
                        <input type="submit" value="Login" id="submit" name="Login">
                </form>
            </div>
        </div>
    </div>
    
    </div>
    <?php
    if(isset($_POST['Login']))
    {
        $query="SELECT * FROM `sahachalaklogin` WHERE `userid`='$_POST[Sajhauserid]' AND `password`='$_POST[SajhauserPass]'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['AdminLoginId']=$_POST['Sajhauserid'];
            header("location:Dashboard.php");
        }
        else
        echo"<script>alert('Username or password is incorrect')</script>";
    }
    ?>
</body>
</html>