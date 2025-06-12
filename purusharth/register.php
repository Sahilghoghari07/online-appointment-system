<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="./img/icon.png">
    <title>Register - Purusharth</title>
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

    .container h4 {
        padding-left: 50px;
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

    .left {
        overflow-y: scroll;
        height: 40vh;
    }

    .left::-webkit-scrollbar {
        display: none;
    }

    label {
        margin-top: 10px;
        margin-bottom: 5px;
    }

    legend {
        margin-top: 15px;
        font-style: italic;
    }

    .form-group {
        padding-left: 15px;
        padding-right: 5px;
    }

    #terms {
        padding-left: 15px;
        margin-top: 20px;
    }

    .left,
    .right {
        width: 50%;
    }

    .btn {
        margin-bottom: 20px;
        margin-top: 20px;
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
            height: 60vh;
        }
    }
    </style>
    <script src="./js/validation.js"></script>
</head>

<body>
    <?php
        include_once("connect.php");
        $conn = connection();

        if(isset($_REQUEST["signup"])){
            $check = $conn->query("select * from patient_reg where username = '".$_REQUEST["uname"]."'");
            if($check->num_rows > 0){
                echo "<script> alert ('Username already exist...' )</script>";
            }
            else
            {
                $sql = "insert into patient_reg values(NULL,'".$_REQUEST["name"]."','".$_REQUEST["dob"]."','".$_REQUEST["gender"]."',".$_REQUEST["mono"].",'".$_REQUEST["email"]."','".$_REQUEST["hno"]."','".$_REQUEST["city"]."','".$_REQUEST["state"]."',".$_REQUEST["zip"].",'".$_REQUEST["country"]."','".$_REQUEST["uname"]."','".$_REQUEST["pass"]."','".$_REQUEST["cpass"]."')";
                $conn->query($sql);
                
                header("location:login.php");
            }
        }
    ?>
    <form method="post" action="register.php" name="myform">
        <div class="container">
            <img src="./img/logo.png" id="logo">
            <hr>
            <h4>Create an account</h4>
            <div class="part">
                <div class="left">
                    <fieldset>
                        <legend>Personal details</legend>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" maxlength="30" placeholder="enter your name"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <p><input type="radio" name="gender" value="Male" class="form-check-input"> Male
                                <input type="radio" name="gender" value="Female" class="form-check-input"> Female
                            </p>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Contact details</legend>
                        <div class="form-group">
                            <label for="mono">Mo.no.</label>
                            <input type="text" name="mono" maxlength="10" placeholder="XXXXX XXXXX"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" maxlength="30" placeholder="enter e-mail address"
                                class="form-control">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Address details</legend>
                        <div class="form-group">
                            <label>House/Building No.</label>
                            <input type="text" name="hno" maxlength="10" class="form-control" required>
                            <label>Area/Location</label>
                            <input type="text" name="area" maxlength="50" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" maxlength="20" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="state" maxlength="20" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>ZIP/Postal code</label>
                            <input type="text" name="zip" maxlength="6" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" maxlength="20" class="form-control" required>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Account creation</legend>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="uname" maxlength="15" placeholder="enter your username"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Create Password</label>
                            <input type="password" name="pass" maxlength="15" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" name="cpass" maxlength="15" class="form-control" required>
                        </div>
                    </fieldset>
                    <input type="submit" value="Sign Up" name="signup" class="btn btn-primary col-12"
                        onclick="return validate()">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>
                <div class="right">
                    <img src="./img/dfhasthwthwth.png">
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<!-- INSERT INTO `registration` (`id`, `fullname`, `dob`, `gender`, `mono`, `email`, `hous`, `city`, `state`, `zip`, `country`, `username`, `password`, `conformpassword`) VALUES (NULL, 'yagnik', '2024-08-14', 'male', '1111111111', 'asa@gmail.com', 'as12', 'surat', 'gujrat', '395004', 'india', 'qwe', 'asd', 'asd'); -->