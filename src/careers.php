<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/undergraduate-program.css">
  <link rel="stylesheet" href="../css/careers.css">
  
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
            <li><a href="./histor-minor.php">Minor</a></li>
            <li><a href="undergraduate-program-courses.php">Sample Curriculum</a></li>
            <li id="break_line"><a href="museum-studies.php">Museum Studies</a></li>
            <li><a href="./tutoring-services.php">Tutoring Services</a></li>
            <li><a href="./study-abroad.php">Study Abroad</a></li>
            <li><a class="link_active" href="./careers.php">Careers in History</a></li>
        </ul>
    </div>

    <div id="content">
        <h1 style="text-align:center;">Careers in History</h1>
        <p>
            Traditionally, a degree in historical studies was thought to primarily
            provide a knowledge base for two careers: licensure in teaching, or as a 
            foundation for attending law school. While teaching and attending law school 
            are still viable options for students with a degree in historical studies, the 
            degree is becoming broadly recognized as a foundation for many other careers. 
            Students are pursuing careers in areas such as local, state, and federal 
            government, including the Foreign Service and city or town management; nonprofit
            organizations; politics, including political advising; curatorial and archival 
            management in libraries, museums and art galleries; media, in public relations, 
            digital editing and film consulting; and business, in corporate training and 
            development.
        </p>
        <h2>Who Employs our Cougars?</h2>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";

            $conn = mysqli_connect($servername, $username, $password, "phase4_db");

            if(!$conn){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }
              
            $sql = "SELECT * FROM employers;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              echo "<table>";
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td><img src='data:image/jpeg;base64,".base64_encode($row["img"])."' style='width:70px; height:auto;'></td>";
                echo "<td><h4>".$row["business_name"]."</h2></td>";
                echo "<td><a href='".$row["url"]."'>Link to their site</a></tb></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results.";
            }
          ?>
        
        <div id="contact_us">
          <h4>Are you an employer who wants to add your company to this list?</h4>
          <br>
          <a href="contact.php">Contact Us!</a>
        </div>
    </div>
  </div>

</body>

</html>