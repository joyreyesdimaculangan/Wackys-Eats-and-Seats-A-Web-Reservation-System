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
                <a id="reservation-btn">Reservation</a>
                <a class="active" href="about.php">About Us</a>
            </nav>

            <div class="icons">
                <i class="fas fa-bars" id="menu-bars"></i>
            </div>
        </header>

        <!-------- login form ---------->
        <div class="login-form-container">

            <div id="close-login-btn" class="fas fa-times"></div>

            <form action="login-handling.php" method="POST">
                <h3>Sign In</h3>
                <div class="input-box">
                    <i class="fa fa-regular fa-envelope"></i>
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <i class="fa fa-key"></i>
                    <input type="password" id="myInput" placeholder="Enter your password" required>
                    <span class="eye" onclick="myFunction()">
                        <i id="hide1" class="fa fa-regular fa-eye"></i>
                        <i id="hide2" class="fa fa-regular fa-eye-slash"></i>
                    </span>
                </div>
                <input type="submit" value="Sign in" class="btn">
                <p> Don't have an account? <a href="user-sign-in.php"> Create One </a> </p>
            </form>
        </div>

        <!--------- events and promos ------->
        <section class="events" id="events">
            <h3 class="sub-heading"> The Memories We Made </h3> 
            <p><em> Wacky's Food House spent their time making each celebration, whether big or small, a memorable and heartwarming one. The familial love that we always crave for. </em></p>
        
                <div class="swiper-container events-swiper">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="images/Event 1.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 2.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 3.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 4.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 5.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 6.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 7.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 8.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 9.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 10.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 11.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 12.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 13.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 14.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 15.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 16.jpg" alt="Events"></div>
                            <div class="swiper-slide"><img src="images/Event 17.jpg" alt="Events"></div>   
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        
                    </div>
                </div>    
        </section>

        <!------- location -------->
        <section class="location" id="location">
            <div class="row">
                <div class="place">
                    <h3>Where are we located?</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.9209462119425!2d121.28768567509199!3d13.843783686557737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd3fe2598386bd%3A0xbe2468123735a139!2sWacky&#39;s%20Food%20House!5e0!3m2!1sen!2sph!4v1700041554910!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="content">
                    <h3> Operating Hours </h3>
                    <p>Tuesdays to Sundays<br>7:00am to 8:00pm</p>
                    <h5>Advanced booking is recommended to secure your preferred slot</h5>
                </div>
            </div>
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
        
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!----- custom js file link ----->
        <script src="script.js"></script>
        
    </body>
</html>