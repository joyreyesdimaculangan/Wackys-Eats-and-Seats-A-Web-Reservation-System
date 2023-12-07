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
        <section class="receptions">
            <h3 class="sub-heading"> Make a Reservation </h3> 
            <h1 class="heading"> Where would you like to book your reservation? </h3> 

            <nav class="navbar"> 
                <a href="reservations.php">Food House</a>
                <a class="active" href="events.php">Receptions</a>
            </nav>

            <form action="events-handling.php" method="POST">
                <div class="inputBox">
                <label for="package">Choose a Package:</label>
                    <select id="package" name="package" required>
                        <option value="Package 1">Package 1</option>
                        <option value="Package 2">Package 2</option>
                        <option value="Package 3">Package 3</option>
                        <option value="Package 4">Package 4</option>
                        <option value="Small Celebration">Small Celebration</option>
                    </select>
                    <div class="row">
                        <div class="packages-col">
                            <img src="images/Package 1.png" alt="Package 1"></a>
                        </div> 
        
                        <div class="packages-col">
                            <img src="images/Package 2.png" alt="Package 2"></a>
                        </div> 
                    </div>
        
                    <div class="row">
                        <div class="packages-col">
                            <img src="images/Package 3.png" alt="Package 3"></a>
                        </div> 
        
                        <div class="packages-col">
                            <img src="images/Package 4.png" alt="Package 4"></a>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="packages-col">
                        <img src="images/Package 5.png" alt="Package 5"></a>
                    </div> 
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
                        <input type="number" placeholder="Enter the number of people minimum of 50" name="pax" required>
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
                <div class="inputBox">
                    <div class="input">
                        <span>Theme/Motif of the Event</span>
                        <textarea rows="10" cols="30" placeholder="Enter the theme/motif of the event" name="theme" required></textarea>
                    </div>
                    <div class="input">
                        <span>Theme/Motif of the Cake</span>
                        <textarea rows="10" cols="30" placeholder="Enter the theme/motif of the cake" name="cake" required></textarea>
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>Dedication Message of the Cake</span>
                        <textarea rows="10" cols="30" placeholder="Enter the dedication message of the cake" name="dedication" required></textarea>
                    </div>
                    <div class="input">
                        <span>Other requests</span>
                        <textarea rows="10" cols="30" placeholder="" name="request"></textarea>
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