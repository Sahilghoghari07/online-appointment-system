<?php 
    session_start();
    $logpage = $_SESSION['userrname'];
    if(!$logpage)
    {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home - Purusharth</title>
    <link rel="icon" href="./img/icon.png">
    <style>
    *::-webkit-scrollbar {
        display: none;
    }

    header {
        background-color: rgb(52, 83, 110);
        color: white;
        min-height: 4vh;
    }

    header .left {
        justify-content: space-around;
        display: flex;
        margin: auto;
        font-size: 2vh;
        padding-top: 4px;
    }

    header .left div {
        padding-left: 50px;
    }

    @media screen and (max-width:400px) {
        header .left {
            display: list-item;
            text-align: center;
        }

        nav .left img {
            height: 5vh;
            width: 15vh;
        }
    }

    nav {
        background-color: rgb(165, 209, 248);
    }

    nav .left {
        margin-left: 30px;
    }

    nav .right {
        margin-right: 30px;
    }

    nav .left img {
        height: 8vh;
        width: 20vh;
    }

    nav .right ul li {
        list-style: none;
        display: inline;
        padding-right: 50px;
    }

    nav .right ul li a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        font-size: 22px;

    }

    nav .right ul li a:hover {
        color: rgb(52, 83, 110);
    }

    nav .right ul li a#active {
        color: rgb(52, 83, 110);
    }

    nav .icon {
        content-visibility: hidden;
        display: none;
    }

    .minnav {
        content-visibility: hidden;
    }

    @media screen and (max-width:1010px) {
        nav .right {
            /* font-size: 15px; */
            display: none;
        }

        nav .icon {
            content-visibility: visible;
            display: inherit;
        }

        nav {
            border-bottom: 1px solid rgb(52, 83, 110);
        }

        .minnav {
            content-visibility: visible;
            text-align: center;
            background-color: rgb(165, 209, 248);
            height: 80vh;
            padding-top: 5%;
        }

        .minnav ul li {
            list-style: none;
            /* text-align: right; */
            padding: 15px;
        }

        .minnav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 15px;

        }

        .minnav ul li a:hover {
            color: rgb(52, 83, 110);
        }

        .minnav ul li a#active {
            color: rgb(52, 83, 110);
        }

    }

    main .img img {
        padding-top: 5vh;
        height: 50vh;
        width: 100%;
    }

    main .container .exbox {
        display: flex;
        padding: 6%;
        text-align: center;
    }

    main .container .exbox div {
        padding: 20px;
        background-color: #e5eaed;
        height: 180px;
        width: 250px;
        margin: auto;
    }

    main .container .exbox div p {
        font-size: 3vh;
        font-weight: bold;
        color: rgb(52, 83, 110);
    }

    @media screen and (max-width:1400px) {
        main .container .exbox div {
            width: 200px;
        }
    }

    @media screen and (max-width:1000px) {
        main .container .exbox {
            display: block;
        }

        main .container .exbox div {
            width: 300px;
            margin-bottom: 30px;
        }
    }

    footer {
        width: 100%;
        background-color: rgb(52, 83, 110);
        color: whitesmoke;
        padding: 20px;
        margin-top: 30px;
    }

    .foot {
        display: flex;
        justify-content: space-around;
    }

    .foot a {
        text-decoration: none;
        /* color: whitesmoke; */
    }

    footer p,
    a {
        color: rgb(186, 185, 185);
    }

    footer p,
    a:hover {
        color: rgb(228, 228, 228);
    }

    footer .location,
    .call,
    .email {
        display: flex;
        padding-top: 15px;
    }

    footer .icon {
        padding-right: 15px;
    }

    footer .copy {
        padding-top: 50px;
    }

    @media screen and (max-width:650px) {
        .foot {
            display: block;
            text-align: left;

        }

        .foot h2,
        h4 {
            font-size: x-large;
        }

        .foot p {
            font-size: 15px;
        }

        .name,
        .menu,
        .services,
        .contact {
            margin-bottom: 30px;
        }

        footer .location,
        .call,
        .email {
            font-size: 15px;

        }

        footer .icon svg {
            height: 25px;
            width: 25px;
        }

        .copy p {
            font-size: 8px;
        }
    }

    .main {
        display: flex;
        justify-content: space-around;
        margin-top: 5%;
    }

    .main .right img {
        background-color: rgb(52, 83, 110);
        border-radius: 50% 15%;
    }

    @media screen and (max-width:600px) {
        main .right img {
            height: 300px;
        }
    }

    @media screen and (max-width:350px) {
        main .right img {
            height: 200px;
        }
    }

    .main .left h2 {
        font-size: 5vh;
        font-weight: bold;
        color: #0b5ea2;
        padding-top: 180px;
        padding-left: 120px;
    }

    .main .left p {
        padding-left: 120px;
        font-size: 25px;
    }

    main .box {
        display: flex;
        margin-top: 80px;
        padding-left: 40px;
        padding-right: 40px;
    }

    main .box .box1 {
        color: white;
        background-color: rgb(52, 83, 110);
        padding: 40px;
        margin-left: 20px;
        border-radius: 5px;
    }

    main .box .box1 h3 {
        font-size: 40px;
        padding-bottom: 20px;
    }

    main .box .box1 button {
        border-radius: 20px;
    }

    main .box .box1 a {
        color: white;
        text-decoration: none;
    }

    main .box .box1 a:hover {
        color: #0b5ea2;
    }

    main .box .box1 button:hover {
        background-color: white;
    }

    main .box .box2,
    .box3,
    .box4 {
        background-color: #e5eaed;
        padding: 40px;
        margin-left: 20px;
        border-radius: 5px;
        text-align: center;
        margin-top: 40px;
    }

    main .box .box2 p,
    .box3 p,
    .box4 p {
        padding-top: 30px;
    }

    @media screen and (max-width:1150px) {
        .main {
            display: inline;
            text-align: center;
        }

        main .box {
            /* display: inline; */
            display: grid;
            place-items: center;
        }

        main .box1,
        .box2,
        .box3,
        .box4 {
            width: 500px;
        }
    }

    @media screen and (max-width:600px) {

        main .box1,
        .box2,
        .box3,
        .box4 {
            width: 300px;
        }
    }

    @media screen and (max-width:400px) {

        main .box1,
        .box2,
        .box3,
        .box4 {
            width: 150px;
        }

        main .container .exbox div {
            width: 150px;
        }

        .main .left p {
            padding-left: 50px;
            font-size: 10px;
        }

        .main .left h2 {
            font-size: 3vh;
            font-weight: bold;
            color: #0b5ea2;
            padding-top: 50px;
            padding-left: 50PX;
        }
    }
    </style>
    <script>
    $(document).ready(function() {
        $(".minnav").hide();
        $("#x").hide();
        $("#list").click(function() {
            $("#list").hide();
            $("#x").show();
            $(".minnav").slideToggle();
        });
        $("#x").click(function() {
            $("#list").show();
            $("#x").hide();
            $(".minnav").slideToggle();
        })
    });
    </script>
