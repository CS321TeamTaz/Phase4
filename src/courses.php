<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/courses.css">
  
</head>

<body>

  <header id="header">
    <div id="header_content">
      <img id="header_logo" src="../img/hs_logo.png" alt="Home">
    </div>
  </header>

  <div id="navbar">
    <ul id="navbar_content">
      <li id="navbar_item"><a href="../index.php">Home</a></li>
      <li id="navbar_item" class="dropdown_button active">
        <a href="#">Academics  <span style="font-size:10px;">&#9660;</span></a>
        <div class="dropdown_menu">
          <a href="./undergraduate-program.html" class="dropdown_item">Undergraduate</a>
          <a href="./graduate-program.html" class="dropdown_item">Graduate</a>
          <a href="./courses.html" class="dropdown_item">Courses</a>
        </div>
      </li>
      <li id="navbar_item"><a href="./events.html">Events</a></li>
      <li id="navbar_item"><a href="./news.html">News</a></li>
      <li id="navbar_item"><a href="./faculty.html">Faculty</a></li>
      <li id="navbar_item"><a href="./contact.html">Contact</a></li>
    </ul>
  </div>

  <div id="main_content">
    <div id="main_content_wrapper">
        <div class="main_content_header">
                <h2>Current Courses</h2>
        </div>
        <div id="table_wrapper">
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";

            $conn = mysqli_connect($servername, $username, $password, "phase4_db");

            if(!$conn){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }
              
            $sql = "SELECT * FROM courses;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              echo "<table><tr><th>Title</th><th>Description</th><th>Instructor(s)</th><th>Day/Time</th><th>Location</th></tr>";
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td><a href='./indv-course.php?id=".$row["id"]."'>".$row["title"]."</a></td><td>".$row["description"]."</td><td>".$row["instructor_name"]."</td><td>".$row["day"]."<br>".$row["start_time"]." To ".$row["end_time"]."</td><td>".$row["location"]."</td></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results.";
            }
          ?>
        </div>
    </div>  
    
  </div>

</body>

</html>

