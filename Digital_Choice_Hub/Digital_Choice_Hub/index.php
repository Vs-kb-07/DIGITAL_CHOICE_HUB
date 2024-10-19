<!DOCTYPE html>
<html>
    <head>
        <title>Digital CHOICE Hub - Login</title>
        <?php include 'css/style.php' ?>
        <?php include 'links/links.php' ?>


        <style>

            .card:hover{
                scale:0.9!important;
                transition:0.2s ease !important;
              
            }
        </style>
    </head>
    <body style="  background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%)! important;display:flex;justify-content:center;align-items:center">
        
        <div class="card bg-light" style="margin-top:130px;width:60%; border-radius:20px">
            <article class="card-body mx-auto" style="max-width: 500px;">
            <h2 class="card-title mt-3 text-center"><i class="fa-solid"><b>LOGIN NOW</b></i></h2>
            <p class="divider-text">
                <span class="bg-light"><i class="fa-solid"><b>OR</b></i></span>
            </p>
            <h5 class="text-center">Verify Yourself for Online Polling</h5><br>

            <form action="api\login.php" method="POST">
            
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-envelope fa-lg"> </i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email ID" type="email" required>
                </div> <!-- form-group// -->


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-key fa-lg"> </i> </span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password"
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*_=+-]).{8,12}$"
                    title="Password must 8 to 12 characters long containing at least one lowercase and uppercase letter, one number, and one special character" value="" required>
                </div> <!-- form-group// --> <br>


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa-solid fa-square-check fa-lg"> </i> </span>
                        <div id="upload">
                           <label for="role"> Are you a Voter OR Candidate ? </label>
                            <select name="role" id="role" required>
                                <option value="" default>SELECT YOUR ROLE</option>
                                <option value="1">VOTER</option>
                                <option value="2">CANDIDATE</option>
                            </select>
                        </div>
                    </div>
                </div> <!-- form-group// --> <br>


                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block"> LOGIN  </button>
                </div> <!-- form-group// -->
                
                
                <h5 class="text-center">Don't have an Account? <a href="routes\registration.php">Sign Up</a> </h5>
            </form>
        </article>
    </div> <!-- card.// -->
</div>
</body>
</html>