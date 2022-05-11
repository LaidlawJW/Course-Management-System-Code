<!DOCTYPE html>
<?php
require_once("../includes/databaseCalls.php");
$dbCalls = new DatabaseCalls;

$classes = $dbCalls->getAssignmentsByUserID($_SESSION['UserID']);
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
            <h2>Profile</h2>
            <h2>Hello <span id='user'>
            <?php
            echo $_SESSION["uname"];
            ?></span>!</h2>
        </header>
        <main class='main-prof'>
            <div class="container">
                <br>
                <a href="edit-prof.php" class="btn-edit">Edit Your Profile</a>
                <br>
                <br>
                <div class="row">
                    <div class="profile">
                        <figure>
                            <img src="<?php echo $_SESSION['pfp'];?>" />
                        </figure>
                        <h1><?php
            echo $_SESSION["uname"];
            ?></h1>
                        <table>
                            <dl>
                                <dt>Full name</dt>
                                <dd><?php echo $_SESSION["uname"];?></dd>
                                <!-- <dt>Degree</dt>
                                <dd><?php echo $_SESSION["major"];?></dd> -->
                                <dt>Email</dt>
                                <dd><?php echo $_SESSION["email"];?></dd>
                            </dl>
                        </table>
                    </div>
                </div>
                <div class="prof-classes">
                    <table>


            <tr>
                <th>Current Classes</th>
                <th>Role</th>
            </tr>
            <?php
            foreach($classes as $class) {
            ?>
                <tr>
                    <td><a href="StudentclassPage.php"><?php echo $class['ClassName'];?></a></td>
                    <td>Student</td>
                </tr>

                        
                     </h4>
                 </a>
              </div>
            </div> 
            <?php
            }
         ?> 
                        <!-- <tr>
                            <th>Current Classes</th>
                            <th>Role</th>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.php">Ethical Reasoning</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.php">Biology</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.php">Programming languages</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.php">Calc 2</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.php">Art History</a></td>
                            <td>Student</td>
                        </tr> -->
                    </table>
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