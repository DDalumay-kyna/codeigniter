
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
                    <p>Update information</p>
                </div>
                
                <div class="input-field-name">
                    <p>What's your name?</p>
                </div>

                <form method="POST" action="update.php?ID=<?php echo $userid ?>">    

                <div class="form-floating mb-3 name-input-first-name">
                    <input type="text" class="form-control" id="validationDefault01" name="first_name" value="<?php echo $userfn ?>" placeholder="First name" required>
                    <label for="validationDefault01" class="input-floating-label">First name</label>
                </div>     

                <div class="form-floating mb-3 name-input-last-name">
                    <input type="text" class="form-control" id="floatingInput" name="last_name" value="<?php echo $userln ?>" placeholder="Last name" required>
                    <label for="floatingInput" class="input-floating-label">Last name</label>
                </div>   

                <div class="input-field-address">
                    <p>What's your email address?</p>
                </div>

                <div class="form-floating mb-3 email-input">
                    <input type="email" class="form-control" id="floatingInput" name="email" value="<?php echo $useremail ?>" placeholder="name@example.com" required>
                    <label for="floatingInput" class="input-floating-label">Email address</label>
                </div>

                <button type="button" class="btn btn-link signup-phone">Sign up with email</button>

                <div class="input-field-birthday">
                    <p>When's your birthday?</p>
                </div>

                <div class="month-dropdown">
                    <select class="form-select" id="month-dropdown" aria-label="Default select example" required>
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
                    <select class="form-select" id="day-dropdown" aria-label="Default select example" required>
                        <option selected>Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>

                <div class="year-dropdown">
                    <select class="form-select" id="year-dropdown" aria-label="Default select example" required>
                        <option selected>Year</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="birthday-note">
                <p>Your birthday won't be shown publicly</p>
                </div>

                <div class="input-field-password">
                    <p>Your password</p>
                </div>
                <div class="form-floating password-input">
                    <input type="text" class="form-control" id="floatingPassword" name="password" value="<?php echo $upass ?>" placeholder="Password" required>
                    <label for="floatingPassword" class="input-floating-label">Password</label>
        
                </div>


                <div class="before-submit-note">
                    <p>Get the latest content, newsletters, promotions, recommendations and account updates sent to your email.</p>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto big-submit-btn">
                    <button class="btn" name="update">Update</button>
                </div>
        
                <div class="after">
                    <p>By continuing, you agree to Test’s Terms of Service and confirm that you have read the Test’s Privacy Policy.</p>
                </div>

                <div class="line1"></div>
                
                
                    <a type="button" class="btn btn-link existing-acc btn-lg" href="index.php">Go Back</a>
             </form>

            </div>
        </div>
    </div>
