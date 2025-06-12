<?php
    function connection()
    {
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "purusharth";

        //  $conn = mysqli_connect($server , $username , $password , $dbname);
         $conn =new mysqli($server , $username , $password , $dbname);
        // echo "connection secsessfull.......";
        return $conn;
    }
    // function insert($conn)
    // {
    //     $sql = "insert into registration values(NULL,'".$_REQUEST["name"]."','".$_REQUEST["dob"]."','".$_REQUEST["gender"]."',".$_REQUEST["mono"].",'".$_REQUEST["email"]."','".$_REQUEST["hno"]."','".$_REQUEST["city"]."','".$_REQUEST["state"]."',".$_REQUEST["zip"].",'".$_REQUEST["country"]."','".$_REQUEST["uname"]."','".$_REQUEST["pass"]."','".$_REQUEST["cpass"]."')";
    //      $conn->query($sql);
    //     // mysqli_query($conn, $sql);

    //     if ($conn->query($sql) === TRUE) {
    //         echo "record inserted successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }
    // }
?>