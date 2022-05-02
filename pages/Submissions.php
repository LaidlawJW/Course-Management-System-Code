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
<?php include_once('navigation.php'); ?>

    <div class="col-2">
        <header>
            <h2>Current Date: <span id='date'></span></h2>
            <h2>Dashboard</h2>
            <h2>Hello <span id='user'>userABC123</span>!</h2>
        </header>
        <main class="cards">
            <div class="card">
                <div class="course-name-social">
                    <h5>Course</h5>
                    <a href="StudentclassPage.php">
                        <h4>Ethical Reasoning</h4>
                    </a>
                </div>

                <div class="course-info">
                    <h5>Due Date: 2022/2/22 : LATE</h5>
                    <h6></h6>
                    <a href="assiPage-rev.php">
                        <h4>Assignment 02</h4>
                    </a>
                </div>
                <div class="points">
                    <div class="frame">
                        <h3>PTS: <span id="PTS">NG/100</span></h3>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="course-name-science">
                    <h5>Course</h5>
                    <a href="StudentclassPage.php">
                        <h4>Plants and Society</h4>
                    </a>
                </div>
                <div class="course-info">
                    <h5>Due Date : 2022/3/14 : ON TIME</h5>
                    <a href="assiPage-rev.php">
                        <h4>Chapter 3 Quiz</h4>
                    </a>
                </div>
                <div class="points">
                    <div class="frame">
                        <h3>PTS: <span id="PTS">22/25</span></h3>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="course-name-eng">
                    <h5>Course</h5>
                    <a href="StudentclassPage.php">
                        <h4>Animation Programming</h4>
                    </a>
                </div>
                <div class="course-info">
                    <h5>Due Date: 2022/1/2 : ON TIME</h5>
                    <a href="assiPage-rev.php">
                        <h4>Class Survey</h4>
                    </a>
                </div>
                <div class="points">
                    <div class="frame">
                        <h3>PTS: <span id="PTS-G">5/5</span></h3>

                    </div>
                </div>
            </div>
        </main>
        <footer>Footer</footer>
    </div>
    <aside>Aside</aside>
</body>

<script>
    var dt = new Date();
    var NoTimeDate = dt.getFullYear() + '/' + (dt.getMonth() + 1) + '/' + dt.getDate();
    document.getElementById('date').innerHTML = NoTimeDate;
</script>



</html>