<?php
require "db.php";
$search = $_GET['search'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="media/logo.ico">
    <link rel="stylesheet" href="css/style.css" >
    <title>Search</title>
</head>
<body><div class="navbar">
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
    <main>
        <?php
        $sql = "SELECT * FROM `procedure` WHERE heading_name ='$search'";
        $sql_run=mysqli_query($db_con,$sql);
        $row = mysqli_num_rows($sql_run);
        if($row<1){
            echo "Name Does not exist";
        }else{ ?>
    <div class="search">
        <?php
            while($read=mysqli_fetch_array($sql_run)){ ?>
                <H3>Course Name</H3>
                <?=$read['heading_name']?><br>
        <H3>Course Media</H3>
                <?=$read['image']?><br>               
        <H3>Course About</H3>
                <?=$read['discription']?>
      
            </div>
        <?php }}?>
    </main>
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
    
  
