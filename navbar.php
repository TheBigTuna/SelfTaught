<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
          	  <?php include("resources/connection.php"); ?>
              <!-- <title><?= $_SESSION['CurrentPage']; ?></title> -->
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- <meta name='description' content="<?= $_SESSION['Description']; ?>">             -->
              <!-- <meta name="author" content="<?= $_SESSION['ArticleAuthor']; ?>"> -->
              <!-- <link rel="icon" href="/images/halfLogo.png"> -->
              <link href="/style/bootstrap.css" rel="stylesheet">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="/style/font-awesome.min.css" rel="stylesheet">
              <link href="/style/animate.css" rel="stylesheet">
              <link href="/style/main.css" rel="stylesheet">
              <link href="/style/pricing.css" rel="stylesheet">
              <link href="/style/gnome.css" rel="stylesheet">
              <link href="/style/sun.css" rel="stylesheet">
              <link href="/style/clouds.css" rel="stylesheet">
              <link href="/style/bear.css" rel="stylesheet">
              <link href="/style/stripe.css" rel="stylesheet">
              <script src="/script/jquery-3.4.1.js"></script>
              <script src="/script/bootstrap.js"></script>
        </head>


        
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
					
						<a class="navbar-brand" href="/"><img src="/logo.svg"></a>	
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
                                <!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/">Home</a>
								</li> -->
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/jobs.php">Jobs</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/courses.php">Learn</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/contact.php">Chat</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/courses.php">About</a>
								</li>
								<?php
									if(!isset($_SESSION['User'])){
								?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/login.php">Login</a>
								</li>
								<?php
									}
									else{
								?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['User']; ?></a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/account/profile.php">View Profile</a>
										<a class="dropdown-item" href="/handler/signout.php">Sign Out</a>
									</div>
								</li>
								<?php
									}
								?>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
