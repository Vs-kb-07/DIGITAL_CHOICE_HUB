<!DOCTYPE html>
<html>
    <head>
        <title>Digital CHOICE Hub - Login</title>
        <?php include '../css/style.php' ?>
        <?php include '../links/links.php' ?>
    </head>
    
    <body>
        <div class="card bg-light" style="height:780px; background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%)! important">
            <article class="card-body mx-auto" style="max-width: 500px;scale:0.9 ;border:5px solid black;border-radius: 0px 20px;background:white;width:100!important;padding:2%" >
            <h2 class="card-title mt-3 text-center"><i class="fa-solid"><b>CREATE  ACCOUNT</b></i></h2>
            <p class="divider-text">
                <span class="bg-light"><i class="fa-solid"><b>OR</b></i></span>
            </p>
            <h5 class="text-center">Enroll Yourself for Online POLLING</h5><br>
            
            <marquee behavior="" direction="";>
            <i class="fa-solid fa-lg"><b>NOTICE:</b></i>
            <b>Please provide valid</b>  
            <i class="fa-solid fa-envelope"><b> EMAIL ID   &   </b></i>
            <i class="fa-solid fa-phone"><b> PHONE NUMBER </b></i>
            <b>for further Validation.</b>
            </marquee>
            
            <form action="../api/register.php" method="POST" enctype="multipart/form-data">
            
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-user fa-lg"> </i> </span>
                    </div>
                    <input name="username" class="form-control" placeholder="FirstName  LastName" type="text" required>
                </div> <!-- form-group// -->
                
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-envelope fa-lg"> </i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email ID" type="email" required>
                </div> <!-- form-group// -->
                
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-phone fa-lg"> </i> </span>
                    </div>
                    <input name="mobile" class="form-control" placeholder="Phone Number" type="mobile"
                    pattern="[6789][0-9]{9}" title="Enter a valid 10-digit INDIAN Moblie Number" required>
                </div> <!-- form-group// -->
                
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-location-dot fa-lg"> </i> </span>
                    </div>
                    <input name="address" class="form-control" placeholder=" Address" type="text" required>
                </div> <!-- form-group// -->


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-square-check fa-lg"> </i> </span>
                        <div>
                           <label for="role"> Are you a Voter OR Candidate ? </label>
                            <select name="role" id="role" required>
                                <option value="" default>SELECT YOUR ROLE</option>
                                <option value="1">VOTER</option>
                                <option value="2">CANDIDATE</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- form-group// -->

                
                <div class="form-group input-group">
                    <div id="upload" class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-file-arrow-up fa-lg"> </i> </span>
                        Upload Image 
                        <input name="photo" class="form-control" type="file" id="profile" required>
                    </div>
                </div> <!-- form-group// -->
                
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> 
                            <i class="fa-solid fa-lock fa-lg"></i>
                         </span>
                    </div>
                    <input class="form-control" placeholder="Create Password" type="password" name="password"
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*_=+-]).{8,12}$"
                    title="Password must 8 to 12 characters long containing at least one lowercase and one uppercase letter, one number, and one special character" value="" required>
                </div> <!-- form-group// -->
                
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-key fa-lg"> </i> </span>
                    </div>
                    <input class="form-control" placeholder="Confirm Password" type="password" name="cpassword"
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*_=+-]).{8,12}$"
                    title="Password must 8 to 12 characters long containing at least one lowercase and uppercase letter, one number, and one special character" value="" required>
                </div> <!-- form-group// -->

                
                <div class="form-group">
                    <button type="submit" name="submit" class=" btn btn-primary btn-block"> REGISTER </button>
                </div> <!-- form-group// -->
                
                <h5 class="text-center">Already have an Account? <a href="../">Login</a> </h5>
            </form>
        </article>
    </div><!-- card.// -->
</div>
</div>
</div>
</body>
</html>
