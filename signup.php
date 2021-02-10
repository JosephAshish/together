<?php
$currentdate = date('d/m/Y');
?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width-length, initial-scale=1">
        <link rel='stylesheet' type='text/css' href='singnup_style.css'>


        </head>

        <body>
        <div class="signup_container">
        <div class="bg">
        <div class="signup">
        <h3>Sign Up</h3>
        </div>
        <form action="signup_register.php" method="get">
        <div class="form-style-agile">
        <br><br>


        <input autofocus placeholder="First Name" name="first_name" type="text" required=""  >
        <br>
        <input placeholder="Last Name" name="last_name" type="text" required="" >
        <br>
        <input   placeholder="Date of Birth" name="dob" type="date" required="" >
        <br>
        <select placeholder="Gender" name="gender" type="text" required="">
        <option value="" selected disabled hidden>Gender</option>
        <option value="female">Female</option>
        <option value="male">Male</option>
        </select>
        <br>

        <input placeholder="e-Mail" name="email" type="email" required="">
        <br>
        <input placeholder="Phone Number" name="phone_no" type="text" required="" pattern="[0-9]{10}">
        <br>
        <input placeholder="Password (Min 8 Char.)" name="password" type="text" required="" minlength="8">
        <br> 
        <button class="book-btn btn">Sign up</button>
        <br>

        </div>

        </form>

        <p class="signup">Already have an account? <a id="link" href="index.php#login">Login</a></p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>
        </div>
        </body>
        </html>
