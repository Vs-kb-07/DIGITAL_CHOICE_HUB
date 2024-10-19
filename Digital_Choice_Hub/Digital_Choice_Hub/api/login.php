<?php

session_start();
include '../db_files/dbcon.php';
        
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    $email_search = "select * from voters where email='$email' and role='$role'";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);
    
    if($email_count)
    {
        $_SESSION['email_count'] = $email_count;

        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $pass_decode = password_verify($password, $db_pass);
        
        if ($pass_decode)
        {
            $_SESSION['pass_decode'] = $pass_decode;

            $check = mysqli_query($con, "select * from voters where email='$email' and role='$role' ");
            
            if(mysqli_num_rows($check)>0)
            {
                $getGroups = mysqli_query($con, "select username, photo, votes, id from voters where role=2 ");
                
                if(mysqli_num_rows($getGroups)>0)
                {
                    $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
                    $_SESSION['groups'] = $groups;
                }
                $data = mysqli_fetch_array($check);
                $_SESSION['data'] = $data;
                $_SESSION['id'] = $data['id'];
                $_SESSION['status'] = $data['status'];
            }
            ?>
            <script>
            alert("LOGGED IN SUCCESSFULLY...! :)");
            window.location = "../routes/dashboard.php";
            </script>
            
            <?php
        }
        else
        {
            ?>
            <script>
                alert("INVALID PASSWORD...! :( TRY AGAIN");
                window.location = "../";
            </script>
            <?php
        }
    }
    else
    {
        ?>
        <script>
            alert("Email ID does not exists...! :( TRY AGAIN");
            window.location = "../";
        </script>
        <?php
    }
}
?>