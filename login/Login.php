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

            //read from database
            $query = "select * from users where User_name = '$User_name' limit 1";

            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_fetch_assoc($result) > 0){


                    $user_data = mysqli_fetch_assoc($result);

                    //Checks if login password is identical to database password
                    if($user_data['Password'] === $Password){

                        $_SESSION['user_id'] =$user_data['$user_id'];

                        return $user_data;
                    }
                }
            }

            else{
                echo "Wrong password";
            }
        } else
        {
            echo "Please enter valid information";
        }
    }
?>

