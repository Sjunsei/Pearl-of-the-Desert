<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == ["POST"])
    {
        //Data is posted to server
        //data variables
        $User_name = $_POST['User_name'];
        $Password = $_POST['Password'];
        $Tel = $_POST['Tel'];
        $Email = $_POST['E-mail'];

        //Checks if username and password has value

        if(!empty($User_name) && !empty($Password) && !is_numeric($User_name)){

            //Saves to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,User_name,Password) values ('$user_id','$User_name','$Password')";

            mysqli_query($con, $query);

            //Sends user to Login page
            header("Location: login.php");
        } else
        {
            echo "Please enter valid information";
        }
    }
?>