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
            <h2>Ethics Grade</h2>
            <h2>Hello <span id='user'>userABC123</span>!</h2>
        </header>
        <main class='main-prof'>
            <div class="container">
                <h1 class="class-head">Ethics | Grade : B</h2>
                    <div class="prof-classes">
                        <table>
                            <tr>
                                <th>Assigments</th>
                                <th>Points</th>
                            </tr>
                            <tr>
                                <td><a href="assiPage-rev.php">Homework03</a></td>
                                <td>100/100</td>
                            </tr>
                            <tr>
                                <td><a href="assiPage-rev.php">Homework04</a></td>
                                <td>100/100</td>
                            </tr>
                            <tr>
                                <td><a href="assiPage-rev.php">Homework05</a></td>
                                <td>82/100</td>
                            </tr>
                            <tr>
                                <td><a href="assiPage-rev.php">Homework06</a></td>
                                <td>94/100</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="assiPage-rev.php">Homework07</a>
                                </td>
                                <td>34/100</td>
                            </tr>
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