<?php
 include('../navbar.php');
?>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link href="/style/profile.css" rel="stylesheet">

<div id="profileContainer">
    <div class="row">
        <div class="col-0 col-lg-1"></div>
        <div class="col-12 col-lg-7">
            <div id="userInfoBG">
                <div id="displayUser">
                    <div class="row">
                        <div class="col-12 col-lg-3"></div>
                        <div class="col-12 col-lg-9">
                            <div class="mt-5">
                                <h3 id="displayUserName" class="font-weight-bold">Octavius Moore</h3>
                                <a href="userinfo.php"><button class="btn btn-outline-secondary" style="width: 160px;">Edit Profile</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <?php
                    if(isset($_SESSION['UserCourses'])){
                        for($i = 0; $i < count($_SESSION['UserCourses']); $i++){
                            switch ($_SESSION['UserCourses'][$i]){
                                case "HTML5":
                                    $Icon = "<i class='devicon-html5-plain-wordmark colored'></i>";    
                                break;
                                case "CSS3":
                                    $Icon = "<i class='devicon-css3-plain-wordmark colored'></i>";
                                break;
                            }
                    ?>
                    <a href="/lessons.php?Type=<?= $_SESSION['UserCourses'][$i]; ?>">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <?= $Icon; ?> 
                                    
                                </div>
                            </div>
                            <div class="answer"></div>
                        </div>
                    </a>
                    <?php
                        }
                    }
                    ?>
                </div>


            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div id="profileSidebar">
                <ul class="list-group list-unstyled">
                    <li><a class="list-group-item" href="profile.php">Account</a>
                    <li><a class="list-group-item" href="userInfo.php">User Info</a>
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
<div class="row">
    <div class="col-0 col-lg-1"></div>
    <div class="col-0 col-lg-10">

    
    </div>
    <div class="col-0 col-lg-1">
</div>

