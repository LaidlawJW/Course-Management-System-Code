<?php
session_start();
require_once('../includes/databaseCalls.php');
$dbCalls = new DatabaseCalls;
$assignments = $dbCalls->getAssignmentsByUserID($_SESSION['UserID']);
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
    <?php include_once('navigation.php'); ?>
    <div class="col-2">
        <header>
            <?php echo $assignments[0];?>
            <h2>Current Date: <span id='date'></span></h2>
            <h2>Dashboard</h2>
            <h2>Hello <span id='user'>
            <?php echo $_SESSION["uname"];?></span>!</h2>
        </header>
        <main class="cards">
            <?php foreach($assignments as $assignment) { ?>
            <div class="card">
                <div class="course-name-social">
                    <h5>Course</h5>
                    <a href="StudentclassPage.php?ClassID=<?php echo $assignment['ClassID']?>">
                        <h4><?php echo $assignment['ClassName'];?></h4>
                    </a>
                </div>

                <div class="course-info">
                    <h5>Due Date </span>
                    </h5>
                    <a href="../pages/Do-ass.php?AssignmentID=<?php echo $assignment['AssignmentID']?>">
                        <h4><?php echo $assignment['AssignmentName'];?></h4>
                    </a>
                </div>
                <div class="points">
                    <div class="frame">
                        <h3>PTS: <span id="PTS"><?php echo $assignment['Points'];?></span></h3>

                    </div>
                </div>
            </div>
            <?php } ?>
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