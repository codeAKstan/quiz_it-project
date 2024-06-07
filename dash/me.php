<?php 
include "user-points.php";

if (isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['last_login']) 
&& isset($_SESSION['withdraw']) && isset($_SESSION['email'])){
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
	<link rel="shortcut icon" href="../assets/images/inspiration.png" type="image/x-icon">
</head>
<style>
    body {
    background-color: #f1fef4;
    color: #000;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    position: relative;
    width: 300px;
    text-align: center;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: none;
    border: none;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
}

.avatar img {
    border-radius: 50%;
    width: 60px;
    height: 60px;
}

.username-section {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

.username {
    background-color: #3bb75e;
    padding: 2px 8px;
    border-radius: 4px;
    margin-right: 5px;
}

.verified {
    color: #00ff00;
    display: flex;
    align-items: center;
}

.verified::before {
    content: '✔';
    margin-right: 5px;
}

.email {
    margin: 10px 0;
    font-size: 14px;
}

.change-username, .faq, .about-grass, .logout {
    background-color: #000;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    margin: 5px 0;
    cursor: pointer;
}

.change-username:hover, .faq:hover, .about-grass:hover, .logout:hover {
    background-color: #555;
}

.info-buttons {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
}

.info-buttons button {
    flex: 1;
    margin: 0 5px;
}

.support {
    margin-top: 10px;
    font-size: 12px;
}

.support a {
    color: #00bfff;
    text-decoration: none;
}

.support span {
    color: #00bfff;
}
a{
    text-decoration: none;
    color:white;
}

</style>
<body>
    <div class="container">
        <div class="profile">
            <button class="close-btn">✕</button>
            <div class="avatar">
                <img src="../assets/images/programmer.png" alt="Avatar">
            </div>
            <div class="username-section">
                <span class="username"><?=$_SESSION['fname']?></span>
            </div>
            <div class="email"><?=$_SESSION['email']?></div>
            <div class="info-buttons">
                <button class="faq"> Withdraw Method</button>
                <button class="about-grass">Redeem Points</button>
            </div>
            <div class="support">
                For any  complain please reach us on <a href="x.com">twitter</a> 
            </div>
            <button class="logout"><a href="../logout.php">Logout</a></button>
        </div>
    </div>
</body>
</html>
<?php }else {
	header("Location: ../login.php");
	exit;
} ?>