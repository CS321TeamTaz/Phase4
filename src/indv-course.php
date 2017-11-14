<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/indv-course.css">
  
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
          <a href="./courses.php" class="dropdown_item">Courses</a>
        </div>
      </li>
      <li id="navbar_item"><a href="./src/events.html">Events</a></li>
      <li id="navbar_item"><a href="./src/news.html">News</a></li>
      <li id="navbar_item"><a href="./src/faculty.html">Faculty</a></li>
      <li id="navbar_item"><a href="./contact.html">Contact</a></li>
    </ul>
  </div>

  <div id="main_content">
    <div id="main_content_wrapper">
        <div id="course_header_wrapper">
            <h2>Current Courses</h2>
            <h3><a href="./courses.php">Back to Course list</a></h3>
        </div>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";

            $conn = mysqli_connect($servername, $username, $password, "phase4_db");

            if(!$conn){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $id = $_GET['id'];
            $sql="SELECT * from courses WHERE id=".$id;
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    if($row["undergrad_requirement"] == 1) {
                        $row["undergrad_requirement"] = "Yes";
                    } else {
                        $row["undergrad_requirement"] = "No";
                    }

                    if($row["grad_requirement"] == 1) {
                        $row["grad_requirement"] = "Yes";
                    } else {
                        $row["grad_requirement"] = "No";
                    }

                    echo "<div id='course_name_wrapper'><h2>".$row["title"]."</h2></div>";
                    echo "<div id='course_desc_wrapper'><p>".$row["description"]."</p></div>";
                    echo "<div id='course_content_upper_wrapper'><div id='course_content_upper_left_wrapper'><span>Credit Hours: ".$row["credi2t_hours"]."</span><br><br>";
                    echo "<span>Professor: ".$row['instructor_name']."</span></div>";

                    echo "<div id='course_content_upper_right_wrapper'><div id='center_div'><span>Prerequisites: </span><ul>";
                    echo "<li>Course 1</li><li>Course 2</li><li>Course 3</li>";
                    echo "</ul></div></div></div>";

                    echo "<div id='course_content_lower_wrapper'><div id='course_content_lower_left_wrapper'><span>Undergraduate Requirement: ".$row["undergrad_requirement"]."</span><br>";
                    echo "<span>Graduate Requirement: ".$row["grad_requirement"]."</span></div>";
                
                    echo "<div id='course_content_lower_right_wrapper'><span>Grade required to recieve credit: ".$row["passing_grade"]."</span><br>";
                    echo "<span><a href='#'>Download course syllabus</a></span></div>";
                }
            }
        ?>        
        </div>
    </div>  
  </div>
</body>
</html>