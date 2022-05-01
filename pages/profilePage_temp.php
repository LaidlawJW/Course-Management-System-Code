<!DOCTYPE html>

<?php
session_start();

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
                <a href="profilePage_temp.html">
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
                <a href="#">
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
            <h2>Profile</h2>
            <h2>Hello <span id='user'>
            <?php
            echo $_SESSION["uname"];

        
            ?></span>!</h2>
        </header>
        <main class='main-prof'>
            <div class="container">
                <br>
                <a href="edit-prof.html" class="btn-edit">Edit Your Profile</a>
                <br>
                <br>
                <div class="row">
                    <div class="profile">
                        <figure>
                            <img src="../img/photo-man.jpg" />
                        </figure>
                        <h1>userABC123!</h1>
                        <table>
                            <dl>
                                <dt>Full name</dt>
                                <dd>userABC123!</dd>
                                <dt>Date of birth</dt>
                                <dd>March 27, 2001</dd>
                                <dt>Degree</dt>
                                <dd>Computer Science</dd>
                                <dt>Email</dt>
                                <dd>userABC123@gmail.com</dd>
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
                        <tr>
                            <td><a href="StudentclassPage.html">Ethics</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.html">Biology</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.html">Programming languages</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.html">Calc 2</a></td>
                            <td>Student</td>
                        </tr>
                        <tr>
                            <td><a href="StudentclassPage.html">Art History</a></td>
                            <td>Student</td>
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