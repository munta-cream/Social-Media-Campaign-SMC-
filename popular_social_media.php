<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Social Media</title>
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
<h2>Popular Social Media</h2>


<div class="content-container">
    <img src="media/social-media-apps.jpg"  class="cursor-pointer">
    <p class="justified-text">
        <h3>Privacy Matters</h3> <p> Your privacy is like a digital fortress that protects you from unwanted attention. Setting your profiles to private means that only people you approve can see your posts, photos, and personal information. It's an essential step to control who has access to your online life and helps prevent strangers from entering your digital space.</p>
        <h3>Think Before You Post</h3><p> Everything you post online can leave a lasting impression. Before hitting the "share" button, consider whether the content reflects your values and if you would be comfortable with others seeing it. This practice helps in maintaining a positive online presence and avoiding the potential consequences of sharing inappropriate or regrettable content.</p>
        <h3>Be Selective with Friends</h3><p> Just as you choose your friends in real life, be selective about who you connect with online. Accept friend requests or followers only from people you know personally and trust. Avoid adding strangers, as this reduces the risk of unwanted interactions and ensures a safer online environment. </p>
        <h3>Stay Informed</h3><p> Social media platforms are continually evolving, introducing new features and potential risks. Staying informed about the latest updates, trends, and potential threats helps you make informed decisions about your online activities. Knowledge is a powerful tool for navigating the digital world safely.</p>
        <h3>Open Communication</h3><p> Communication is key to a healthy online experience. Talk to your parents, guardians, or other trusted adults about your online activities. If you have questions or come across something that makes you uncomfortable, discussing it with a responsible adult can provide valuable guidance and support.</p>
        <h3>Avoid Cyberbullying</h3><p> Cyberbullying involves using technology to harass, threaten, or intimidate others. Treat people online with the same kindness and respect you would in person. If you witness cyberbullying, take a stand against it, support the victim, and report the behavior to adults or the platform administrators. Creating a positive online culture starts with individual actions. </p>
        <h3>Trust Your Instincts</h3><p> Your instincts are powerful tools for self-protection. If something online feels off or uncomfortable, trust your gut feelings. It's okay to step back, reassess the situation, and seek guidance from a trusted adult. Trusting your instincts empowers you to make decisions that prioritize your safety and well-being in the online world. </p>
    </p>
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