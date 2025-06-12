<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="../img/icon.png">
    <title>Login - Purusharth</title>
    <style>
    *::-webkit-scrollbar {
        display: none;
    }

    .container {
        border: 1px solid rgb(201, 201, 201);
        border-radius: 30px;
        margin-top: 10%;
        box-shadow: 0 0 10px rgb(170, 169, 169);
    }

    .container h2 {
        padding-left: 50px;
        padding-top: 10px;
    }

    .container #logo {
        height: 10vh;
        width: 30vh;
        margin-left: 30px;
    }

    .part {
        display: flex;
        padding: 30px;
        padding-left: 50px;
        padding-right: 50px;
    }

    .left h4 {
        margin-bottom: 30px;
    }

    label {
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .btn {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .row {
        justify-content: space-around;
        justify-items: center;
    }

    .row #btn {
        background-color: rgb(128, 59, 247);
        color: white;
    }

    .row #btn:hover {
        background-color: rgb(117, 53, 227);
    }

    .left,
    .right {
        width: 50%;
    }

    .right img {
        height: 350px;
        background-color: cornflowerblue;
        border-radius: 25% 50%;
        margin-left: 40px;
    }

    @media screen and (max-width:1420px) {
        .right img {
            height: 300px;
        }
    }

    @media screen and (max-width:1230px) {
        .right img {
            height: 250px;
        }
    }

    @media screen and (max-width:1000px) {
        .right {
            display: none
        }

        .left {
            width: 100%;
        }
    }
    </style>
</head>

<body>
<?php
    include("../connect.php");
    $conn = connection();
    if(isset($_POST["signind"]))
    {
        $username = $_REQUEST["uname"] ;
        $sql = "select * from doctor_reg where uname='". $_REQUEST["uname"] ."' and pass ='". $_REQUEST["pass"] ."'";
        $date = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($date);
        if($check == 1)
        {
            $_SESSION['doctorname'] = $username;
            header("location:index.php");
        }
        else
        {?>
            <div class="alert alert-warning" role="alert">
                Username Or Password Incorrect!
            </div>
        <?php 
            }
        }
    ?>
    <form method="post" action="#">
        <div class="container">
            <img src="../img/logo.png" id="logo">
            <hr>
            <div class="part">
                <div class="left">
                    <h4>Login to Purusharth Hospital</h4>
                    <label for="username">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg><i class="bi bi-person-fill"></i></span>
                        <input type="text" name="uname" placeholder="enter username" class="form-control">
                    </div>
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                            </svg><i class="bi bi-lock-fill"></i></span>
                        <input type="password" name="pass" placeholder="enter password" class="form-control">
                    </div>
                    <div class="row">
                        <input type="submit" value="Login As Doctor" name="signind" class="btn btn-primary col-12">
                        <!-- <input type="submit" value="Login As Admin" name="signina" class="btn col-5" id="btn"> -->
                    </div>
                    <p>Don't have an account? <a href="register_ad.php">Register here</a><br></p>
                </div>
                <div class="right">
                    <img src="../img/dfhasthwthwth.png" alt="">
                </div>
            </div>
        </div>
    </form>
</body>

</html>