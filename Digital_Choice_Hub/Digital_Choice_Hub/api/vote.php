<?php
    session_start();
    include '../db_files/dbcon.php';

    $votes = $_POST['gvotes'];
    $total_votes= $votes+1;
    $gid = $_POST['gid'];
    $uid = $_SESSION['id'];

    $update_votes = mysqli_query($con, "update voters set votes='$total_votes' where id='$gid'");
    $update_status = mysqli_query($con, "update voters set status=1 where id='$uid'");

    if($update_status and $update_votes){
        $getGroups = mysqli_query($con, "select username, photo, votes, id from voters where role=2 ");
        $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
        $_SESSION['status'] = 1;
        echo '<script>
                    alert("VOTING SUCCESSFUL...! :)");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    else{
        echo '<script>
                    alert("VOTING FAILED...! :( TRY AGAIN");
                    window.location = "../routes/dashboard.php";
                </script>';
    }
    
?>