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
            <h2>View People</h2>
            <h2>Hello <span id='user'><?php
            echo $_SESSION["uname"];

        
            ?></span>!</h2>
        </header>
        <main class="cards">
            <div class="prof-card">
                <div class="prof-card-pic">
                    <img src="../IMG/photo-man.jpg" class="card-avatar-img" alt="avatar">
                </div>
                <div class="NameArea">
                    <a href="profilePage_temp.php">
                        <h3><?php
            echo $_SESSION["uname"];

        
            ?></h3>
                    </a>
                </div>
                <div class="prof-role">
                    <h3>Role: Student</h3>
                </div>

            </div>
            <div class="prof-card">
                <div class="prof-card-pic">
                    <img src="../IMG/photo-man.jpg" class="card-avatar-img" alt="avatar">
                </div>
                <div class="NameArea">
                    <a href="profilePage_temp.php">
                        <h3>user123</h3>
                    </a>
                </div>
                <div class="prof-role">
                    <h3>Role: Student</h3>
                </div>

            </div>
            <div class="prof-card">
                <div class="prof-card-pic">
                    <img src="../IMG/photo-man.jpg" class="card-avatar-img" alt="avatar">
                </div>
                <div class="NameArea">
                    <a href="profilePage_temp.php">
                        <h3>user1222</h3>
                    </a>
                </div>
                <div class="prof-role">
                    <h3>Role: Student</h3>
                </div>

            </div>
            <div class="prof-card">
                <div class="prof-card-pic">
                    <img src="../IMG/photo-man.jpg" class="card-avatar-img" alt="avatar">
                </div>
                <div class="NameArea">
                    <a href="profilePage_temp.php">
                        <h3>user34341</h3>
                    </a>
                </div>
                <div class="prof-role">
                    <h3>Role: Student</h3>
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