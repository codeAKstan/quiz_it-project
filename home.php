<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['points']) && isset($_SESSION['redeemed_points']))  {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/c1fbfe0463.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/styles/main.css">
	<link rel="shortcut icon" href="assets/images/inspiration.png" type="image/x-icon">

	<title>Home Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
        <i class='bx bxs-bulb' style="visibility:hidden;"></i>
             <img src="assets/images/inspiration.png" alt="quiz it logo">

			<span class="text"><i class='bx bxs-bulb' style="visibility:hidden;"></i>
            QuizIt</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="home.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="quiz/quizzes.php">
					<i class='bx bx-pencil' ></i>
					<span class="text">Quizzes</span>
				</a>
			</li>
			<li>
				<a href="">
					<i class='bx bx-award' ></i>
					<span class="text">Leaderboard <small>[coming soon]</small></span>
				</a>
			</li>
			<li>
				<a href="dash/me.php">
					<i class='bx bxs-user' ></i>
					<span class="text">My Profile</span>
				</a>
			</li>
			<li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="dash/tips.php">
					<i class='bx bxs-info-circle' ></i>
					<span class="text">Tips</span>
				</a>
			</li>
			<li>
				<a href="faq.html">
					<i class='bx bxs-help-circle' ></i>
					<span class="text">Faqs</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
				
			</li>
		</ul>
	</section>
	<!-- SIDEBAR  ends-->


	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form action="#" hidden>
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
			
		</nav>
		<!-- NAVBAR ends -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="home.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="home.php">Home</a>
						</li>
					</ul>
					<h3 style="color:#3C91E6">Hello, <?=$_SESSION['fname']?></h3>
				</div>
				
			</div>

			<ul class="box-info">
				
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3><?=$_SESSION['points']?> Qp</h3>
						<p>Earnings</p>
					</span>
				</li>
				<li>
				<i class=" fa fa-exchange" style="background-color:#EF3B3A;padding:25px;border-radius:3px;color:white;"></i>
					<span class="text">
						<h3><?=$_SESSION['redeemed_points']?> Qp</h3>
						<p>Redeemed Earnings</p>
					</span>
				</li>
				
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Activities</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
				</div>
			</div>
				
		</main>
		
	</section>
	
	

	<script src="assets\scripts\try.js"></script>
</body>
</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>
