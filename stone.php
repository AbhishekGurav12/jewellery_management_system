<?php
require('partials/config.php')
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <?php require 'partials/_navbar.php' ?>
    <style>
    @ * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        color: #333;
        font-size: 13px;
        margin: 0;

    }

    input,
    textarea,
    select,
    button {
        font-family: arial;
        color: #333;
        font-size: 14px;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ul {
        margin: 0;
    }

    img {
        max-width: 100%;
    }

    ul {
        padding-left: 0;
        margin-bottom: 0;
    }

    a:hover {
        text-decoration: none;
    }

    :focus {
        outline: none;
    }

    .wrapper {
        min-height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }

    .inner {
        padding: 20px;
        background: #fff;
        max-width: 850px;
        margin: auto;
        display: flex;
    }

    .inner .image-holder {
        width: 50%;
        margin-top: 50px;
    }

    .inner form {
        width: 50%;
        padding-top: 36px;
        padding-left: 45px;
        padding-right: 45px;
    }

    .inner h3 {
        text-transform: uppercase;
        font-size: 25px;
        text-align: center;
        margin-bottom: 28px;
    }

    .form-group {
        display: flex;
    }

    .form-group input {
        width: 50%;
    }

    .form-group input:first-child {
        margin-right: 25px;
    }

    .form-wrapper {
        position: relative;
    }

    .form-wrapper i {
        position: absolute;
        bottom: 9px;
        right: 0;
    }

    .form-control {
        border: 1px solid #333;
        border-top: none;
        border-right: none;
        border-left: none;
        display: block;
        width: 100%;
        height: 30px;
        padding: 0;
        margin-bottom: 25px;
    }

    .form-control::-webkit-input-placeholder {
        font-size: 14px;
        color: gray;
        font-family: arial;
    }

    select {
        font-size: 14px;
        font-family: arial;
        cursor: pointer;
        padding-left: 20px;
        color: gray;
    }

    select option[value=""][disabled] {
        display: none;
    }

    button {
        border: none;
        width: 164px;
        height: 51px;
        margin: auto;
        margin-top: 40px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        background: #333;
        font-size: 15px;
        color: #fff;
    }

    button:hover {
        background: or;
    }

    @media (max-width: 767px) {
        .inner {
            display: block;
        }

        .inner .image-holder {
            width: 100%;
        }

        .inner form {
            width: 100%;
            padding: 40px 0 30px;
        }

        button {
            margin-top: 60px;
        }
    }
    </style>

    <script>
        
    function submit() {

        
        switch (zodiac.value) {
            case "ras1":
                document.write(
                    "<br><br><br><br><center><h2> - Opal is the perfect stone for Taurus navtives - </h2></center><center><img width=500px; src=Images/opal.jpg></center>"
                    );
                break;
            case "Gemini":
                document.write(
                    "<br><br><br><br><center><h2> - Emerald is the perfect stone for Gemini navtives - </h2></center><center><img width=500px; src=Images/emerald.jpg></center>"
                    );
                break;
            case "Leo":
                document.write(
                    "<br><br><br><br><center><h2> - Ruby is the perfect stone for leo navtives - </h2></center><center><img width=500px; src=Images/ruby.jpg></center>"
                    );
                break;
            case "Cancer":
                document.write(
                    "<br><br><br><br><center><h2> - Pearl is the perfect stone for Cancer navtives - </h2></center><center><img width=500px; src=Images/pearl.jpg></center>"
                    );
                break;
            case "Virgo":
                document.write(
                    "<br><br><br><br><center><h2> - Opal is the perfect stone for Virgo navtives - </h2></center><center><img width=500px; src=Images/opal.jpg></center>"
                    );
                break;
            case "Libra":
                document.write(
                    "<br><br><br><br><center><h2> - Opal is the perfect stone for Libra navtives - </h2></center><center><img width=500px; src=Images/opal.jpg></center>"
                    );
                break;
            case "Scorpio":
                document.write(
                    "<br><br><br><br><center><h2> - Red coral is the perfect stone for Scorpio navtives - </h2></center><center><img width=400px; src=Images/red_coral.jpg></center>"
                    );
                break;
            case "Sagittarius":
                document.write(
                    "<br><br><br><br><center><h2> - Yellow Sapphire is the perfect stone for Sagittarius navtives - </h2></center><center><img width=500px; src=Images/yellow_sapphire.jpg></center>"
                    );
                break;
            case "Caoricorn":
                document.write(
                    "<br><br><br><br><center><h2> - Blue Sapphire is the perfect stone for Capricorn navtives - </h2></center><center><img width=500px; src=Images/blue_sapphire.jpg></center>"
                    );
                break;
            case "Aquirius":
                document.write(
                    "<br><br><br><br><center><h2> - Blue Sapphire is the perfect stone for Aquarius navtives - </h2></center><center><img width=500px; src=Images/blue_sapphire.jpg></center>"
                    );
                break;
            case "Pisces":
                document.write(
                    "<br><br><br><br><center><h2> - Yellow Sapphire is the perfect stone for Pisces navtives - </h2></center><center><img width=500px; src=Images/yellow_sapphire.jpg></center>"
                    );
                break;
            case "Aries":
                document.write(
                    "<br><br><br><br><center><h2> - Red coral is the perfect stone for Aries navtives - </h2></center><center><img width=400px; src=Images/red_coral.jpg></center>"
                    );
                break;
            default:
                break;
        }


    }
    </script>


</head>

<body>
    <div class="wrapper" style="background-image: url('tech.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="partials/Images/Gem.png" alt="image">
            </div>
            <form action="" method="post">
                <h3>Registration Form</h3>
                <div class="form-group">
                    <input type="text" placeholder="First Name" class="form-control" name="firstname">
                    <input type="text" placeholder="Last Name" class="form-control" name="lastname">
                </div>
                <div class="form-wrapper">
                    <input type="date" placeholder="Date OF Birth" class="form-control" name="dob">

                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Email Address" class="form-control" name="email">

                </div>
                <div class="form-wrapper">
                    <select id="gender" class="form-control" name="gender">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="City" class="form-control" name="city">

                </div>
                <div class="form-wrapper">
                    <select id="zodiac" class="form-control" name="zodiac">
                        <option value="" disabled selected>Zodiac</option>
                        <option value="ras1">Taurus</option>
                        <option value="Gemini">Gemini</option>
                        <option value="Leo">Leo</option>
                        <option value="Cancer">Cancer</option>
                        <option value="Virgo">Virgo</option>
                        <option value="Libra">Libra</option>
                        <option value="Scorpio">Scorpio</option>
                        <option value="Sagittarius">Sagittarius</option>
                        <option value="Caoricorn">Caoricorn</option>
                        <option value="Aquirius">Aquirius</option>
                        <option value="Pisces">Pisces</option>
                        <option value="Aries">Aries</option>
                    </select>

                </div>
                <button type="submit" name="reg" onclick="submit()">Register

                </button>
            </form>
        </div>
    </div>
    
   <!--  <?php
    
    if(isset($_POST['reg']) || isset($gender)){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $zodiac = $_POST['zodiac'];
        
        if($conn->connect_error)
        {
            echo "Connection failed: ". $conn->connect_error;
        }
        else
        {
            $stmt = $conn->prepare("INSERT INTO birthstone(firstname, lastname, dob, email, gender, city, zodiac) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssss', $firstname, $lastname, $dob, $email, $gender, $city, $zodiac);
            $stmt->execute();
            echo "<script>alert('save successfully !!!');</script>";
            $stmt->close();
            $conn->close();
            
        }
    }
    ?> -->
</body>

</html>