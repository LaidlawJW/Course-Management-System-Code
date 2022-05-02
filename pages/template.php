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


<body class="preload">
<?php include_once('navigation.php'); ?>

    <main class="cards">
        <div class="card">
            <input type="checkbox" id="done_box" class="collapsible">
            <h2 class="card_title">Class Name</h2>
            <p class="card_info">This is the text for the homework</p>
        </div>
        <div class="card">class</div>
        <div class="card">class</div>
        <div class="card">class</div>
    </main>
    <div class="right_bar">

    </div>
</body>

<script>
    window.addEventListener("load", () => {
        document.body.classList.remove("preload");
    });

    document.addEventListener("DOMContentLoaded", () => {
        const nav = document.querySelector(".nav");

        document.querySelector("#btnNav").addEventListener("click", () => {
            nav.classList.add("nav--open");
        });

        document.querySelector(".nav_overlay").addEventListener("click", () => {
            nav.classList.remove("nav--open");
        });
    });
</script>



</html>