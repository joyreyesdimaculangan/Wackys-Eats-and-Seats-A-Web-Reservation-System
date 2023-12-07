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
                <a class="active" href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a id="reservation-btn">Reservation</a>
                <a href="about.php">About Us</a>
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
                    <input type="password" name="password" id="myInput" placeholder="Enter your password" required>
                    <span class="eye" onclick="myFunction()">
                        <i id="hide1" class="fa fa-regular fa-eye"></i>
                        <i id="hide2" class="fa fa-regular fa-eye-slash"></i>
                    </span>
                </div>
                <input type="submit" value="Sign in" class="btn">
                <p> Don't have an account? <a href="user-sign-in.php"> Create One </a> </p>
            </form>
        </div> 

        <!--------- home section ------->
        <section class="home" id="home">
            <div class="swiper-container home-slider">
                <div class="swiper-wrapper wrapper">
                    <div class="swiper-slide slide">
                        <div class="content">
                            <span> Regular Buffet </span>
                            <h3> For Only 198 pesos </h3>
                            <p> You can already enjoy our unlimited dishes, drinks, desserts, and kapeng barako! </p>
                            <a class="btn" id="reservation-btn1"> BOOK YOUR RESERVATIONS NOW! </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="content">
                            <span> Seafood Buffet </span>
                            <h3> For Only 398 pesos </h3>
                            <p> You can already enjoy our unlimited dishes plus seafoods, with drinks, desserts, and kapeng barako! </p>
                            <a class="btn" id="reservation-btn2"> BOOK YOUR RESERVATIONS NOW! </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="content">
                            <span> Events </span>
                            <h3> Receptions </h3>
                            <p> Wacky's Food House also offers event hosting for any occassion! </p>
                            <a class="btn" id="reservation-btn3"> BOOK YOUR RESERVATIONS NOW! </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--------- dishes ----------->
        <section class="dishes" id="dishes">
            <h3 class="sub-heading"> Wacky's Food House </h3> 
            <h1 class="heading"> Our Eat-All-You Can Buffet </h1> 
            
            <div class="row">
                <div class="dishes-col">
                    <img src="images/Afritada.jpg" alt="Afritada">
                    <div class="layer">
                        <h3> Afritada </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Chicken Inasal.jpg" alt="Chicken Inasal">
                    <div class="layer">
                        <h3> Chicken Inasal </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Boiled Crabs.jpg" alt="Boiled Crabs">
                    <div class="layer">
                        <h3> Boiled Crabs </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dishes-col">
                    <img src="images/Chicken Caldereta.jpg" alt="Chicken Caldereta">
                    <div class="layer">
                        <h3> Chicken Caldereta </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Chicken Curry.jpg" alt="Chicken Curry">
                    <div class="layer">
                        <h3> Chicken Curry </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Crablets.jpg" alt="Crablets">
                    <div class="layer">
                        <h3> Crablets </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dishes-col">
                    <img src="images/Pork Curry.jpg" alt="Pork Curry">
                    <div class="layer">
                        <h3> Pork Curry </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Imbutido.jpg" alt="Imbutido">
                    <div class="layer">
                        <h3> Imbutido </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Laing.jpg" alt="Laing">
                    <div class="layer">
                        <h3> Laing </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dishes-col">
                    <img src="images/Salad.jpg" alt="Salad">
                    <div class="layer">
                        <h3> Salad </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Langka.jpg" alt="Langka">
                    <div class="layer">
                        <h3> Langka </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Paksiw.jpg" alt="Paksiw">
                    <div class="layer">
                        <h3> Paksiw </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dishes-col">
                    <img src="images/Pansit.jpg" alt="Pansit">
                    <div class="layer">
                        <h3> Pansit </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Shrimp.jpg" alt="Shrimp">
                    <div class="layer">
                        <h3> Shrimp </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Ampalaya.jpg" alt="Ampalaya">
                    <div class="layer">
                        <h3> Ampalaya </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dishes-col">
                    <img src="images/Shanghai.jpg" alt="Shanghai">
                    <div class="layer">
                        <h3> Shanghai </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Spaghetti.jpg" alt="Spaghetti">
                    <div class="layer">
                        <h3> Spaghetti </h3>
                    </div>
                </div>

                <div class="dishes-col">
                    <img src="images/Mixed Seafoods.jpg" alt="Mixed Seafoods">
                    <div class="layer">
                        <h3> Mixed Seafoods </h3>
                    </div>
                </div>
            </div>
        </section>

        <!------------ packages ------------->
        <section class="packages">
            <h3 class="sub-heading"> Wacky's Food House </h3> 
            <h1 class="heading"> Receptions </h3> 
            
            <div class="row">
                <div class="packages-col">
                    <img src="images/Package 1.png" alt="Package 1">
                    <h3> Package 1 </h3>
                </div> 

                <div class="packages-col">
                    <img src="images/Package 2.png" alt="Package 2">
                    <h3> Package 2 </h3>
                </div> 
            </div>

            <div class="row">
                <div class="packages-col">
                    <img src="images/Package 3.png" alt="Package 3">
                    <h3> Package 3 </h3>
                </div> 

                <div class="packages-col">
                    <img src="images/Package 4.png" alt="Package 4">
                    <h3> Package 4 </h3>
                </div> 
            </div>

            <div class="row">
                <div class="packages-col">
                    <img src="images/Package 5.png" alt="Package 5">
                    <h3> For Small Celebrations </h3>
                </div> 
            </div>
        </section>

        <!--------- about ----------->
        <section class="about" id="about">  
            <div class="row">
                <div class="image">
                    <img src="images/Food House.jpg" alt="The Food House">
                </div>

                <div class="content">
                    <h3> The Food House </h3>
                    <p>We have over 20 years of experience in this area of 
                        business and we strive to achieve the following: develop, empower, enable and maintain.</p>
                </div>
            </div>   
        </section>

        <!--------- review ---------->
        <section class="review" id="review">
            <h3 class="sub-heading"> Customer's Review </h3> 
            <h1 class="heading"> What They Say </h3> 
                <div class="swiper-container review-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                                <img src="images/Person 1.png" alt="Customer 1">
                                <div class="user-info">
                                    <h3> Abelardo Altamira </h3>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p> Great foods unlimited yet very affordable. </p>
                        </div>

                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                                <img src="images/Person 1.png" alt="Customer 2">
                                <div class="user-info">
                                    <h3> Nelson </h3>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p> Good food! Love the kaldereta. Filipino dishes with desert and soup! 
                                Also with batangas coffee on the side. More improvements are needed. 
                                But best price with the buffet they offer. </p>
                        </div>

                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                                <img src="images/Person 1.png" alt="Customer 3">
                                <div class="user-info">
                                    <h3> Gabrielle Ramos </h3>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p> We just stop by for breakfast last Saturday, lunch and dinner is always busy here 
                                and you need to book in advance for their eat all u can. Food is great at a very affordable price, 
                                the staffs are very accommodating.. </p>
                        </div>

                        <div class="swiper-slide slide">
                            <i class="fas fa-quote-right"></i>
                            <div class="user">
                                <img src="images/Person 1.png" alt="Customer 4">
                                <div class="user-info">
                                    <h3> Clark Barcelona </h3>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p> The place is cozy, nice service and the most important, 
                                the food are all delicious. Worth the price! Will surely be back! </p>
                        </div>

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