<?php
    include("../resources/connection.php"); 
    session_start();

    $CourseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    $FirstName = mysqli_real_escape_string($conn, $_POST['first-name']);
    $LastName = mysqli_real_escape_string($conn, $_POST['last-name']);
    $Address1 = mysqli_real_escape_string($conn, $_POST['address_line1']);
    $Address2 = mysqli_real_escape_string($conn, $_POST['address_line2']);
    $City = mysqli_real_escape_string($conn, $_POST['address_city']);
    $State = mysqli_real_escape_string($conn, $_POST['address_state']);
    if(isset($Country)){
        $Country = mysqli_real_escape_string($conn, $_POST['address_country']);
    }
    $Token = mysqli_real_escape_string($conn, $_POST['stripeToken']);
    $TokenType = mysqli_real_escape_string($conn, $_POST['stripeTokenType']);
    $stipeEmail = mysqli_real_escape_string($conn, $_POST['stripeEmail']);
    $Timestamp =  mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));

    // Checks for the largest ID available
    $FetchID = "SELECT max(ID) AS ID FROM omoore94_growthbook.orders";        
    $FetchIDResult = mysqli_query($conn, $FetchID);
    while($row = mysqli_fetch_assoc($FetchIDResult)){
        $ID = $row['ID'];
    }

    $ID ++;

    $InsertOrders = "INSERT INTO omoore94_growthbook.orders (ID, Email, CourseName, Token, TokenType, Timestamp) VALUES ('$ID', '$stipeEmail', '$CourseName', '$Token', '$TokenType', '$Timestamp');";  
    // $InsertOrdersResult = mysqli_query($conn, $InsertOrders);

    $InsertOrderDetails = "INSERT INTO omoore94_growthbook.orderdetails (ID, FirstName, LastName, Address1, Address2, City, State, Country) VALUES ('$ID', '$FirstName', '$LastName', '$Address1', '$Address2', '$City', '$State', 'N/A');";  
    // $InsertOrderDetailsResult = mysqli_query($conn, $InsertOrderDetails);

    $_SESSION['UserCourses'] = array();

    // Check's to see if the user has previously purchased any courses
    $FetchUserCourses = "SELECT * FROM omoore94_growthbook.orders where email = '$Email'";        
    $FetchUserCoursesResult = mysqli_query($conn, $FetchUserCourses);
    while($row = mysqli_fetch_assoc($FetchUserCoursesResult)){
        array_push($_SESSION['UserCourses'], $row['CourseName']);
    }

    print_r($_SESSION);

    // header('Location: ' . $_SERVER['HTTP_REFERER']);
?>