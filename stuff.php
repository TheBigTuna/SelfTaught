<?php
 include('navbar.php');
?>
<link href="/style/stuff.css" rel="stylesheet">
<link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />


<div id="teachContainer">
    <div class="row">
        <div class="col-12 col-xl-2" id="sidePanel">

            <!-- <h3 class="mt-5 mb-4" style="font-weight: 700; text-align: center;"><?= $Course ?></h3> -->
            <div id="lessonCourseOverview">
                <ul class="list-group">
                <!-- <a href="/Courses/<?= $Course?>/introduction.php"><li class="list-group-item listHeader">Introduction<i class="fa fa-check-circle completedMark"></i></li></a>
                    <?php
                        $CourseType = mysqli_real_escape_string($conn, $Course);

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
                        <a href="/Courses/<?= $row['CourseName']; ?>/<?= $row['TaskName']; ?>.php"><li class="list-group-item listContent">
                            <?= $row['TaskName']; ?><i class="fa fa-exclamation-circle attentionMark"></i>
                        </li></a>
                    <?php
                        }
                    ?> -->
                        <a href=""><li class="list-group-item listContent">Test</li></a>
                </ul>
            </div>

        </div>
        <div class="col-12 col-xl-10">
            <h2 class="mt-5 mb-4" style="font-weight: 700; text-align: center;">Test Video</h2>
            <div id="lessonPreviewVideoBG">
                <video controls class="wrapper__video">
                    <source src="/video/<?= $Video; ?>.mp4">
                </video>
            </div>
        </div>
    </div>
</div>