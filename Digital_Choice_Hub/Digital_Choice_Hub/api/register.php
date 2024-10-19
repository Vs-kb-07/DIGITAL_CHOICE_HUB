<?php

include '../db_files/dbcon.php';

if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];
    
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    
    $emailquery = "select * from voters where email='$email'";
    $query = mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);
    
    if($emailcount>0)
    {
        ?>
        <script>
            alert("Email ID already exists...! :( TRY AGAIN ");
            window.location = "../routes/registration.php";
        </script>
        <?php
    }
    else
    {
        if($password === $cpassword)
        {
            $insertquery = "INSERT INTO voters (username, email, mobile, address, role, photo, password, cpassword, votes,status)
            VALUES ('$username','$email','$mobile','$address','$role','$image','$pass','$cpass',0,0)";
            
            $iquery = mysqli_query($con, $insertquery);
            
            if ($iquery)
            {
                move_uploaded_file($tmp_name, "../uploads/$image");
                ?>
                <script>
                    alert("REGISTRATION SUCCESSFUL...! :)");
                    location.replace("../");
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("REGISTRATION NOT DONE DUE TO SOME ERROR OCCURED! :( TRY AGAIN");
                    window.location = "../routes/registration.php";
                </script>
                <?php
            }
        }
        else
        {
            ?>
            <script>
                alert("PASSWORD & CONFIRM PASSWORD DOES NOT MATCH..! :( ");
                window.location = "../routes/registration.php";
            </script>
            <?php
        }
    }
}
?>