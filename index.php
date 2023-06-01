<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="alert alert-success my-5">
      Welcome ! You are now signed in to your account.
    </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div style="background-image: linear-gradient(to left top, #f85bb3, #ff6d8b, #ff9464, #ffc248, #f8ef50); border: 2px solid black; border-radius: 12px; padding: 20px; margin-bottom: 30px;">
          <h2 style="font-size: 24px;">The Beauty of Coding</h2>
          <p style="font-size: 18px;">Coding is an art that allows you to transform ideas into reality. It is the language of innovation, enabling you to create groundbreaking solutions and shape the digital world. With every line of code, you have the power to build applications, websites, and technologies that can change lives and make a difference.</p>
          <p style="font-size: 18px;">But coding is more than just lines of text on a screen. It's a journey of problem-solving, critical thinking, and continuous learning. It challenges you to think creatively, find elegant solutions, and embrace new possibilities. Coding opens doors to endless opportunities and empowers you to express your creativity in ways you never imagined.</p>
          <p style="font-size: 18px;">So, embrace the beauty of coding and embark on this remarkable adventure. Let your passion and curiosity guide you as you explore the vast world of programming. With dedication and perseverance, you can unlock your full potential and make your mark in the realm of technology.</p>
        </div>
      </div>
    </div>
  </div>

    <!-- User profile -->
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center">
        <img src="./img/blank-avatar.jpg" class="img-fluid rounded" alt="User avatar" width="180">
        <h4 class="my-4">Hello, <?= htmlspecialchars($_SESSION["username"]); ?></h4>
        <a href="./logout.php" class="btn btn-primary">Log Out</a>
      </div>
    </div>
  </div>
</body>

</html>