<link href="/style/lesson.css" rel="stylesheet">

<?php
 include('navbar.php');
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
                <div class="wrapper">
                <div id="formContent">
                    <h5 id="paymentInformationTitle" class="mt-5">Recover Password</h5>
                    <form id="LoginFields" method="POST" action="handler/forgotPasswordHandler.php">
                    <input type="hidden" name="registrationType" value="login">
                    <input type="email" id="login" class="second" name="text" placeholder="Email Address (Required)" maxlength="50" required>
                    <input type="submit" class="fourth" value="Send">
                    </form>
                </div>
                </div>                    

                </ul>
            </div>
        </div>
        <div class="col-0 col-sm-3"></div>
    </div>
</div>

<script src="/script/lesson.js"></script>
