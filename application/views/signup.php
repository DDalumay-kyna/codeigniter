<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="figma.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <title>Registration Form</title>
</head>
<body>
    <div class="container-max">
        <div class="row align-items-center">

            <div class="col-6" id="rectangle13">             
                
            <div class="reg-title-left">
                <p>Discover the world's top developers and artists.</p>
            </div>
                <img src="img/daily-life-vector.png" class="daily-vector" alt="Daily Life Vector">              
            </div>

            <div class="col-6" >

          

                <div class="signup-title">
                    <p>Sign up</p>
                </div>

                <div class="sub-signup-title">
                    <p>Discover our products and features</p>
                </div>
                
                <div class="input-field-name">
                    <p>What's your name?</p>
                </div>

                <form method="POST">    

                <div class="form-floating mb-3 name-input-first-name">
                    <input type="text" class="form-control" id="validationDefault01" name="first_name" placeholder="First name" required>
                    <label for="validationDefault01" class="input-floating-label">First name</label>
                </div>     

                <div class="form-floating mb-3 name-input-last-name">
                    <input type="text" class="form-control" id="floatingInput" name="last_name" placeholder="Last name" required>
                    <label for="floatingInput" class="input-floating-label">Last name</label>
                </div>   

                <div class="input-field-address">
                    <p>What's your email address?</p>
                </div>

                <div class="form-floating mb-3 email-input">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                    <label for="floatingInput" class="input-floating-label">Email address</label>
                </div>

                <button type="button" class="btn btn-link signup-phone">Sign up with email</button>

                <div class="input-field-birthday">
                    <p>When's your birthday?</p>
                </div>

                <div class="month-dropdown">
                <select class="form-select" id="month-dropdown" name="birth_month" aria-label="Default select example" required>
                        <option selected >Month</option>
                        <option value="1">January</option>
                        <option value="2">Febuary</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>

                <div class="day-dropdown">
                    <select class="form-select" id="day-dropdown" name="birth_day" aria-label="Default select example" required>
                     <option selected >Day</option>
                       <?php 
                        for($i = 1 ; $i <= 31; $i++){
                            echo "<option>$i</option>";
                        }
                        ?>
                    </select>
                </div> 

                <div class="year-dropdown">
                    <select class="form-select" id="year-dropdown" name="birth_year" aria-label="Default select example" required>
                        <option selected >Year</option>
                        <?php 
                        for($i = 1930 ; $i <= date('Y'); $i++){
                            echo "<option>$i</option>";
                        }
                        ?>2
                    </select>
                </div>            

                <div class="birthday-note">
                <p>Your birthday won't be shown publicly</p>
                </div>

                <div class="input-field-password">
                    <p>Your password</p>
                </div>
                <div class="form-floating password-input">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                    <label for="floatingPassword" class="input-floating-label">Password</label>
        
                </div>

                <div class="before-submit-note">
                    <p>Get the latest content, newsletters, promotions, recommendations and account updates sent to your email.</p>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto big-submit-btn">
                    <button class="btn" type="submit">Submit</button>
                </div>
        
                <div class="after">
                    <p>By continuing, you agree to Test’s Terms of Service and confirm that you have read the Test’s Privacy Policy.</p>
                </div>

                <div class="line1"></div>
                
                
                    <a type="button" class="btn btn-link existing-acc" name="existing-account" href="login.php">Already have an account? <span style="color: #F1B104;">Sign in</span></a>
                
             </form>

            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>