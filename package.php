<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="package.css">
    <style>
      
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2c5f2d; 
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #307b34; 
        }

        .box {
            position: relative;
            display: inline-block;
            transition: transform 0.3s ease; 
        }

        .box:hover {
            transform: scale(1.1); 
        }

        .box .image img {
            width: 100%; 
            height: auto; 
        }

        .content {
            background-color: #f9f9f9;
            padding: 10px;
        }
   
        
    </style>
</head>

<body>
    <!--Header-->
    <header>
        <nav class="navbar" id="navbar">
            <div class="container">
                <ul class="nav-items">
                    <li> <img src="img2/Zavel (1).png" alt="Company Logo" style="width: 15%; height: auto;"></li>

                    <li><a href="Index.php" class="nav-link">Home</a></li>
                    <li><a href="package.php" class="nav-link">Packages</a></li>
                    <li><a href="review.html" class="nav-link">Reviews</a></li>
                    <li><a href="about.html" class="nav-link">About</a></li>
                    
                
                

                </ul>
            </div>
        </nav>
    </header>
    <script>
    
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('mouseover', () => {
                link.style.transform = 'scale(1.1)';
            });

            link.addEventListener('mouseout', () => {
                link.style.transform = 'scale(1)';
            });
        });

        

    </script>
    <!--Heder end-->
    <!--package-->
    <section class="packages">
        <h1 class="heading-title" style="font-family: Arial, Helvetica, sans-serif;"> Top Destinations</h1>
        <div class="box-container">

            <div class="box">
            <div class="image">
                <img src="images/img.jpg" alt="">
            </div>
            <div class="content">
                <h3>Sigiriya Rock Fortress</h3>
                <p>Majestic ancient rock citadel, UNESCO World Heritage.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Ella</h3>
                <p>Stunning beautiful mountain views, scenic train rides.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Galle Fort</h3>
                <p>Colonial charm, picturesque streets, ocean views.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Yala National Park </h3>
                <p>Wildlife safari, diverse fauna, leopard spotting.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>Polonnaruwa</h3>
                <p> Ancient ruins, UNESCO World Heritage Site.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kandy</h3>
                <p>Cultural capital, sacred Temple of the Tooth</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book Now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>Mirissa</h3>
                <p>Serene beaches, whale watching, laid-back vibes.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book Now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Nuwara Eliya</h3>
                <p> Lush tea plantations, cool climate, British architecture.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book Now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-9.jpg" alt="">
            </div>
            <div class="content">
                <h3>aDambulla Cave Temple</h3>
                <p>Intricate cave paintings, religious significance.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book Now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-10.jpg" alt="">
            </div>
            <div class="content">
                <h3>Bentota</h3>
                <p>Relaxing beach getaway, water sports, river safaris.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book Now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-11.jpg" alt="">
            </div>
            <div class="content">
                <h3>Anuradhapura</h3>
                <p>Sacred Buddhist sites, ancient city ruins.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book Now</a>
            </div>
            </div>

            <div class="box">
            <div class="image">
                <img src="images/img-12.jpg" alt="">
            </div>
            <div class="content">
                <h3>Horton Plains National Park</h3>
                <p>Scenic hikes, World's End viewpoint.</p>
                <a href="book.php" class="btn" onclick="return checkLogin();">Book Now</a>
            </div>
            </div>
        </div>
        <script>
            function checkLogin() {
                <?php if (!isset($_SESSION["user_fname"])) : ?>
                    alert("You must be logged in to book a trip.");
                    return false;
                <?php endif; ?>
                return true;
            }
        </script>

        
    </section>
    <!--package end-->
    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-section left-section">
                <img src="images/Zavel.png" alt="Company Logo" style="padding-right: 40px;">
            </div>
            <div class="footer-section center-section">
                <hr class="separator" style="color: chartreuse; align-self: center;">
                <h4 style="color: chartreuse;">Quick Links</h4>
                <div class="link">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="review.html">Reviews</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="footer-section right-section">
                <h4 style="color: chartreuse;">Contact Info</h4>
                <ul class="contact-info">
                    <li>+1234567890 (phone number)</li>
                    <li>+111-222-3333 (phone number)</li>
                    <li>Anasbhai@Gmail.Com (email address)</li>
                    <li>Mumbai, India - 400104 (address)</li>
                </ul>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p
                style="text-align :center ; color: darkgrey; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                Created By Mr. Web Designer | All Rights Reserved!</p>
        </div>
    </footer>
</body>

</html>