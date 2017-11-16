<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/undergraduate-program.css">
  <link rel="stylesheet" href="../css/advising.css">
  
</head>

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
            <li><a class="link_active" href="#">Advising</a></li>
            <li><a href="./history-major.php">Major</a></li>
            <li><a href="./history-minor.php">Minor</a></li>
            <li><a href="undergraduate-program-courses.php">Sample Curriculum</a></li>
            <li id="break_line"><a href="museum-studies.php">Museum Studies</a></li>
            <li><a href="./tutoring-services.php">Tutoring Services</a></li>
            <li><a href="./study-abroad.php">Study Abroad</a></li>
            <li><a href="./careers.php">Careers in History</a></li>
        </ul>
    </div>

    <div id="content">
        <h1 style="text-align:center;">Academic Advising</h1>
        <div class="section">
          <p>
              Welcome to the SIUE College of Arts and Sciences advisement page! Here 
              you will find all of the information you need to make appointments with 
              your advisor, access campus resources, and prepare yourself for success 
              in the classroom and beyond. In our office you will find highly qualified
              and engaging advisors to help you plan your academic track, offer suggestions
              on scheduling and course requirements, and help you explore alternative options
              if you’re experiencing any academic complications. We are here to assist you 
              in getting the most out of your educational pursuits, so come on in to our office
              located in Peck Hall and let us help you reach your potential.
          </p>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";

            $conn = mysqli_connect($servername, $username, $password, "phase4_db");

            if(!$conn){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }
              
            $sql = "SELECT * FROM advising;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              echo "<table><tr><th>Location</th><th>Contact Us</th></tr>";
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row["building"]."<br>Room ".$row["room_number"]."</td>";
                echo "<td>Phone: ".$row["phone"]."    Fax: ".$row["fax"]."<br>";
                echo "Email: <a href='mailto:".$row["email"]."'>casadvising@siue.edu</a></td></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results.";
            }
          ?>
          
              
        </div>
        <div class="section">
          <table>
            <tr>
              <th>Hours of Operation</th>
              <th></th>
            </tr>
            <tr>
              <td>Fall and Spring Semesters</td>
              <td>Mondays and Thursdays: 8 a.m. – 5:30 p.m.<br>Tuesdays, Wednesdays, Fridays: 8 a.m. – 4:30 p.m.</td>
            </tr>
            <tr>
              <td>Drop-In Advising Hours</td>
              <td>Tuesdays: 8:30 a.m. – 10 a.m.<br>Wednesdays: 1 p.m. – 2:30 p.m.</td>
            </tr>
            <tr>
              <td>Summer Session and Break Week</td>
              <td>Monday – Friday: 8 a.m. – 4:30 p.m.</td>
            </tr>
          </table>
        </div>
        <div class="section">
          <h2>Appointments</h2>
          <p>
              Appointments are available during open hours of operation.
              Students must make an appointment 24 hours in advance to meet with their advisor.
              E-mail requests for scheduling an appointment are not accepted.
              Students that are 10 minutes late for their appointment will need to reschedule.
          </p>
          <ul>
            <li>Come to the CAS Undergraduate Advising Office.</li>
            <li>Call CAS Undergraduate Advising at our phone number, listed below.</li>
            <li>Login to Starfish through Blackboard.</li>
          </ul>
        </div>
    </div>
  </div>

</body>

<script src="js/main.js"></script>

</html>