registration.php
<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>

<head>

  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    section {
      margin-top: -20px;
    }

    /*------------------------------registration--------------------*/
    .reg_img {
      height: 630px;
      margin-top: 0px;
      background-image: url("how-to-deal-with-large-message.jpg");
    }

    .box2 {
      height: 570px;
      width: 450px;
      background-color: black;
      margin: 15px auto;
      opacity: .7;
      color: white;
      padding: 20px;
    }
  </style>
</head>

<body>

  <section>
    <div class="reg_img">

      <div class="box2">
        <h1 style="text-align: center; font-size: 22px;font-family: algerian;"> &nbsp &nbsp &nbsp Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">Admin Registration Form</h1>

        <form name="Registration" action="" method="post">

          <div class="login">
            <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
            <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
            <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
            <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
            <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

            <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px">
          </div>
        </form>

      </div>
    </div>
  </section>

  <?php

  if (isset($_POST['submit'])) {
    $count = 0;
    $sql = "SELECT username from `admin`";
    $res = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($res)) {
      if ($row['username'] == $_POST['username']) {
        $count = $count + 1;
      }
    }
    if ($count == 0) {
      mysqli_query($db, "INSERT INTO `admin` VALUES('', '$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]', 'p.jpg');");
  ?>
      <script type="text/javascript">
        alert("Registration successful");
      </script>
    <?php
    } else {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
  <?php

    }
  }

  ?>

</body>

</html>