<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <?php require 'partials/_navbar.php' ?>
    <style>
    :root {
        --bgcolor: #FBEAEB;
        --g1: linear-gradient(to right, #aa076b, #61045f);
        --maincolor: #4A154B;
    }

    * {
        padding: 0;
        margin: 0;
        background-origin: border-box;


    }


    body,
    html {
        background-color: var(--bgcolor);
        overflow-x: hidden;
    }

    #main {
        width: 100%;
        height: 650px;
        box-shadow: 1px 1px 20px gray;
        margin-top: 90px;
        margin-left: 0px;
        position: relative;


    }

    #icon {
        margin: 10px;
        padding: 2px;
        width: 6%;
        height: 0%;
        border: 2px solid var(--maincolor);
        border-radius: 55px;
    }

    #cname {
        margin: -70px 120px;
        padding: 0;
        color: black;
        text-shadow: 3px 3px 5px var(--maincolor);
    }


    .slider {
        width: 100%;
        height: 100%;
        position: absolute;

    }

    .fade {
        animation-name: fade;
        animation-duration: 1.5s;

    }

    @keyframes fade {
        from {
            opacity: .5;
        }

        to {
            opacity: 1;
        }

    }

    #box2 {
        margin-top: 30px;
        margin: 30px 30px;
        width: 98%;
        height: 100%;
        box-shadow: 0px 0px 5px gray;
        padding: 5px;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        grid-template-areas: "overlap";

    }

    #bag1 {
        width: 100%;
        padding: 0;
        margin: 0;
        grid-area: overlap;

    }

    #cenimg {
        margin-top: -15px;
        border-radius: 25px;
        padding: 2px;
    }

    hr {
        background-color: black;
        border: 2px solid var(--maincolor);


    }

    #hr2 {
        margin-left: 50%;
        margin-top: -26px;

    }

    .card {

        display: inline-block;
        margin: 50px 50px;
        width: 20%;
        height: 60%;
        padding: 0px;
        border-radius: 10px;
        border: 2px solid white;
        background-color: white;
        margin-top: 50px;
        grid-area: overlap;
        box-shadow: -2px -2px 3px gray;
        float: left;

    }

    .card:hover {
        transform: translateY(-12px);
        transition-delay: 0.1s;
        box-shadow: 0px 11px 14px gray;
    }

    .pic img {
        margin: 0;
        width: 98%;
        height: 250px;
        padding: 0px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border: 3px solid var(--maincolor);

    }

    .title {
        text-align: center;
        padding: 10px;
    }

    .des {
        text-align: center;
        padding: 10px;


    }

    .title h2 {
        font-family: tahoma;
    }

    .rate h2 {
        background: var(--g1);
        margin: 30px 50px;
        border-radius: 25px;
        padding: 4px 15px;
        color: white;
        font-size: 20px;
    }

    .rate h2:hover {
        padding-left: 20px;
        transition: .5s;
    }

    .des p {
        color: var(--maincolor);
        font-size: 20px;

    }

    #c1 {
        margin-top: 50px;
        margin-left: 140px;
    }

    #c2 {
        margin-top: 50px;
        margin-left: 570px;
    }

    #c3 {
        margin-top: 50px;
        margin-left: 1000px;
    }

    @media screen and (max-width: 600px) {
        body {
            widows: 100%;
        }

    }
    </style>
</head>

<body onload="changeImg()">
    <div id="main" class="fade">

        <img src="partials/slideshow4.jpg" name="img1" class="slider" alt="">

    </div>
    <br>
    <br>
    <br>
    <hr style="max-width:50%;" id="hr1">
    <center><img src="partials/icon1.jpg" id="cenimg" style="width: 30px"></center>
    <hr style="max-width:50%;" id="hr2">

    <div id="box2">

        <img src="partials/Images/bag1.jpg" id="bag1">

        <div class="card" id="c1">
            <div class="pic" id="pic1">
                <img src="partials/Images/gold.gif">
            </div>

            <div class="title">
                <h2>GOLD</h2>
            </div>

            <div class="des">
                <p>22kt gold price in india per gram</p>
            </div>
            <div class="rate">
                <h2>Rs. 4,860.00</h2>
            </div>
        </div>

        <div class="card" id="c2">
            <div class="pic">
                <img src="partials/Images/silver.gif">
            </div>

            <div class="title">
                <h2>SILVER</h2>
            </div>

            <div class="des">
                <p>1 gram silver price in india</p>
            </div>
            <div class="rate">
                <h2>Rs. 56.30</h2>
            </div>
        </div>

        <div class="card" id="c3">
            <div class="pic">
                <img src="partials/Images/Platinum.gif">
            </div>

            <div class="title">
                <h2>PLATIUM</h2>
            </div>

            <div class="des">
                <p>1 gram platium price in india</p>
            </div>
            <div class="rate">
                <h2>Rs. 2,903.99</h2>
            </div>
        </div>

        <script>
        var images = new Array('partials/Images/s7.jpg', 'partials/Images/slideshow2.jpg',
            'partials/Images/slideshow3.jpg', 'partials/Images/slideshow4.jpg', 'partials/Images/slideshow5.jpg',
            'partials/Images/slideshow6.jpg', 'partials/Images/s8.jpg', 'partials/Images/s9.jpg',
            'partials/Images/s10.jpg');

        count = 0;

        count = 0;

        function changeImg() {
            if (document.images) {
                count++;
                if (count == images.length) {
                    count = 0;
                }
                document.img1.src = images[count];
                setTimeout("changeImg()", 2000);
            }
        }
        </script>
</body>

</html>