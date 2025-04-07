<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <?php require 'partials/_navbar.php' ?>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: poppins;
    }

    #about-section {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 80px 12%;
    }

    .about-left img {
        width: 420px;
        height: auto;
        transform: translateY(50px);
    }

    .about-right {
        width: 54%;
    }

    .about-right ul li {
        display: flex;
        align-items: center;
    }

    .about-right h1 {
        color: #e74d06;
        font-size: 37px;
        margin-bottom: 5px;
    }

    .about-right p {
        color: #444;
        line-height: 26px;
        font-size: 15px;
    }

    .about-right .address {
        margin: 25px 0;
    }

    .about-right .address ul li {
        margin-bottom: 5px;
    }

    .address .address-logo {
        margin-right: 15px;
        color: #e74d06;
    }

    .address .saprater {
        margin: 0 35px;
    }

    .about-right .expertise ul {
        width: 80%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .expertise h3 {
        margin-bottom: 10px;
    }

    .expertise .expertise-logo {
        font-size: 19px;
        margin-right: 10px;
        color: #e74d06;
    }
    </style>

</head>

<body>
    <section id="about-section">
        <!-- about left  -->
        <div class="about-left">
            <img src="partials/slideshow4.jpg" alt="About Img" />
        </div>

        <!-- about right  -->
        <div class="about-right">
            <h2>Our Story</h2>
            <h1>ABOUT US</h1>
            <p>The main motive of our website is to reach the information to rural area .Our current value features
                gives the current rate of gold , platinum and silver . In the product page you can get all information
                about the product including prize also . You can easlly locate shop near you.
            </p>
            <div class="address">
                <ul>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        <p>Address</p>
                        <span class="saprater">:</span>
                        <p>Ratnagiri, Maharashtra, India</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <p>Phone No</p>
                        <span class="saprater">:</span>
                        <p>+91 7768082595</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="far fa-envelope"></i>
                        </span>
                        <p>Email ID</p>
                        <span class="saprater">:</span>
                        <p>abhig1232gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="expertise">
                <h3>Our features</h3>
                <ul>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-html5"></i>
                        </span>
                        <p>Locate shop</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-css3-alt"></i>
                        </span>
                        <p>Product Catlog</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-node-js"></i>
                        </span>
                        <p>Find Birthstone</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-react"></i>
                        </span>
                        <p>Current Prize</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</body>

</html>