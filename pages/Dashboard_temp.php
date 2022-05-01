<?php
session_start();

?>

<!DOCTYPE html>


<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/787fe15a79.js" crossorigin="anonymous"></script>
    <script src="../JS/main.js"></script>
    <link rel="stylesheet" href="../CSS/Main.css">
    <title>Document</title>
</head>

<body>
    <aside></aside>
    <nav class="nav">
        <ul class="out">
            <li class="nav_items">
                <a href="Dashboard_temp.php">
                    <i class="fa-solid fa-bars"></i>
                    <span class="n-text">
                        Dashboard
                    </span>
                </a>

            </li>

            <li class="nav_items">
                <a href="profilePage_temp.php">
                    <i class="fa-solid fa-book"></i>
                    <span class="n-text">
                        Classes
                    </span>
                </a>

            </li>

            <li class="nav_items">
                <a href="Submissions.html">
                    <i class="fa-solid fa-clipboard-check"></i>
                    <span class="n-text">
                        Completed Work
                    </span>
                </a>

            </li>
            <li class="nav_items">
                <a href="edit-prof.html">
                    <i class="fa-solid fa-user"></i>
                    <span class="n-text">
                        Profile
                    </span>
                </a>

            </li>
            <!--
            <li class="nav_items">
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="n-text">
                        Settings
                    </span>
                </a>

            </li>
            -->
        </ul>

        <ul class="logout">
            <li class="nav_items">
                <a href="../includes/signout.inc.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="n-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="col-2">
        <header>
            <h2>Current Date: <span id='date'></span></h2>
            <h2>Dashboard</h2>
            <h2>Hello <span id='user'>
                
            <?php
            echo $_SESSION["uname"];

        
            ?>
        </span>!</h2>
        </header>
        <main class="cards">
            <div class="card">
                <div class="course-name-social">
                    <h5>Course</h5>
                    <a href="StudentclassPage.html">
                        <h4>Ethical Reasoning</h4>
                    </a>
                </div>

                <div class="course-info">
                    <h5>Due Date </span>
                    </h5>
                    <a href="../pages/Do-ass.html">
                        <h4>Assignment 03</h4>
                    </a>
                </div>
                <div class="points">
                    <div class="frame">
                        <h3>PTS: <span id="PTS">100</span></h3>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="course-name-science">
                    <h5>Course</h5>
                    <a href="StudentclassPage.html">
                        <h4>Plants and Society</h4>
                    </a>
                </div>
                <div class="course-info">
                    <h5>Due Date</h5>
                    <a href="../pages/Do-ass.html">
                        <h4>Chapter 3 Quiz</h4>
                    </a>
                </div>
                <div class="points">
                    <div class="frame">
                        <h3>PTS: <span id="PTS">25</span></h3>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="course-name-eng">
                    <h5>Course</h5>
                    <a href="StudentclassPage.html">
                        <h4>Animation Programming</h4>
                    </a>
                </div>
                <div class="course-info">
                    <h5>Due Date</h5>
                    <a href="../pages/Do-ass.html">
                        <h4>Class Survey</h4>
                    </a>
                </div>
                <div class="points">
                    <div class="frame">
                        <h3>PTS: <span id="PTS">5</span></h3>

                    </div>
                </div>
            </div>

        </main>
        <footer></footer>
    </div>
    <aside></aside>
</body>

<script>
    var dt = new Date();
    var NoTimeDate = dt.getFullYear() + '/' + (dt.getMonth() + 1) + '/' + dt.getDate();
    document.getElementById('date').innerHTML = NoTimeDate;
</script>



</html>