<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Book Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        .srch {
            padding-left: 850px;

        }

        .form-control {
            width: 300px;
            height: 40px;
            background-color: black;
            color: white;
        }

        body {
            background-image: url("dark-blue-space-android-iphone-desktop-hd-backgrounds-wallpapers-1080p-4khd-wallpapers-desktop-background-android-iphone-1080p-4k-tmo9q-1080x608.jpg");
            background-repeat: no-repeat;
            background-size: 1300px 900px;
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            margin-top: 50px;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #222;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: white;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .img-circle {
            margin-left: 20px;
        }

        .h:hover {
            color: white;
            width: 300px;
            height: 50px;
            background-color: #00544c;
        }

        .container {
            /* height: 500px;
            background-color: black;*/
            opacity: .7;
            color: white;
        }
    </style>

</head>

<body>
    <!--_________________sidenav_______________-->

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div style="color: white; margin-left: 60px; font-size: 20px;">

            <?php
            if (isset($_SESSION['login_user'])) {
                echo "<img class='img-circle profile_img' height=120 width=120 src='images/" . $_SESSION['pic'] . "'>";
                echo "</br></br>";

                echo "Welcome " . $_SESSION['login_user'];
            }
            ?>
        </div><br><br>


        <div class="h"> <a href="books.php">Books</a></div>
        <div class="h"> <a href="request.php">Book Request</a></div>
        <div class="h"> <a href="issue_info.php">Issue Information</a></div>
        <div class="h"><a href="expired.php">Expired List</a></div>
    </div>

    <div id="main">

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "300px";
                document.getElementById("main").style.marginLeft = "300px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
                document.body.style.backgroundColor = "white";
            }
        </script>
        <br>

        <div class="container">
            <div class="srch">
                <br>
                <form method="post" action="" name="form1">
                    <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
                    <input type="text" name="bid" class="form-control" placeholder="BID" required=""><br>
                    <button class="btn btn-default" name="submit" type="submit">Submit</button><br>
                </form>
            </div>

            <h3 style="color: yellow;">Request of Book</h3>

            <?php

            if (isset($_SESSION['login_user'])) {
                $q = mysqli_query($db, "SELECT * from issue_book where username='$_SESSION[login_user]';");
                /* $sql = "SELECT student.username,roll,books.bid,name,authors,edition,status FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve =''";
                $res = mysqli_query($db, $sql);*/

                if (mysqli_num_rows($q) == 0) {
                    echo "<h2><b>";
                    echo "There's no pending request.";
                    echo "</h2></b>";
                } else {
                    echo "<table class='table table-bordered' >";
                    echo "<tr style='background-color: #FF1493;'>";
                    //Table header


                    echo "<th>";
                    echo "Book-ID";
                    echo "</th>";
                    echo "<th>";
                    echo "Approve Status";
                    echo "</th>";
                    echo "<th>";
                    echo "Issue Date";
                    echo "</th>";
                    echo "<th>";
                    echo "Return Date";
                    echo "</th>";

                    echo "</tr>";

                    while ($row = mysqli_fetch_assoc($q)) {
                        echo "<tr>";
                        echo "<td>";
                        echo $row['bid'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['approve'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['issue'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['return'];
                        echo "</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                }
            } else {
            ?>
                <br>
                <h4 style="text-align: center;color: #F67280;">
                    <font face="Perpetua">
                        <font size="6"><b>You need to login to see the request.</b></font>
                    </font>
                </h4>

            <?php
            }

            if (isset($_POST['submit'])) {
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['bid'] = $_POST['bid'];

            ?>
                <script type="text/javascript">
                    window.location = "approve.php"
                </script>
            <?php
            }

            ?>
        </div>
    </div>
</body>

</html>