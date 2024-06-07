<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizit Registration</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/register.css">
    <link rel="shortcut icon" href="assets/images/inspiration.png" type="image/x-icon">
    <style>
        #message {
            display:none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }

        .password-container {
            position: relative;
            width: 100%;
        }

        .password-container input {
            font-family: "cursive";
            outline: 0;
            background: #fff;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            border: #000000 solid 0.2px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .password-container .toggle-password {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: blue;
        }

        .eye-click {
            color: blue;
            position: absolute;
            top: 285px;
            left: 280px;
        }
    </style>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form" action="php/signup.php" method="post">
                <h4>Join Quizit</h4>
                <p>Join the community of earners</p>
                <?php if(isset($_GET['error'])){ ?>
                <div style="color:red;background-color:#eba8aa;padding:10px;">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>

                <?php if(isset($_GET['success'])){ ?>
                <div style="color:green;background-color:#b9eba8;padding:10px;">
                    <?php echo $_GET['success']; ?>
                </div>
                <?php } ?><br>
				<div>
					<input type="text" 
					placeholder="Fullname"
						name="fname"
						value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
				</div>

                <div>
                    <input type="text" placeholder="Username" name="uname" value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
                </div>

                <div class="password-container">
                    <input type="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pass" id="psw">
                    <i class="toggle-password" id="toggle-password" onclick="togglePasswordVisibility()">👁️</i>
                </div>

                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>

                <div><br>
                    <input type="email" placeholder="Email" name="email">
                </div>
                
                <button type="submit">Sign Up</button>
                <p class="message">Already registered? <a href="login.php">Sign In</a></p>
            </form>
        </div>
    </div>

    <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }
            
            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(myInput.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }
            
            // Validate length
            if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

        function togglePasswordVisibility() {
            var passwordField = document.getElementById("psw");
            var toggleIcon = document.getElementById("toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.textContent = "🙈"; // change icon to indicate hiding
            } else {
                passwordField.type = "password";
                toggleIcon.textContent = "👁️"; // change icon to indicate viewing
            }
        }
    </script>
</body>
</html>
