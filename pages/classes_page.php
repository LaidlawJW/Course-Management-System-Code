<!DOCTYPE html>
<?php
require_once("../includes/databaseCalls.php");
$dbCalls = new DatabaseCalls;
$classes = $dbCalls->getClassesByUserID($_SESSION['UserID']);
?>

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
            <h2>Classes</h2>
            <h2>Hello <span id='user'>
            <?php echo $_SESSION["uname"];?></span>!</h2>

        </header>
        <main class="cards">

<?php
        foreach($classes as $class) {
        ?>
            <div class="card">
                <div class="course-name-science">
                    <h3>Class</h3>
                </div>
                <div class="course-info">
                    <a href="StudentclassPage.php">
                        <h4><?php echo $class['ClassName'];?></h4>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>


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