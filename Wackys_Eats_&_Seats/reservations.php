<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device width, initial-scale=1.0">
        <title> Wacky's Food House </title>

        <!----- font awesome cdn link ----->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!------ swiper cdn link ----->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <!----- custom css file link ------>
        <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
        <!------ header ------->
        <header>
            <a href="index.php"><img src="images/Wackys Food House Logo.png"></a>

            <nav class="navbar"> 
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a class="active" id="reservation-btn" href="reservations.php">Reservation</a>
                <a href="about.php">About Us</a>
            </nav>

            <div class="icons">
                <i class="fas fa-bars" id="menu-bars"></i>
            </div>
        </header>

        <!------ reservations ------->
        <section class="reservations">
            <h3 class="sub-heading"> Make a Reservation </h3> 
            <h1 class="heading"> Where would you like to book your reservation? </h3> 

            <nav class="navbar"> 
                <a class="active" href="reservations.php">Food House</a>
                <a href="events.php">Receptions</a>
            </nav>

            <form action="reservations-handling.php" method="POST">
                <div class="inputBox">
                    <label for="table-selected">Choose the number of table you want to dine in:</label>
                    <select id="table-selected" name="table" required>
                        <option value="Table 1">Table 1</option>
                        <option value="Table 2">Table 2</option>
                        <option value="Table 3">Table 3</option>
                        <option value="Table 4">Table 4</option>
                        <option value="Table 5">Table 5</option>
                        <option value="Table 6">Table 6</option>
                        <option value="Table 7">Table 7</option>
                        <option value="Table 8">Table 8</option>
                    </select>
                    <div class="indoorLayout">
                        <img src="images/Layout 1 (2).png" alt="Indoor Layout">   
                    </div>
                    <nav class="navbar"> 
                        <a class="active" href=""> Indoor </a>
                        <a href="reservations-seats.php"> Outdoor </a>
                    </nav>
                </div>
                <div class="inputBox">
                    <div class="input-name">
                        <span>Name</span>
                        <input type="text" placeholder="Enter your name" name="name" required>
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>Email</span>
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input">
                        <span>Phone Number</span>
                        <input type="tel" pattern="[0-9]{11}" placeholder="Enter a 11-digit phone number" name="phone" required>
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input-name">
                        <span>Number of People (pax)</span>
                        <input type="number" placeholder="Enter the number of people" name="pax" required>
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>Date</span>
                        <input type="date" placeholder="Enter the date" name="date" required>
                    </div>
                    <div class="input">
                        <span>Time</span>
                        <input type="time" placeholder="Enter the time" name="time" required>
                    </div>
                </div>
                <input type="submit" value="Submit" class="btn" onclick="openPopup()">
            </form>
        </section>

        <!------- footer --------->
        <section class="footer">
            <div class="box-container">
                 <div class="box">
                     <h3>CONTACT INFO</h3>
                     <p>0917 329 3889</p>
                 </div>
 
                 <div class="box">
                     <h3>BUSINESS HOURS</h3>
                     <p>Tuesdays to Sundays<br>7:00am to 8:00pm</p>
                 </div>
 
                 <div class="box">
                     <h3>ADDRESS</h3>
                     <p>Centro, Alupay, Rosario, Batangas</p>
                 </div>
 
                 <div class="box">
                     <h3>FOLLOW US</h3>
                     <a href="https://www.facebook.com/WackysFoodHouse" target="_blank">Facebook</a>
                 </div>
            </div> 
        </section>
 

    <!----- custom js file link ----->
    <script src="script.js"></script>


    </body>
</html>