<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <style type="text/css">
    :root {
        --bgcolor: #FBEAEB;
        --maincolor: #4A154B;
        --g1: linear-gradient(to right, #aa076b, #61045f);
    }

    * {
        margin: 0px;
        padding: 0px;
    }

    html {
        /*behavior:"smooth";
   transition:1s;*/
        font-size: 62.5%;
        min-width: 40rem;
    }

    body {

        background-color: var(--bgcolor);
        overflow-x: hidden;
        min-width: 40rem;

    }

    #header {
        margin: 0px;
        padding: 0px;

        height: 17rem;

    }

    .icon_cname_menu {
        display: inline-block;

        padding: 0.5rem;
        margin: 0.5rem;
        width: 100%;
        height: 10rem;
    }

    #box1 {
        margin: 0rem;
        padding: 0.5rem;
        width: 100%;
        height: 3rem;
        text-align: center;
        border: 0.3rem solid black;
        background: var(--g1);
        color: white;
    }

    #box1 h2 {
        font-size: 2rem;

    }

    .iconcont {
        margin: 0;
        padding: 0.2rem;
        width: 6%;
        height: 0%;
        display: grid;
        padding: 3rem;
        width: 2rem;
        border-radius: 5rem;
        margin:-10px;
    }

    .iconcont img {
        /* padding:0.2rem; */
        width: 7rem;
        height: 7rem;
        border: 0.2rem solid #4A154B;
        border-radius: 5.5rem;
        display: grid;
    }

    .cname {
        margin: -60px 90px;
        width: 20rem;
        padding: 1rem;
        color: black;
        text-shadow: 3px 3px 5px var(--maincolor);

    }

    #cname p {
        text-align: center;
    }

    .menu {
        margin-top: -3rem;
        padding: 0;
        width: 100%;
        height: 30px;

    }

    .menu ul {
        border-left: 0.4rem solid #4A154B;
        background-color: white;
        margin: 0px;
        padding: 0px;
        text-align: center;
        display: inline-block;
        vertical-align: 50px;
        list-style-type: none;
        margin: 0rem 60rem;
        padding: 0;
        overflow: hidden;
        width: 55%;
    }

    .menu ul li {
        float: left;
        padding: 10px 30px;
    }

    .menu ul li a {
        text-decoration: none;
        color: var(--maincolor);
        font-size: 1.6rem;
        padding: 1rem 1rem;
    }

    .menu ul a:hover {
        color: white;
        background: var(--g1);
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
        transition: .5s;
    }
    </style>

</head>

<body>

    <div id="header">
        <div id="box1">
            <h2>legacy since 1995</h2>
        </div>

        <div class="icon_cname_menu">
            <div class="iconcont">
                <img src="partials/icon1.jpg">
            </div>

            <div class="cname">
                <p>
                <h1 style="font-size:3rem;">Sweet Affairs</h1>
                <h4 style="font-size:1.5rem;">Gold and Diamonds</h4>
                </p>
            </div>


            <div class="menu">
                <ul>

                    <li><a href="/phpmpt/home.php">HOME</a></li>
                    <li><a href="/phpmpt/product.php">PRODUCT</a></li>
                    <li><a href="/phpmpt/locate_shop.php">LOCATE SHOP</a></li>
                    <li><a href="/phpmpt/stone.php">BIRTHSTONE</a></li>
                    <li><a href="/phpmpt/about_us.php">ABOUT US</a></li>

                </ul>
            </div>
        </div>
        <!--icon_cname_menu -->

    </div> <!-- header  -->
</body>

</html>