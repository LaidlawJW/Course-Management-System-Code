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
            <h2>Hello <span id='user'><?php
            echo $_SESSION["uname"];

        
            ?></span>!</h2>
        </header>
        <main>
            <div class="form-temp">
                <form id="form-ass">
                    <div class="message-area">
                        <h4>Announcement Message</h4>
                        <label for="message"></label>
                        <textarea name="msg" id="" msg cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="upload-area">
                        <p>If you have a file to Upload </p>
                        <h6>Upload here...</h6>
                        <input type="file">
                    </div>
                    <div class="post-area">
                        <button type="button" id="post" class="btn">Post </button>
                    </div>
                </form>
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