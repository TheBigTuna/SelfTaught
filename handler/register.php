<?php
 include("../resources/connection.php"); 
 session_start();

$Registration = mysqli_real_escape_string($conn, $_POST['registrationType']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Timestamp =  mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));
$AlreadyExists = false;

if($Registration == "signUp"){
    $Password1 = $_POST['Password'];
    $Password2 = $_POST['ConfirmPassword'];
    if($Password1 == $Password2){
        $FetchAccount = "SELECT * FROM omoore94_growthbook.useraccounts";        
        $FetchAccountResult = mysqli_query($conn, $FetchAccount);
        while($row = mysqli_fetch_assoc($FetchAccountResult)){
            if($Email == $row['email']){
                $AlreadyExists = true;
            }
            if($AlreadyExists == true){
                echo "Return to previous page";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            else{
                $HashedPassword = password_hash($Password1, PASSWORD_DEFAULT);
                $InsertNewAccount = "INSERT INTO omoore94_growthbook.useraccounts (email, pword, timestamp) VALUES ('$Email', '$HashedPassword', '$Timestamp');";  
                $InsertNewAccountResult = mysqli_query($conn, $InsertNewAccount);
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
    }
}
else{
    $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $FetchAccount = "SELECT * FROM omoore94_growthbook.useraccounts where email = '$Email'";        
    $FetchAccountResult = mysqli_query($conn, $FetchAccount);
    while($row = mysqli_fetch_assoc($FetchAccountResult)){
        $HashedPassword = $row['pword'];
    }
    if(password_verify($_POST['password'], $HashedPassword)) {
        $_SESSION['User'] = $Email;
        $_SESSION['UserCourses'] = array();

        // Check's to see if the user has previously purchased any courses
        $FetchUserCourses = "SELECT * FROM omoore94_growthbook.orders where email = '$Email'";        
        $FetchUserCoursesResult = mysqli_query($conn, $FetchUserCourses);
        while($row = mysqli_fetch_assoc($FetchUserCoursesResult)){
            array_push($_SESSION['UserCourses'], $row['CourseName']);
        }
        print_r($_SESSION);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>
