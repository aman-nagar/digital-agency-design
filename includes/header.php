<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="/assets/stylesheets/style.css" />
    <link rel="stylesheet" href="/assets/stylesheets/footer.css" />
    <script src="/scripts/animation.js"></script>
    <script src="/scripts/main.js"></script>
    <title>Digital Agency</title>
</head>

<body>
    <!-- announcement bar -->
    <div class="announcement wrapper">
        <div class="left">
            <p>YOUR LOCAL DIGITAL MARKETING AGENCY</p>
        </div>
        <div class="right contact-info">
            <div class="message">
                <img class="announcement-icon" src="/assets/icons/msg.png" alt="Message Icon" />
                <span class="phone-number">0 (877) 123-4567</span>
            </div>
            <div class="email">
                <img class="announcement-icon" src="/assets/icons/mail.png" alt="Message Icon" />
                <a href="mailto:info@yoursite.com">info@yoursite.com</a>
            </div>
            <ul class="follow">
                <img class="announcement-icon" src="/assets/icons/share.png" alt="Message Icon" />
                <li>FOLLOW US</li>
                <!-- Add social media links here -->
            </ul>
        </div>
    </div>
    <!-- announcement bar -->

    <header class="wrapper">
        <div class="logo">
            <img src="/assets/images/logo.png" alt="Digital Agency Logo" />
        </div>

        <!-- Hamburger Icon for Mobile -->
        <div class="hamburger-icon">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>

        <?php include 'includes/navigation.php'; ?>

        <button class="nav-btn">Free Quote</button>
    </header>

 