
    <div class="container-max">
        <div class="row align-items-center">

            <div class="col-6" id="rectangle13">             
                
            <div class="reg-title-left">
                <p>Discover the world's top developers and artists.</p>
            </div>
                <img src="<?php echo base_url('img/daily-life-vector.png'); ?>" class="daily-vector" alt="Daily Life Vector">              
            </div>

            <div class="col-6" >

             <form method="POST" action="<?= base_url() ?>Main_control/login">    

                <div class="input-field-address">
                    <p>What's your email address?</p>
                </div>

                <div class="form-floating mb-3 email-input">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                    <label for="floatingInput" class="input-floating-label">Email address</label>
                    <span class="text-danger"><?php echo form_error('email') ?></span>
                </div>

                <button type="button" class="btn btn-link signup-phone">Sign up with email</button>

                <div class="input-field-login-password">
                    <p>Your password</p>
                </div>
                <div class="form-floating login-password-input">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                    <label for="floatingPassword" class="input-floating-label">Password</label>
                    <span class="text-danger"><?php echo form_error('password') ?></span>
                </div>

                <div class="before-submit-note">
                    <p>Get the latest content, newsletters, promotions, recommendations and account updates sent to your email.</p>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto big-submit-btn">
                    <button class="btn" type="submit" name="insert" value="Login">Login</button>
                    <?php echo $this->session->flashdata("error"); ?>
                </div>
        
                <div class="after">
                    <p>By continuing, you agree to Test’s Terms of Service and confirm that you have read the Test’s Privacy Policy.</p>
                </div>

                <div class="line1"></div>
                
                
                    <a type="button" class="btn btn-link existing-acc" name="existing-account" href="<?php echo base_url('Main_control/signup') ?>">Create an Account <span style="color: #F1B104;">Create</span></a>
                
             </form>
            </div>
        </div>
    </div>
