<?php
include 'database.php';
session_start();

// Check if the user clicked on the logout button
if (isset($_GET['logout'])) {
    // Destroy the session and redirect to the homepage
    session_destroy();
    header('Location: index.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zavel Travels </title>
    <link rel="stylesheet" href="homepage_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar" id="navbar">
            <div class="container">
                <ul class="nav-items">
                    <li> <img src="img2/Zavel (1).png" alt="Company Logo" style="width: 15%; height: auto;"></li>

                    <li><a href="Index.php" class="nav-link">Home</a></li>
                    <li><a href="package.php" class="nav-link">Packages</a></li>
                    <li><a href="review.html" class="nav-link">Reviews</a></li>
                    <li><a href="about.html" class="nav-link">About</a></li>
                    
                    <li><a href="book.php" class="nav-link" onclick="return checkLogin()">Book</a></li>
                    <script>
                        function checkLogin() {
                            <?php if (!isset($_SESSION["user_fname"])) : ?>
                                alert("You must be logged in to book a trip.");
                                return false;
                            <?php endif; ?>
                            return true;
                        }
                    </script>
                    <?php if (isset($_SESSION["user_fname"])) : ?>
                        <div class="sign_in" style="padding-left: 30px; float: right;">
                            <li>
                                <a href="#" class="nav-link"><?php echo $_SESSION["user_fname"]; ?></a>
                                <a href="index.php?logout=true" class="nav-link">Logout</a>
                            </li>
                        </div>
                    <?php else : ?>
                        <div class="sign_in" style="padding-left: 10px; float: right;">
                            <li>
                                <a href="login2.php" class="nav-link">Sign In</a>
                            </li>
                        </div>
                    <?php endif; ?>

            </div>
        </nav>
    </header>

    </section>
    <script>
        // Add animation to the hero section elements
        const heroSection = document.getElementById('hero');

        heroSection.addEventListener('mouseover', () => {
            const contentOverlay = document.querySelector('.content-overlay');
            contentOverlay.style.opacity = '0.9';
        });

        heroSection.addEventListener('mouseout', () => {
            const contentOverlay = document.querySelector('.content-overlay');
            contentOverlay.style.opacity = '0.5';
        });
    </script>

    <!-- Services Section -->
    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>

            <div class="service-icons">
                <div class="service-item">
                    <img src="img2/camping.jpeg" alt="Camping Icon">
                    <p class="service-description"> Outdoor camping </p>
                </div>
                
                <div class="service-item">
                    <img src="img2/cozy.jpg" alt="Campfire Icon">
                    <p class="service-description"> Cozy campfire </p>
                </div>
                <div class="service-item">
                    <img src="img2/offroad.jpg" alt="Off-Roading Icon">
                    <p class="service-description"> Off-roading experiences</p>
                </div>
                <div class="service-item">
                    <img src="img2/familyfriendly.jpg" alt="Generic Camping Icon">
                    <p class="service-description"> Family-friendly camping trips</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Packages Section -->
    <!-- Packages Section -->
    <section class="packages">
    <div class="container">
        <div class="section-title" style="padding-right: 40px;">
            <h2>Our Packages</h2>
        </div>
        <div class="package-columns">
            <div class="package-item">
                <img src="images/img.jpg" alt="Sigiriya Rock Fortress">
                <h3 class="package-title">Sigiriya Rock Fortress</h3>
                <p class="package-description">Majestic ancient rock citadel, UNESCO World Heritage.</p>
                <a href="book.php" class="btn" onclick="return checkLogin()">Book Now</a>
            </div>
            <div class="package-item">
                <img src="images/img-2.jpg" alt="Ella">
                <h3 class="package-title">Ella</h3>
                <p class="package-description">Stunning beautiful mountain views , scenic train rides.</p>
                <a href="book.php" class="btn" onclick="return checkLogin()">Book Now</a>
            </div>
            <div class="package-item">
                <img src="images/img-3.jpg" alt="Galle Fort">
                <h3 class="package-title">Galle Fort</h3>
                <p class="package-description">Colonial charm, picturesque streets, ocean views.</p>
                <a href="book.php" class="btn" onclick="return checkLogin()" >Book Now</a>
            </div>
        </div>
        <a href="package.php"><button class="load-more">Load More</button></a>
    </div>
</section>

    <script>
        const packageItems = document.querySelectorAll('.package-item');

        packageItems.forEach(item => {
            item.addEventListener('mouseover', () => {
                item.style.border = '2px solid #3dee57'; 
                item.style.boxShadow = '0px 0px 10px 2px rgba(10,128,28,1)';
                item.style.transform = 'translateY(-5px)'; 
            });

            item.addEventListener('mouseout', () => {
                item.style.border = 'none'; 
                item.style.boxShadow = 'none'; 
                item.style.transform = 'translateY(0)'; 
            });
        });
    </script>



    <!-- Promotional Banner -->
    <section class="banner">
        <div class="banner-content">
            <div class="text-box">
                <h2 class="promo-text">Upto 50% Off</h2>
            </div>
            <p class="body-text">Unlock exclusive savings and indulge in unforgettable experiences with our limited-time offer, designed to elevate your travels and create cherished memories.</p>
            <a href="book.php" class="btn" onclick="return checkLogin()">Book Now</a>
        </div> 
    </section>


    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-section left-section">
                <img src="img2/Zavel.png" alt="Company Logo" style="padding-right: 40px;">
            </div>
            <div class="footer-section center-section">
                <hr class="separator" style="color: chartreuse; align-self: center;">
                <h4 style="color: chartreuse; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Quick Links</h4>
                <div class="link">
                    <ul>
                        <li><a href="review.html">Reviews</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="package.html">Package</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="footer-section right-section">
                <h4 style="color: chartreuse;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Contact Info</h4>
                <ul class="contact-info">
                    <li>+94 716833491 (phone number)</li>
                    <li>+111-222-3333 (phone number)</li>
                    <li>desinger_99_@Gmail.Com (email address)</li>
                    <li>412, molpe, moratuwa. (address)</li>
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
            <p style="text-align :center ; color: darkgrey; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Created By Mr. Designer_99 | All Rights Reserved!</p>
        </div>
    </footer>
</body>

</html>
