<?php
 include('navbar.php');
?>
<link href="/style/lesson.css" rel="stylesheet">
<link href="/style/stripe.css" rel="stylesheet">
<script src="https://js.stripe.com/v3/"></script>

<div id="lessonContainer">
  <div class="row">
    <div class="col-12 col-sm-6">
      <div id="lessonPreview">
        <div class="container">
          <div id="lessonPreviewBG">
            <div id="lessonPreviewHeader">
              <h1 id="lessonPreviewHeaderTitle"><?= $_GET['Type']; ?></h1>
            </div>
            <div id="lessonPreviewVideoBG">
              <video controls class="wrapper__video">
                <source src="video/headerVideo.mp4">
              </video>
            </div>
            <div id="lessonCourseOverviewBG">
              <h3 style="font-weight: 700; text-align: center;">Course Overview</h3>
              <div id="lessonCourseOverview">
                <ul class="list-group">
                      <li class="list-group-item listHeader">Introduction <a href="Courses/<?= $_GET['Type']; ?>/introduction.php"><button class="btn startCourseButton">Start</button></a></li>
                  <?php
                      $CourseType = mysqli_real_escape_string($conn, $_GET['Type']);

                      $FetchTasks = "
                      SELECT 
                      DISTINCT 
                      A.ID, A.CourseName, B.OrderNumber, B.TaskName
                      FROM omoore94_growthbook.courselist AS A 
                      INNER JOIN omoore94_growthbook.tasklist AS B 
                      ON B.CourseID = A.ID
                      WHERE CourseName = '$CourseType'
                      ";        
                      $FetchTasksResult = mysqli_query($conn, $FetchTasks);
                      while($row = mysqli_fetch_assoc($FetchTasksResult)){
                  ?>
                      <li class="list-group-item listContent"><?= $row['TaskName']; ?><a href="Courses/<?= $row['CourseName']; ?>/<?= $row['TaskName']; ?>"><button class="btn startCourseButton">Start</button></a></li>
                  <?php
                      }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6">
      <div class="container">
        <div id="UserInformationBG">
          <div id="AccountInformationBG">

          <?php
            if(!isset($_SESSION['User'])){
          ?>
            <h2 id="paymentInformationTitle">Account Information</h2>
            <div class="wrapper">
              <div id="formContent">
               <h2 id="selectLogin" class="active">Sign In</h2>
                <h2 id="selectSignUp" class="underlineHover">Sign Up</h2>

                <form id="LoginFields" method="POST" action="handler/register.php">
                  <input type="hidden" name="registrationType" value="login" autocomplete="off">
                  <input type="email" id="login" class="second" name="Email" placeholder="Email Address" maxlength="50" autocomplete="off" required>
                  <input type="password" id="password" class="third" name="password" placeholder="Password" maxlength="20" autocomplete="off" required>
                  <input type="submit" class="fourth" value="Log In">
                </form>
                <form id="SignupFields" class="d-none" method="POST"  action="handler/register.php">
                  <input type="hidden" name="registrationType" value="signUp">
                  <span id='message'></span>
                  <input type="email" id="login" class="second" name="Email" placeholder="Email Address" maxlength="50" autocomplete="off" required>
                  <input type="password" id="signUpPassword1" class="third" name="Password" placeholder="Enter Password" maxlength="20" autocomplete="off" required>
                  <input type="password" id="signUpPassword2" class="third" name="ConfirmPassword" placeholder="Confirm Password" maxlength="20" autocomplete="off" required>
                  <input type="button" class="fourth" value="Sign Up"  onclick="submitSignUp();">
                </form>
                <!-- Remind Passowrd -->
                <div id="formFooter">
                  <a class="underlineHover" href="forgotPassword.php">Forgot Password?</a>
                </div>

              </div>
            </div>
          <?php
            }
          ?>

          </div>


          <?php 
            if(isset($_SESSION['UserCourses'])){
            if(in_array($_GET['Type'], $_SESSION['UserCourses']) === false){
          ?>

          <div id="PaymentInformationBG">
            <h2 id="paymentInformationTitle">Payment Information</h2>
            
            <!-- <form action="//httpbin.org/post" id="paymentForm" method="POST"> -->
            <!-- <form action="handler/charge.php" id="paymentForm" method="POST">
              <input type="hidden" name="token" />
              <div class="group">
                <label>
                  <span>Card</span>
                  <div id="card-element" class="field"></div>
                </label>
              </div>
              <div class="group">
                <label>
                  <span>First name</span>
                  <input id="first-name" name="first-name" class="field" placeholder="" />
                </label>
                <label>
                  <span>Last name</span>
                  <input id="last-name" name="last-name" class="field" placeholder="" />
                </label>
              </div>
              <div class="group">
                <label>
                  <span>Address</span>
                  <input id="address-line1" name="address_line1" class="field" placeholder="" />
                </label>
                <label>
                  <span>Address (cont.)</span>
                  <input id="address-line2" name="address_line2" class="field" placeholder="" />
                </label>
                <label>
                  <span>City</span>
                  <input id="address-city" name="address_city" class="field" placeholder="" />
                </label>
                <label>
                  <span>State</span>
                  <input id="address-state" name="address_state" class="field" placeholder="" />
                </label>
                <label>
                  <span>ZIP</span>
                  <input id="address-zip" name="address_zip" class="field" placeholder="" />
                </label>
                <label>
                  <span>Country</span>
                  <select name="address_country" id="address-country" class="field">
                    <option value="IN">India</option>
                    <option value="SG" selected>Singapore</option>
                  </select>
                </label>
              </div>
              <button type="submit">Pay $25</button>
              <div class="outcome">
                <div class="error"></div>
                <div class="success">
                  Success! Your Stripe token is <span class="token"></span>
                </div>
              </div>
          </form> -->
          <form action="handler/charge.php" method="POST">
          <div class="group">
          <input type="hidden" name="courseName" value="<?= $_GET['Type']; ?>">
                <label>
                  <span>First name</span>
                  <input id="first-name" name="first-name" class="field" placeholder="" autocomplete="off" />
                </label>
                <label>
                  <span>Last name</span>
                  <input id="last-name" name="last-name" class="field" placeholder="" autocomplete="off" />
                </label>
              </div>
              <div class="group">
                <label>
                  <span>Address</span>
                  <input id="address-line1" name="address_line1" class="field" placeholder="" autocomplete="off" />
                </label>
                <!-- <label>
                  <span>Address (cont.)</span>
                  <input id="address-line2" name="address_line2" class="field" placeholder="" autocomplete="off" />
                </label> -->
                <label>
                  <span>City</span> 
                  <input id="address-city" name="address_city" class="field" placeholder="" autocomplete="off" />
                </label>
                <label>
                  <span>State</span>
                  <input id="address-state" name="address_state" class="field" placeholder="" autocomplete="off" />
                </label>
                <label>
                  <span>ZIP</span>
                  <input id="address-zip" name="address_zip" class="field" placeholder="" autocomplete="off" />
                </label>
                <!-- <label>
                  <span>Country</span>
                  <select name="address_country" id="address-country" class="field">
                    <option value="IN">India</option>
                    <option value="SG" selected>Singapore</option>
                  </select>
                </label> -->
              </div>
              <!-- Old school Checkout -->
            <!-- <script
              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="pk_test_3hQM1mhjnqxX0QnMXwyKckiI00BQPBad03"
              data-amount="2000"
              data-name="<?= $_GET['Type']; ?>"
              data-description="Purchase Course"
              data-image="https://s3.amazonaws.com/stripe-uploads/acct_19EnQrGHC6pu6Qvdmerchant-icon-1485553962843-logo_stripe.png"
              data-locale="auto">
            </script> -->
          <!-- </form> -->
          <!-- New school checkout button -->

          <!-- <a href="../handler/charge.php"> -->
          <button
            style="
            background-color: #56baed;
            border: none;
            color: white;
            text-transform: uppercase;
            font-size: 15px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 0 auto;
            width: 80%;
            "
            id="checkout-button-plan_H4MYkHgZIaB2qi"
            role="link"
          >
            Checkout
          </button>
          <!-- </a> -->
          <div id="error-message"></div>
          </form>

          </div>
        </div>
      </div>
          <?php } 
          else{

          }
        }
          ?>
    </div>
  </div>
</div>

<script src="/script/lesson.js"></script>
<script src="/script/stripe.js"></script>
