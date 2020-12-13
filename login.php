<link href="/style/lesson.css" rel="stylesheet">


<?php
 include('navbar.php');

 
 if(isset($_SESSION['User'])){
    header('Location: /');
 }
?>


<style>
  #lessons a:hover{
    color: black !important;
  }
</style>


<div class="row" style="margin-top: 9rem;">
        <div class="col-0 col-sm-3"></div>
        <div class="col-12 col-sm-6">
            <div id="lessons">
                <div class="text-center mb-4">
                    <a href="/"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/logo.svg" style="height: 7rem; width: 7rem;" alt=""></a>	
                </div>  
                <ul class="list-group">
                <h5 id="paymentInformationTitle">Please Sign In</h5>
                <div class="wrapper">
                <div id="formContent">
                <h2 id="selectLogin" class="active">Sign In</h2>
                    <h2 id="selectSignUp" class="underlineHover">Sign Up</h2>

                    <form id="LoginFields" method="POST" action="handler/register.php">
                    <input type="hidden" name="registrationType" value="login">
                    <input type="email" id="login" class="second" name="Email" placeholder="Email Address" maxlength="50" required>
                    <input type="password" id="password" class="third" name="password" placeholder="Password" maxlength="20" required>
                    <input type="submit" class="fourth" value="Log In">
                    </form>
                    <form id="SignupFields" class="d-none" method="POST"  action="handler/register.php">
                    <input type="hidden" name="registrationType" value="signUp">
                    <span id='message'></span>
                    <input type="email" id="login" class="second" name="Email" placeholder="Email Address" maxlength="50" required>
                    <input type="password" id="signUpPassword1" class="third" name="Password" placeholder="Enter Password" maxlength="20" required>
                    <input type="password" id="signUpPassword2" class="third" name="ConfirmPassword" placeholder="Confirm Password" maxlength="20" required>
                    <input type="button" class="fourth" value="Sign Up"  onclick="submitSignUp();">
                    </form>
                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                    <a class="underlineHover" href="forgotPassword.php">Forgot Password?</a>
                    </div>

                </div>
                </div>                    

                </ul>
            </div>
        </div>
        <div class="col-0 col-sm-3"></div>
    </div>
</div>

<script src="/script/lesson.js"></script>
