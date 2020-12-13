<?php
 include('navbar.php');
?>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link href="/style/courses.css" rel="stylesheet">




<?php 
    if(isset($_SESSION['UserCourses'])){
     if(count($_SESSION['UserCourses']) > 0){
?>
        <div class="row" style="margin-top: 6rem;">
                <div class="col-0 col-sm-1"></div>
                <div class="col-12 col-sm-10">
                    <div id="courses">
                        <h2 id="courseText">Your Courses</h2>
                        <?php
                            $FetchCourses = "SELECT DISTINCT * FROM omoore94_growthbook.courselist";        
                            $FetchCoursesResult = mysqli_query($conn, $FetchCourses);
                            for($i=0; $i < count($_SESSION['UserCourses']); $i++){
                                if($_SESSION['UserCourses'][$i] == "HTML5"){
                                    $Icon = "<i class='devicon-html5-plain-wordmark colored'></i>";    
                                }
                                elseif($_SESSION['UserCourses'][$i] == "CSS3"){
                                    $Icon = "<i class='devicon-css3-plain-wordmark colored'></i>";
                                }
                        ?>
                        <a href="lessons.php?Type=<?= $_SESSION['UserCourses'][$i]; ?>">
                            <div class="card">
                                <div class="row">
                                    <div class="col-4">
                                        <?= $Icon; ?> 
                                    </div>
                                    <div class="col-8">
                                        <h4><?= $_SESSION['UserCourses'][$i]; ?></h4>
                                    </div>
                                </div>
                                <div class="answer"></div>
                            </div>
                        </a>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-0 col-sm-1"></div>
            </div>
        </div>
<?php
        }
    }
?>




<div class="row" style="margin-top: 6rem;">
        <div class="col-0 col-sm-1"></div>
        <div class="col-12 col-sm-10">
            <div id="courses">
                <h2 id="courseText">Available Courses</h2>
                <h2 id="courseSubText">Browse courses by whatever peaks your interest</h2>

                <?php
                    $FetchCourses = "SELECT DISTINCT * FROM omoore94_growthbook.courselist";        
                    $FetchCoursesResult = mysqli_query($conn, $FetchCourses);
                    while($row = mysqli_fetch_assoc($FetchCoursesResult)){
                        if($row['CourseName'] == "HTML5"){
                            $Icon = "<i class='devicon-html5-plain-wordmark colored'></i>";    
                        }
                        elseif($row['CourseName'] == "CSS3"){
                            $Icon = "<i class='devicon-css3-plain-wordmark colored'></i>";
                        }
                ?>
                <a href="lessons.php?Type=<?= $row['CourseName']; ?>">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <?= $Icon; ?> 
                            </div>
                            <div class="col-8">
                                <h4><?= $row['CourseName']; ?></h4>
                            </div>
                        </div>
                        <div class="answer"></div>
                    </div>
                </a>
            <?php
                }
            ?>
        </div>
        <div class="col-0 col-sm-1"></div>
    </div>
</div>