</head>

<body>
    <?php 
        include('connect.php');
        $conn = connection();
    ?>
    <header>
        <div class="left">
            <div class="mail">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-envelope" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg><i class="bi bi-envelope"></i>
                purusharth@yahoo.com
            </div>
            <div class="phone">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone"
                    viewBox="0 0 16 16">
                    <path
                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg><i class="bi bi-phone"></i>
                +91 84880 23923
            </div>
        </div>
    </header>
    <nav class="navbar">
        <div class="left">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="right">
            <ul>
                <li><a href="index.php" id="active">HOME</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="department.php">DEPARTMENT</a></li>
                <li><a href="appointment.php">APPOINTMENT</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
        <div class="icon"><button class="btn btn-link" id="list"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                    height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg><i class="bi bi-list"></i></button>
            <button class="btn btn-link" id="x"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                </svg><i class="bi bi-x-lg"></i></button>
        </div>

    </nav>
    <div class="minnav">
        <ul>
            <li><a href="index.php" id="active">HOME</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="department.php">DEPARTMENT</a></li>
            <li><a href="appointment.php">APPOINTMENT</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
    </div>
    <!-- main content -->
    <main>
        <div class="main">
            <div class="left">
                <h2><?php echo "<div class='text-dark'>Hello, ". $_SESSION['userrname']."</div>"; ?>WELCOME TO PURUSHARTH</h2>
                <p>Dedicated to your health, committed to your well-being.</p>
            </div>
            <div class="right">
                <img src="./img/doctor.png">
            </div>
        </div>
        <div class="box">
            <div class="box1">
                <h3>Why Choose Purusharth?</h3>
                <p>We are committed to excellence in every aspect of our operations. From maintaining rigorous safety
                    standards to ensuring the highest quality of patient care, we continually strive to exceed your
                    expectations and improve our services.</p>
                <button class="btn btn-primary"><a href="services.php">Learn More ></a></button>
            </div>
            <div class="box2">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0b5ea2" class="bi bi-hospital"
                    viewBox="0 0 16 16">
                    <path
                        d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z" />
                    <path
                        d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z" />
                </svg><i class="bi bi-hospital"></i>
                <p>Our hospital is staffed with a team of highly skilled and experienced medical professionals. Our
                    doctors, nurses, and specialists are leaders in their fields, bringing a wealth of knowledge and
                    expertise to every aspect of your care.</p>
            </div>
            <div class="box3">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0b5ea2"
                    class="bi bi-card-checklist" viewBox="0 0 16 16">
                    <path
                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                    <path
                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                </svg><i class="bi bi-card-checklist"></i>
                <p>Purusharth Hospital offers a full spectrum of healthcare services, from routine check-ups and
                    preventive care to specialized treatments and emergency care. No matter what your healthcare needs
                    may be, we have the resources and expertise to meet them.</p>
            </div>
            <div class="box4">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0b5ea2" class="bi bi-capsule"
                    viewBox="0 0 16 16">
                    <path
                        d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z" />
                </svg><i class="bi bi-capsule"></i>
                <p>We believe in providing clear and transparent information about your care and associated costs. Our
                    goal is to make high-quality healthcare accessible and affordable, ensuring you receive value
                    without compromising on excellence.</p>
            </div>
        </div>
        <div class="img">
            <img src="./img/hero-bg.jpg">
        </div>
        <div class="container">
            <div class="exbox">
                <div class="doctor">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="40" width="40">
                        <path
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1l0 50.8c27.6 7.1 48 32.2 48 62l0 40c0 8.8-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l0-24c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 24c8.8 0 16 7.2 16 16s-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16l0-40c0-29.8 20.4-54.9 48-62l0-57.1c-6-.6-12.1-.9-18.3-.9l-91.4 0c-6.2 0-12.3 .3-18.3 .9l0 65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7l0-59.1zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                    </svg>
                    <br>
                    <h4>Doctor</h4>
                    <p> <?php
                                $result = $conn->query("select * from doctor_reg");
                                $row = mysqli_num_rows($result);
                                echo $row;
                                ?></p>
                </div>
                <div class="department">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-building-fill" viewBox="0 0 16 16">
                        <path
                            d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                    </svg><i class="bi bi-building-fill"></i>
                    <br>
                    <h4>Department</h4>
                    <p> <?php
                                $result = $conn->query("select * from department");
                                $row = mysqli_num_rows($result);
                                echo $row;
                                ?></p>
                </div>
                <div class="User">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="40" height="40">
                        <path
                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z" />
                    </svg>
                    <br>
                    <h4>Users</h4>
                    <p> <?php
                                $result = $conn->query("select * from patient_reg");
                                $row = mysqli_num_rows($result);
                                echo $row;
                                ?></p>
                </div>
                <div class="Avords">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="40" height="40">
                        <path
                            d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                    </svg>
                    <br>
                    <h4>Award</h4>
                    <p>25</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="foot">
            <div class="name">
                <h2>Purusharth</h2>
                <p>Be healthy & Safe</p>
            </div>
            <div class="menu">
                <h2>Useful Links</h2>
                <p><a href="index.php" id="active">Home</a></p>
                <p><a href="services.php">Services</a></p>
                <p><a href="department.php">Department</a></p>
                <p><a href="appointment.php">Appointment</a></p>
                <p><a href="contact.php">Contact us</a></p>
                <p><a href="logout.php">Logout</a></p>
            </div>
            <div class="services">
                <h2>Services</h2>
                <p><a href="services.php">Emergency</a></p>
                <p><a href="services.php">ICU</a></p>
                <p><a href="services.php">Surgery</a></p>
                <p><a href="services.php">Laboratory</a></p>
                <p><a href="services.php">Diagnostic Imaging</a></p>
                <p><a href="services.php">Cardiology</a></p>
            </div>
            <div class="contact">
                <h2>Contact</h2>
                <div class="location">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <h4>Location</h4>
                        Purusharth hospital, Nanived, <br>Near by Ved-variyav bridge, <br>Surat - 395004
                    </div>
                </div>

                <div class="call">
                    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-phone" viewBox="0 0 16 16">
                            <path
                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg><i class="bi bi-phone"></i></div>
                    <div>
                        <h4>Mobile Number</h4>
                        +91 84880 23923
                    </div>
                </div>

                <div class="email">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg><i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <h4>E-mail</h4>
                        purusharth@yahoo.com
                    </div>
                </div>


            </div>
        </div>
        <div class="copy">
            <p class="text-center text-white">&copy; copyright Purusharth all rights reserved</p>
        </div>
    </footer>
</body>

</html>