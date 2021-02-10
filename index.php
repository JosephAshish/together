<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width-length, initial-scale=1">
    <link rel='stylesheet' type='text/css' href='index_style.css'>

    
</head>
<body>

    <div class="maincontainer">
<scroll-container>

<!-- ---------home------------ -->

<scroll-page id="home">
        <div class="container">
            <img src="cd.png" alt="car1" style=" width:100%" ;>

            <div class="logo">
                <a href="index.php"><img src="logo.png" width="90" height="60"></a>
            </div>

            <div class="name">
                <h4><a id="logolink" href="index.php">2gether</a></h4>

            </div>

            <div class="tagline">
                <h1>Lets ride together</h1>

            </div>

            <div class="text-block">
                <nav>
                <h4>
                <a id="link" href="#home"><b>Home</b></a><b></b>&nbsp&nbsp&nbsp
                <a id="link" href="#login"><b>Login & Signup</b></a> <b></b>&nbsp&nbsp&nbsp
                <a id="link" href="#about"><b>About</b></a><b></b>&nbsp&nbsp&nbsp
                <a id="link" href="#contact"><b>Contact</b></a></h4>  
                <nav>

            </div>

            <div class="feature">
                <h5>Save Money, Safe Journey</h5>
            </div>
        </div>
</scroll-page>


<!-- ---------Login & Signup------------ -->

<scroll-page id="login">
        <div class="login-container">
            <div class="login">
                <br>
                <br>
<br>
            <br>
            <br>
            <br>
                <h3>Login</h3>
            </div>

            <form action="login.php" method="get">
                <div class="form-style-agile">

<h5 class="login";><?php echo @$_GET["success"]; ?></h5>
<h5 class="login";><?php echo @$_GET["invalid"];?></h5>
<h5 class="login";><?php echo @$_GET["logout"]; ?></h5>
<h5 class="login";><?php echo @$_GET["logedin"]; ?></h5>
                    <input placeholder="Phone Number" name="number" type="text" required="" pattern="[0-9]{10}">
                    <br>
                    <input placeholder="Password (Min 8 Char.)" name="password" type="text" required="" minlength="8">
                    <br> 
                  <button class="book-btn btn">Login</button>
                    <br>

                </div>

            </form>

            <p class="login">Don't have an account? <a id="link" href="signup.php">Sign up</a></p>
            <br>
            <br>
            <br>
            <br>
<br><br>
            <marquee behavior="scroll" direction="right" width=50% scrollamount="13">
                <img src="anim.png" width="180" height="100" alt="Natural" />
            </marquee>

            <div class="webappdetail">

                <p style="color:#FA6A11;font-size:17px"><b>1. Find a ride</b></p>
                <p style="color:white;">Just enter your departure and arrival points and you travel date, then
                    <br>choose a car owner going your way. If you have a question, you can
                    <br>ask the car owner before booking.</p><br>

                <p style="color:#FA6A11;font-size:17px"><b>2. Book online</b></p>
                <p style="color:white;">Book your seat online. You'll get the car owner's phone number to
                    <br>arrange the final details.</p><br>

                <p style="color:#FA6A11;font-size:17px"><b>3. Travel together</b></p>
                <p style="color:white;">Bring exact change to pay the car owner the agreed contribution
                    <br>during the ride.</p>

            </div>
<br><br>
           
            <br>
            <br>
        </div>
</scroll-page>

<!-- ---------about------------ -->

<scroll-page id="about">
        <div class="about-container">

          
            <div class="about">

            <br>
            <br>
            <br>

                <h1>About us</h1>
            <br>
</div>
<div class="about-content">
<h2>Together at a Glance</h2>
<p>
Together is a&nbsp
<strong>trusted community</strong>
&nbsp marketplace that connects drivers with empty seats to co-travellers looking for a ride. 12 Million of people use Together every quarter creating an entirely new, 
<strong>people-powered</strong>
&nbsp
<strong>network</strong>
. With a dedicated customer service, a state of the art web platform, and a fast-growing community of users, Together is making travel social, money-saving and more efficient for millions of members.
</p>
 </div>
            <br>
            <br>
            <br>
</div>
</scroll-page>

<!-- ---------contact------------ -->

<scroll-page id="contact">
        <div class="contact-container">

          
            <div class="contact">
            <br>
            <br>
            <br>
            <br>

                <h2>Contact us</h2>

</div>
<div class="contact-content">
<h5> No.28 - Kalakar Street, Kochi , INDIA
<br>
 together@gmail.com
<br>
 +91(974) 686 5361</h5>

            <br>
            <br>
            <br>
            </div>

<div class="icon-block">

</div>
</div>
</scroll-page>


</scroll-container>
</div>
</body>

</html>