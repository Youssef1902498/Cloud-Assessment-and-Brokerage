<link rel="stylesheet" href="css/cu.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<!-- Start Contact -->
<?php session_start();
include 'navbar.php';?>
    </div>
    <div class="contact">
        <div class="container">
            <div class="main-heading">
           <p style="color:white"><h2>Contact Us</h2>
               
            </div>
            <div class="content">
                <form action="">
                
                    <input class="main-input" type="text" name="name" placeholder="Your Name">
                    <input class="main-input" type="email" name="mail" placeholder="Your Email">
                    <textarea class="main-input" name="message" placeholder="Your Message"></textarea>
                    <a href="index.php"><input type="submit" value="Send Message"></a>
                    
                    
                </form>
                <div class="info">
                    <h4>Get In Touch</h4>
                    <span class="phone">+20123456789</span>
                    <span class="Email">name@gmail.com</span>
                    <h4>Where We Are</h4>
                    <address>
                     <li><a href="https://www.google.com/maps/place/Cairo/@30.0632299,31.2469369,15z/data=!4m5!3m4!1s0x0:0xd5f4c923d0cb3722!8m2!3d30.0632299!4d31.2469369">Ramsis Square, Al Fagalah, Al Azbakeya, Cairo Governorate 4321102</li> 
                </div>
            </div>
        </div>

    </div>
    <?php include 'footer.php';?>
    <!-- End Contact -->
