<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>careerPathAhead</title>
    <link rel="stylesheet" href="style-2.css">
</head>
<body>
    <main>
    <div class="main-container">

    <header>
        <h2 class="logo">CareerPathAhead</h2>
        <nav class="navigation">
            <a href="course.php">COURSES</a>
            <a href="more-1.php">SKILLS</a>
            <a href="univer.php">UNIVERSITY</a>
            <a href="govtjob.php">GOVT.Careers</a>
            <a href="service.php">SERVICES</a> 
            <button class="btnLogin-popup">LOGIN</button>
        </nav>
    </header>
    <div class="content">
        <h1>Need<br><span>CAREER</span><br>Advice?</h1>
        <p class="par">we provide information on the education and training required for different career paths,<br> including the length of time and cost involved.
            
            <br>
        </p>
        
        

    </div>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box LOGIN">
            <h2>LOGIN</h2>
        <form action="#" method="POST">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email"  required>
                <label >Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label >Password</label>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forget Password?</a>
            </div>
            <button type="submit" name="submit" class="btn">Login</button>
            <div class="login-register">
                <p> Don't have any account?<a href="#" class="register-link">Register</a></p>
            </div>
        </form>
        </div>

        <div class="form-box Register">
            <h2>REGISTRATION</h2>
        <form action="#" method="POST">
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="username" required>
                <label >Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required>
                <label >Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label >Password</label>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">I agree to the term & conditions</label>
                
            </div>
            <button type="submit" name="registration_submit" class="btn">Register</button>
            <div class="login-register">
                <p> Already have an account?<a href="#" class="lOGIN-link">Login</a></p>
            </div>
        </form>
        </div>
    </div> 
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col" id="company">
                <img src="images/logo.png" alt="LOGO" class="logo">
                <p>CareerGuidance.pk is first of its kind career counseling system of Pakistan to facilitate youth and students in determining their career path and relevant.

                </p>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col" id="services">
                <h3>SERVICES</h3>
                <div class="links">
                    <a href="service.php">Who we are?</a>
                    <a href="service.php">What we serve?</a>
                    <a href="service.php">Our Counselors</a>
                    <a href="#"></a>
                </div>
            </div>

            <div class="col" id="useful-links">
                <h3> Quick Links</h3>
                <div class="links">
                    <a href="govtjob.php">Govt.Careers</a>
                    <a href="univer.php">Universities</a>
                    <a href="course.php">Courses</a>
                    <a href="more-1.php">Skills</a>
                </div>
            </div>

            <div class="col" id="contacts">
                <h3>Contact</h3>
                <div class="contacts-details">
                    <i class="fa fa-location"></i>
                    <p>ff-33, procube avenue, <br> NY, USA</p>
                </div>
                <div class="contacts-details">
                    <i class="fa fa-phone"></i>
                    <p>+92 3017449803</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form">
                <form action="">
                    <input type="text" placeholder="Email here...">
                    <button><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

    </div>
</footer>


<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
  
</body>
</html>

<?php

include 'connection.php';
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

 $insertquery = "insert into login(email,password) values('$email','$password') ";

 $res = mysqli_query($con,$insertquery);
 if($res){
    ?>
    <script>
        alert("data inserted properly");
    </script>
    <?php
 }else{
    ?>
    <script>
        alert("data not inserted ");
    </script>
    <?php
    
 }

}
//registration data insertion//

if (isset($_POST['registration_submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

 $insertquery = "insert into registration(username,email,password) values('$username','$email','$password') ";

 $res = mysqli_query($con,$insertquery);
 if($res){
    ?>
    <script>
        alert("data inserted properly");
    </script>
    <?php
 }else{
    ?>
    <script>
        alert("data not inserted ");
    </script>
    <?php
    
 }

}
?>














































