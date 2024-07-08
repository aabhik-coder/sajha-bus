<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Sajha Bus</title>
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
                <a href="Login.php">
                     <button>Sahachalak Login</button>
                </a>
               
            </div>
            <div class="TicketCard">
                <Form class="form1" method="POST">
                    <h1>Book a Ticket</h1>
                    <h2>By continuing you agree to our user aggrement and privacy policy</h2>
                    <div class="progress">
                        <div class="dot dot1" style="background-color: #169D24;">
                            <h2>1</h2>
                        </div>
                        <div class="dot dot2">
                            <h2>2</h2>
                        </div>
                        <div class="dot dot3">
                            <h2>3</h2>
                        </div>
                    </div>
                        <select name="Origin" id="Origin"required>
                            <option value="" disabled selected hidden>Choose Origin</option>
                            <option value="Thankot">Thankot</option>
                            <option value="Check Post">Check Post</option>
                            <option value="Satungal">Satungal</option>
                            <option value="Naikap">Naikap</option>
                            <option value="Kalanki">Kalanki</option>
                            <option value="Bafal">Bafal</option>
                            <option value="Sitapaila">Sitapaila</option>
                            <option value="Swayambhu">Swayambhu</option>
                            <option value="Banasthali">Banasthali</option>
                            <option value="Balaju">Balaju</option>
                            <option value="Gongabu">Gongabu</option>
                            <option value="Samakhushi">Samakhushi</option>
                            <option value="Basundhara">Basundhara</option>
                            <option value="Narayan Gopal">Narayan Gopal</option>
                            <option value="Gangalaal">Gangalaal</option>
                            <option value="Neuro">Neuro</option>
                            <option value="Golfutar">Golfutar</option>
                            <option value="Hattigauda">Hattigauda</option>
                            <option value="Deuba chowk">Deuba Chowk</option>
                            <option value="Budanilkantha">Budanilkantha</option>
                        </select>
                        <select name="Destination" id="Destination"required>
                            <option value="" disabled selected hidden>Choose Destination</option>
                            <option value="Thankot">Thankot</option>
                            <option value="Check Post">Check Post</option>
                            <option value="Satungal">Satungal</option>
                            <option value="Naikap">Naikap</option>
                            <option value="Kalanki">Kalanki</option>
                            <option value="Bafal">Bafal</option>
                            <option value="Sitapaila">Sitapaila</option>
                            <option value="Swayambhu">Swayambhu</option>
                            <option value="Banasthali">Banasthali</option>
                            <option value="Balaju">Balaju</option>
                            <option value="Gongabu">Gongabu</option>
                            <option value="Samakhushi">Samakhushi</option>
                            <option value="Basundhara">Basundhara</option>
                            <option value="Narayan Gopal">Narayan Gopal</option>
                            <option value="Gangalaal">Gangalaal</option>
                            <option value="Neuro">Neuro</option>
                            <option value="Golfutar">Golfutar</option>
                            <option value="Hattigauda">Hattigauda</option>
                            <option value="Deuba chowk">Deuba Chowk</option>
                            <option value="Budanilkantha">Budanilkantha</option>
                        </select>
                        <input type="Text" placeholder="Enter your Name" id="Fname" name="fName"required>
                        
                        <input type="checkbox" id="offer" style="width:15px"><span>I am eligible for student/oldage offer</span>
                        
                        <Input type="button"  value="Continue" onclick="ticketmaker1()" class="submit">
                </Form>
                <Form class="form2">
                    <h1>Book a Ticket</h1>
                    <h2>By continuing you agree to our user aggrement and privacy policy</h2>
                    <div class="progress">
                        <div class="dot dot1" >
                            <h2>1</h2>
                        </div>
                        <div class="dot dot2" style="background-color: #169D24;">
                            <h2>2</h2>
                        </div>
                        <div class="dot dot3">
                            <h2>3</h2>
                        </div>
                    </div>
                        <h3>Origin: <span id="originSpan">Budanilkahtha</span></h3>
                        <h3>Destination: <span id="destinSpan">Budanilkahtha</span></h3>
                        <h3>Total Fare: Rs<span id="totalFare">100</span></h3>
                        <input type="number"placeholder="Enter Esewa Id" style="margin-top: 20px;"required>
                        <input type="password" placeholder="Enter Esewa Password"required>
                        <input type="button" value="Continue" class="submit" id="submit2" onclick="ticketmaker2()">
                </Form>
                <Form class="form3">
                    <h1>Book a Ticket</h1>
                    <h2>By continuing you agree to our user aggrement and privacy policy</h2>
                    <div class="progress">
                        <div class="dot dot1" >
                            <h2>1</h2>
                        </div>
                        <div class="dot dot2">
                            <h2>2</h2>
                        </div>
                        <div class="dot dot3"style="background-color: #169D24;">
                            <h2>3</h2>
                        </div>
                    </div>
                    <div class="mainticket">
                        <div id="qrcode">
                            <img  src="" alt="">
                        </div>
                        <div>
                            <h1>Bus Ticket</h1>
                            <h2>Ticket Number: <span class="ticketnumber">SJH123412346</span></h2><br>
                            <h2>Name: <span class="fName3">Santosh Kunwar</span></h2>
                            <h2>Origin: <span class="Origin3">Kalanki</span></h2>
                            <h2>Destination: <span class="Destination3">Budhanilkantha</span></h2>
                            <h2>Total Fare: RS <span class="Fare3">40</span></h2>
        
                        </div>
                    </div>
                        
                        <input type="button" value="Download Ticket" class="submit" style="margin-top: 20px;" onclick="download()">
                </Form>
            </div>
        </div>
    </div>
    
</body>
<script src="Ticketmaker.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/filesaver.js"></script>
</html>