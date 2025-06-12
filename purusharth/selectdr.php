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
    <title>Doctor - Purusharth</title>
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

    footer {
        width: 100%;
        background-color: rgb(52, 83, 110);
        color: whitesmoke;
        padding: 20px;
    }

    .foot {
        display: flex;
        justify-content: space-around;
    }

    .foot a {
        text-decoration: none;
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

    .container h2 {
        text-align: center;
        margin-top: 30px;
        padding-bottom: 30px;
        font-size: 50px;
        font-weight: bold;
    }

    .container .card {
        margin-right: 30px;
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
        include_once("connect.php");
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
                <li><a href="index.php">HOME</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="department.php" id="active">DEPARTMENT</a></li>
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="department.php" id="active">DEPARTMENT</a></li>
            <li><a href="appointment.php">APPOINTMENT</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
    </div>
    <!-- main content -->
    <main>
    <div class="container">
            <h2 class="text-center">Doctors</h2>
            <div class="row">
                <?php
                   $result = $conn -> query("select * from doctor_reg where department='".$_REQUEST["seldept"]."' ");
                    while($row = $result -> fetch_assoc())
                    {
                ?>
                <div class="card bg-light my-3" style="width: 18rem;">
                    <a href="drappoitment.php?drname=<?php echo $row["name"];?>" class="btn">
                        <div class="card-body">
                            <h4 class="card-title">Dr. <?php echo $row["name"];?></h4>
                        </div>
                    </a>
                </div>
                <?php } 
                ?>
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