<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="media/logo.ico">
    <link rel="stylesheet" href="css/style.css" >
    <style>
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <a href="index.php">
        <img src="media/logo.png" alt="SMC"></a>
        <div class="company-name">Social Media Campaigns</div>
    </div>
    <ul class="nav-links">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Services</a>
            <ul> 
                
                <li><a href="popular_social_media.php">Most Popular Social Media Apps</a></li>
                
                <li><a href="livestream.php">Livestreaming</a></li>
                
            </ul>
        </li>
        <li>
            <a href="#">Guidance</a>
            <ul>
                <li><a href="information.php">Information</a></li>
                <li><a href="legislation_and_guidance.php">Legislation and Guide</a></li>
                <li><a href="parents_guideline.php">How Parents Can Help</a></li>
            </ul>
        </li>
        <li>
            <a href="contact.php">Contact</a>
        </li>
    </ul>
    <form method="get" action="search.php">
    <input type="text" class="search-bar" placeholder="Search...">
    <button type="submit" class="search-btn">Search</button>
    </form>
    <form method="post" action="logout.php" id="logoutForm">
    <button type="submit" class="logout-btn">Logout</button>
    </form>
</div>
<h2>Contact</h2>
<div class="content-container">
<form class="contact-form" method="post" action="thanks.php">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="number">Your Phone Number:</label>
        <input type="tel" id="number" name="number" required>
        <label for="message">Write your message:</label>
        <textarea id="message" name="message" rows="4" cols="50" placeholder="Type your message here..."></textarea>
        <br>
        <button type="submit" class="submit-btn">Send Message</button>
    </form>
</div>
<footer>
    <div class="logo">
    <img src="media/logo.png" alt="Company Logo" class="company-logo">
    
    </div>
    <div class="copyright">
        <h3>Social Media Campaigns(SMC)</h3>
        &copy; 2024 Your Website. All rights reserved.
    </div>
    <div class="social-icons">
    <div class="connect-us">
            <span>Connect Us: </span><br>
        <a href="https://www.facebook.com" target="_blank"><img src="media/logo/facebook-icon.png" alt="Facebook"></a>
        <a href="https://www.twitter.com" target="_blank"><img src="media/logo/twitter.png" alt="Twitter"></a>
        <a href="https://www.whatsapp.com" target="_blank"><img src="media/logo/whatsapp.png" alt="WhatsApp"></a>
        <a href="https://www.viber.com" target="_blank"><img src="media/logo/viber.png" alt="Viber"></a>
    </div>
    </div>
</footer>

</body>
</html>