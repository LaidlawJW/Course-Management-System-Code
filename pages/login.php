<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password],
        input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for the two green action buttons on this page */
        button {
            background-color: mediumseagreen;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            position: relative;
        }

        /* change opacity of buttons when hovering over it */
        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the first login button specifically */
        .firstLogin {
            left: 44%;
        }

        /* Extra styles for the cancel button specifically */
        .cancelBtn {
            margin-left: 16px;
            background-color: red;
            text-align: center;
        }

        /* Center the close (X) button */
        .xBtn {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        .loginBox {
            padding: 16px;
            background: white;
        }

        /* The infoBox (background) */
        .infoBox {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: black;
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* infoBox Content/Box */
        .infoBox-content {
            background-color: white;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid;
            border-color: darkgray;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: black;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Change styles for login and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<!-- End of CSS -->

<body>

    <h1>Welcome to the Course Managment System</h1>

    <!--    login button trigger-->
    <button onclick="document.getElementById('loginMenu').style.display='block'" style="text-align: center;" class="firstLogin">Login</button>

    <!--    sign up button trigger-->
    <button onclick="document.getElementById('signUpMenu').style.display='block'" style="text-align: center;" class="firstLogin">Create Account</button>

    <!--login menu-->
    <div id="loginMenu" class="infoBox">
        <div class="xBtn">
            <span onclick="document.getElementById('loginMenu').style.display='none'" class="close" title="Close infoBox">&times;</span>
        </div>

        <div class="loginBox">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
        </div>

        <div class="container" style="background-color: whitesmoke">
            <button type="button" onclick="document.getElementById('loginMenu').style.display='none'" class="cancelBtn">Cancel</button>
        </div>
    </div>

    <!--sign up menu-->
    <div id="signUpMenu" class="infoBox">
        

        <div class="xBtn">
            <span onclick="document.getElementById('signUpMenu').style.display='none'" class="close" title="Close infoBox">&times;</span>
        </div>

        <form action ="../includes/signup.inc.php" method = "POST">
        <div class="loginBox">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="repeatPsw"><b>Re-type Password</b></label>
            <input type="password" placeholder="Enter Password" name="repeatPsw" required>

            <label for="type"><b>User Type:</b></label><br>

            <label for="student">Student</label>
            <input type="radio" value="student" name="type" required> 

            <label for="student">Teacher</label>
            <input type="radio" value="teacher" name="type" required> 

            <label for="student">Admin</label>
            <input type="radio" value="admin" name="type" required> 

            <button type="submit">Sign up</button>
        </div>
        </form>

        <div class="container" style="background-color: whitesmoke">
            <button type="button" onclick="document.getElementById('signUpMenu').style.display='none'" class="cancelBtn">Cancel</button>
        </div>

    </div>
    
    <script>
        // Get the menus
        var loginBox = document.getElementById('loginMenu');
        var signUpBox = document.getElementById('signUpMenu');

        // When the user clicks anywhere outside of the login menu, close it
        window.onclick = function(event) {
            if (event.target == loginBox || event.target == signUpBox) {
                loginBox.style.display = "none";
                signUpBox.style.display = "none";
            }
        }
    </script>
    
</body></html>
