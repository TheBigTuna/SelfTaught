<?php
 include('../navbar.php');
?>
<link href="/style/profile.css" rel="stylesheet">

<div id="profileContainer">
    <div class="row">
        <div class="col-0 col-lg-1"></div>
        <div class="col-12 col-lg-7">
            <div id="userInfoBG">
                <div id="displayUser">




                  <h1>User Information</h1>
                
                  <form action="index.html" method="post">
                  <fieldset>
                    <label for="name">First Name</label>
                    <input type="text" id="firstName" name="firstName" maxlength="50" autocomplete="off">

                    <label for="name">Last Name</label>
                    <input type="text" id="lastName" name="lastName" maxlength="50" autocomplete="off">
                    
                    <label for="mail">Email</label>
                    <input type="email" id="email" name="email" maxlength="100" autocomplete="off">

                    <label for="mail">Location</label>
                    <input type="text" id="location" name="location" maxlength="100" autocomplete="off">
                    
                    <!-- <label for="password">Password:</label>
                    <input type="password" id="password" name="password"> -->
                    
                    <!-- <label>Age:</label>
                    <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>
                    <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label> -->
                    <label for="about">About Me</label>
                    <textarea id="about" name="about"></textarea>
                  </fieldset>
                  </fieldset>
                  
                  <fieldset>
                    <!-- <legend><span class="number">2</span>Your profile</legend>
                    <label for="bio">Biography:</label>
                    <textarea id="bio" name="user_bio"></textarea>
                  </fieldset>
                  <fieldset>
                  <label for="job">Job Role:</label>
                  <select id="job" name="user_job">
                    <optgroup label="Web">
                      <option value="frontend_developer">Front-End Developer</option>
                      <option value="php_developor">PHP Developer</option>
                      <option value="python_developer">Python Developer</option>
                      <option value="rails_developer"> Rails Developer</option>
                      <option value="web_designer">Web Designer</option>
                      <option value="WordPress_developer">WordPress Developer</option>
                    </optgroup>
                    <optgroup label="Mobile">
                      <option value="Android_developer">Androild Developer</option>
                      <option value="iOS_developer">iOS Developer</option>
                      <option value="mobile_designer">Mobile Designer</option>
                    </optgroup>
                    <optgroup label="Business">
                      <option value="business_owner">Business Owner</option>
                      <option value="freelancer">Freelancer</option>
                    </optgroup>
                    <optgroup label="Other">
                      <option value="secretary">Secretary</option>
                      <option value="maintenance">Maintenance</option>
                    </optgroup>
                  </select>
                  
                    <label>Interests:</label>
                    <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Development</label><br>
                      <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Design</label><br>
                    <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Business</label>
                  
                  </fieldset> -->
                  <button type="submit">Edit Account</button>
                </form>







                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div id="profileSidebar">
                <ul class="list-group list-unstyled">
                    <li><a class="list-group-item" href="profile.php">Account</a>
                    <li><a class="list-group-item" href="#">User Info</a>
                    <li><a class="list-group-item" href="#">Email Notifications</a>
                    <li><a class="list-group-item" href="#">Privacy Settings</a>
                    <li><a class="list-group-item" href="#">Subscription</a>
                    <li><a class="list-group-item" href="#">Purchase History</a>
                </ul>
            </div>
        </div>
        <div class="col-0 col-lg-1"></div>
    </div>
</div>
