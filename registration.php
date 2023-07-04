<?php include("connection.php");  ?>

<!DOCTYPE html>
<html>

<head>
  <title>Educational registration form</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="main-block">
    <div class="left-part">
      <i class="fas fa-graduation-cap"></i>
      <h1>Register to continue</h1>
      <p>Bansal Institute of Engineering & Technology, Lucknow</p>
      <hr>
      <p> provides best environment for learning and growing</p>

    </div>
    <form action="submit.php" method="post">
      <div class="title">
        <i class="fas fa-pencil-alt"></i>
        <h2>Register here</h2>
      </div>
      <div class="info">
        <input class="fname" type="text" name="name" placeholder="Full name" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="phoneNumber" placeholder="PhoneNumber" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="rollno" placeholder="Roll Number" required>
        <select name="course" required>
          <option value="" selected>Course type*</option>
          <option value="b_tech">Bachelors degree</option>
          <option value="m_tech">Masters degree</option>
          <option value="diploma">Diploma</option>
          <option value="mba">MBA</option>

        </select>
      </div>
      <div class="checkbox">
        <input type="checkbox" name="checkbox"><span>I agree to the <a href="#"> Privacy Policy</a></span>
      </div>
      <button type="submit" name ="register">Submit</button>
    </form>
    
  </div>
  
</body>

</html>