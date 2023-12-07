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
        <!------ sign-up -------->
        <section class="sign-up">
            <div class="container">
                <h3 class="sub-heading"> Registration </h3> 
                <form action="signup-handling.php" method="POST">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details"> Full Name </span>
                            <input type="text" placeholder="Enter your name" name="name" required>
                        </div>

                        <div class="input-box">
                            <span class="details"> Username </span>
                            <input type="text" placeholder="Enter your username" name="username" required>
                        </div>

                        <div class="input-box">
                            <span class="details"> Email </span>
                            <input type="email" placeholder="Enter your email" name="email" required>
                        </div>

                        <div class="input-box">
                            <span class="details"> Contact Number </span>
                            <input type="tel" id="phone" pattern="[0-9]{11}" placeholder="Enter a 11-digit phone number" name="phone" required>
                        </div>

                        <div class="input-box">
                            <span class="details"> Password </span>
                            <input type="password" placeholder="Enter your password" name="password" required>
                        </div>

                        <div class="input-box">
                            <span class="details"> Confirm Password </span>
                            <input type="password" placeholder="Confirm your password" name="confirm_password" required>
                        </div>

                        <input type="submit" value="Sign up" class="btn">

                    </div>
                </form>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        
        <!----- custom js file link ----->
        <script src="script.js"></script>


    </body>
</html>