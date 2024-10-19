<?php
    session_start();
    if(! isset ($_SESSION['data'])){
        ?>
            <script>
                window.location "../";
            </script>
        <?php
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>Digital CHOICE Hub - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="../api/logout.php"><button id="logout-button">Logout</button></a>
            <h1>Digital CHOICE Hub</h1>  
            <marquee style="font-size:1.5rem;text-shadow:0px 10px 5px gray">Welcome to online polling system </marquee>
            </div>
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection" style="border-radius:0px 30px;border:5px solid black;">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
                    <b>Name : </b><?php echo $data['username'] ?><br><br>
                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                    <b>Email ID : </b><?php echo $data['email'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
                <div id="groupSection" style="border-radius:0px 20px ;border:5px solid black">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Group Name : </b><?php echo $groups[$i]['username']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button name="votebtn" style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                    if(isset($_POST['votebtn']))
                                    {
                                      ?>  
                                            <script>
                                            alert("ONCE YOU WILL VOTE THEN YOU WILL NOT BE ABLE TO CAST VOTE AGAIN. Are you sure you want to vote <?php echo $groups[$i]['username']?> ");
                                            </script>
                                    <?php
                                    }
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <marquee direction="left"><b>NO GROUPS AVAILABLE RIGHT NOW</b></marquee>
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
    </body>
</html>