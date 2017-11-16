<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/undergraduate-program.css">
  <link rel="stylesheet" href="../css/tutoring-services.css">
  
</head>

<style>
.carousel_slide {display: none;}
</style>

<body>

  <header id="header">
    <div id="header_content">
      <img id="header_logo" src="../img/hs_logo.png" alt="Home">
    </div>
  </header>

  <div id="navbar">
    <ul id="navbar_content">
      <li class="" id="navbar_item"><a href="../index.php">Home</a></li>
      <li id="navbar_item" class="dropdown_button active">
        <a href="#">Academics  <span style="font-size:10px;">&#9660;</span></a>
        <div class="dropdown_menu">
          <a href="undergraduate-program.php" class="dropdown_item">Undergraduate</a>
          <a href="graduate-program.php" class="dropdown_item">Graduate</a>
          <a href="./courses.php" class="dropdown_item">Courses</a>
        </div>
      </li>
      <li id="navbar_item"><a href="./events.php">Events</a></li>
      <li id="navbar_item"><a href="./news.php">News</a></li>
      <li id="navbar_item"><a href="faculty.php">Faculty</a></li>
      <li id="navbar_item"><a href="./contact.php">Contact</a></li>
    </ul>
  </div>

  <div id="main_content">
    <div id="sidebar" class="">
        <h3 class="sidebar_header">Undergraduate Program</h3>
        <ul class="sidebar_list">
            <li><a href="courses.php">Courses</a></li>
            <li><a href="./advising.php">Advising</a></li>
            <li><a href="./history-major.php">Major</a></li>
            <li><a href="./history-minor.php">Minor</a></li>
            <li><a href="undergraduate-program-courses.php">Sample Curriculum</a></li>
            <li id="break_line"><a href="museum-studies.php">Museum Studies</a></li>
            <li><a class="link_active" href="./tutoring-services.php">Tutoring Services</a></li>
            <li><a href="./study-abroad.php">Study Abroad</a></li>
            <li><a href="./careers.php">Careers in History</a></li>
        </ul>
    </div>

    <div id="content">

            <h1 style="text-align:center;">Tutoring Services</h1>
            <h3><a href="advising.html">Link to CAS Advising!</a></h3>
            <br>
            <h3>List of Student Instructor Sessions given for each course.</h3>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";

        $conn = mysqli_connect($servername, $username, $password, "phase4_db");

        if(!$conn){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        $sql="SELECT * from tutoring_service";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table><tr><th>Course</th><th>SI Leader</th><th>Day/Time</th><th>Location</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>".$row["course_name"]."</td><td>".$row["si_leader"]."</td><td>".$row["day_time"]."</td><td>".$row["location"]."</td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 results.";
          }
        
        ?>


        </div>
  </div>

</body>

<script src="js/main.js"></script>

</html>