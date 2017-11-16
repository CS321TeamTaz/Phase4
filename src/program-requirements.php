<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/graduate-program.css">
  <link rel="stylesheet" href="../css/program-requirements.css">
  
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
    <div id="sidebar">
        <h3 class="sidebar_header">Graduate Programs</h3>
        <ul class="sidebar_list">
            <li><a href="courses.php">Courses</a></li>
            <li><a href="./advising.php">Advising</a></li>
            <li><a href="./graduate-masters.php">Masters</a></li>
            <li><a href="./graduate-phd.php">Phd Program</a></li>
            <li id="break_line"><a href="./program-requirements.php">Program Requirements</a></li>
            <li><a href="./tutoring.php">Tutoring Services</a></li>
            <li><a href="./study-abroad.php">Study Abroad</a></li>
            <li><a href="./careers.php">Careers in History</a></li>
        </ul>
    </div>

    <div id="content">
        <h1 style="text-align:center;">Graduate Program</h1>
        

        <h2><a href="../index.html">Historical Studies</a></h2>
    <p align="left">The curriculum provides students with a foundation of theoretical and applied approaches to the interpretive, legal and ethical, community, and administrative challenges that confront museum employees.  This sequence of courses is designed for students who have been admitted to or are enrolled in a related master's program, but who want the additional educational credentials to qualify for a certificate.  Students not enrolled in a master's program also may earn the post-baccalaureate certificate.  Students must complete all course work for the program with a minimum of a 3.0 grade average (B-level).  The program can be completed on a part-time or full-time basis, but must be completed within six years.</p>
    <p align="left">
      <em>Students wishing to complete this certificate must fulfill 21 graduate credit hours.</em>
    </p>
    <h3 align="center">
      <strong>Required courses (12 semester hours):</strong>
    </h3>

    <table align="center" border="1" cellpadding="0" cellspacing="1" summary="Required Courses" width="100%">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername, $username, $password, "phase4_db");

    if(!$conn){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql="SELECT * from prog_reqs";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Course</th><th>Title</th><th>Hours</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>".$row["course"]."</td><td>".$row["title"]."</td><td>".$row["hours"]."</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results.";
      }
    
    ?>
    <p align="left" style="LINE-HEIGHT: 200%">Students must complete 9 credit hours of electives.  At least one course (3 hours) must be at a 500-level.  No more than 3 semester hours can be in independent readings, directed research, practicum, or similar courses. Students also are advised to take one elective from a department outside their core curriculum.  Electives should be approved by the Museum Studies Program Director.</p>
    <h3 align="center">
      <strong>Potential Electives Offered at SIUE:</strong>
    </h3>
    <div align="center">
      <table border="1" cellpadding="0" cellspacing="1" summary="possible electives" width="100%">

      <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername, $username, $password, "phase4_db");

    if(!$conn){
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql="SELECT * from prog_reqs_2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Course</th><th>Title</th><th>Hours</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>".$row["course"]."</td><td>".$row["title"]."</td><td>".$row["hours"]."</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results.";
      }
    
    ?>
    </div>
    <p align="center">Please see the Graduate Catalog for current course descriptions:</p>
    <p align="center">
      <a href="http://www.siue.edu/graduatestudents/catalog/Graduate_Catalog_Home.shtml">Graduate Catalog</a>
    </p>

  </div>



</body>

<script src="js/main.js"></script>

</html>