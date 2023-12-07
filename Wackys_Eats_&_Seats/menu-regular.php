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
                <a class="active" href="menu.php">Menu</a>
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

        <!-------- menu -------->
        <div class="main-menu">
            <div class="menu-title">
                <h1> Our Regular Buffet </h1>
                <p>  You can enjoy all our meat dishes plus some appetizers </p>

                <nav class="navbar"> 
                    <a class="active" href="menu-regular.php"> Regular Buffet </a>
                    <a href="menu-seafood.php"> Seafood Buffet </a>
                </nav>

            </div>

            <div class="row">
                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Afritada.jpg" alt="Afritada">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Afritada </h5>
                        <p> Stew made with meat, vegetables, and tomato sauce </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Pork Adobo.jpg" alt="Pork Adobo">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Pork Adobo </h5>
                        <p> Pork braised in vinegar, soy sauce, garlic, and peppercorns </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Laing.jpg" alt="Laing">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Laing </h5>
                        <p> Taro leaves cooked in coconut milk </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Langka.jpg" alt="Langka">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Langka </h5>
                        <p> Stew made from unripe jackfruit in coconut milk and spices </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Chicken Caldereta.jpg" alt="Chicken Caldereta">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Chicken Caldereta </h5>
                        <p> Stew made of chicken, potatoes, bell peppers, and green olives in a spicy tomato sauce </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Imbutido.jpg" alt="Imbutido">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Imbutido </h5>
                        <p> Meatloaf made with ground pork and stuffed with hard-boiled eggs and sliced ham or various sausages </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Chicken Curry.jpg" alt="Chicken Curry">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Chicken Curry </h5>
                        <p> Curry cooked with potatoes and carrots in coconut milk with mild curry powder </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Chicken Inasal.jpg" alt="Chicken Inasal">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Chicken Inasal </h5>
                        <p> Grilled chicken marinated in vinegar, kalamansi juice, and other spices </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Pork Curry.jpg" alt="Pork Curry">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Pork Curry </h5>
                        <p> Curry made with pork cooked in aromatic spices </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Pork Tausi.jpg" alt="Pork Tausi">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Pork Tausi </h5>
                        <p> Pork with salted black beans </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Ampalaya.jpg" alt="Ampalaya">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Ampalaya </h5>
                        <p> Vegetable stir-fry made of bittermelon, tomatoes, and eggs </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Salad.jpg" alt="Salad">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Salad </h5>
                        <p> Mixtures of various vegetable accompanied by a sauce or dressing </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Pansit.jpg" alt="Pansit">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Pansit </h5>
                        <p> Stir-fried noodles with meat and vegetables </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Shanghai.jpg" alt="Shanghai">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Shanghai </h5>
                        <p> A mixture of giniling wrapped in a thin egg crêpe </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>

                <div class="menu-box">
                    <div class="menu-image">
                        <img src="images/Spaghetti.jpg" alt="Spaghetti">
                    </div>
                    
                    <div class="menu-content">
                        <h5> Spaghetti </h5>
                        <p> Pasta served with tomato sauce </p>
                        <span class="type"> Regular </span>
                    </div>
                </div>                
            </div>
        </div>

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