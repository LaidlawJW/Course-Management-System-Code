<?php
session_start();
?>

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
                <a href="Submissions.php">
                    <i class="fa-solid fa-clipboard-check"></i>
                    <span class="n-text">
                        Completed Work
                    </span>
                </a>

            </li>
            <li class="nav_items">
                <a href="edit-prof.php">
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