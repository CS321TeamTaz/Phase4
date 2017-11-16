<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Department of Historical Studies - SIUe</title>
    <meta name="description" content="Department of Historical Studies - SIUe">
    <meta name="author" content="Taz">

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/faculty.css">
    <link rel="stylesheet" href="../css/indiv-professor.css">

</head>

<style>
    .carousel_slide {
        display: none;
    }
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
            <li id="navbar_item" class="dropdown_button">
                <a href="#">Academics  <span style="font-size:10px;">&#9660;</span></a>
                <div class="dropdown_menu">
                    <a href="undergraduate-program.php" class="dropdown_item">Undergraduate</a>
                    <a href="graduate-program.php" class="dropdown_item">Graduate</a>
                    <a href="./courses.php" class="dropdown_item">Courses</a>
                </div>
            </li>
            <li id="navbar_item"><a href="events.php">Events</a></li>
            <li id="navbar_item"><a href="./news.php">News</a></li>
            <li id="navbar_item" class="active"><a href="faculty.php">Faculty</a></li>
            <li id="navbar_item"><a href="./contact.php">Contact</a></li>
        </ul>
    </div>

    <div id="main_content">
        <div id="content">
            <h1 style="text-align:center;">Historical Studies Faculty</h1>

            <?php
        $connection = mysqli_connect('localhost', 'root', 'root', "phase4_db");
        
        if(!$connection){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $id = $_GET["id"];
        $sql = "SELECT * FROM chairs WHERE id=".$id;
        $sql2 = "SELECT * FROM professors WHERE id=".$id;

        $result = mysqli_query($connection ,$sql);
        $result2 = mysqli_query($connection ,$sql2);

        
          if (mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>
            <th>Name</th>
            <th>Specialization</th>
            <th>Office Location</th>
            <th>Phone </th>
            <th>Fax </th>
            <th>Email</th>
          </tr>";
            

            while ($row = mysqli_fetch_assoc($result)) {
              
              echo "<tr><td>" . $row['Name'] . "</a></td><td>" . $row['Specialization'] . "</td><td>" . $row['Office Location'] 
              . "</td><td>" . $row['Phone'] . "</td><td>" . $row['Fax'] . "</td><td>" . $row['Email'] . "</td></tr>";

              echo "</table>";  
              echo "<br><div>
              <h1 style=text-align:center;>Bio/Education</h1>
              <p>".$row['bio']."</p>
              </div>";

              echo "<br><div><h1 style=text-align:center;>Publications</h1></div>";
            
              $sql3 = "SELECT * FROM publications WHERE author_id=".$id;
              $result3 = mysqli_query($connection ,$sql3);
              if (mysqli_num_rows($result3) > 0){
                echo "<table id='publications'><tr><th>Title</th><th>Description</th></tr>";
                while ($row2 = mysqli_fetch_assoc($result3)) {
                    echo "<tr><td>".$row2["title"]."</td><td>".$row2["description"]."</td></tr>";
                }
                echo "</table>";
              } else {
                  echo "None.";
              }
            }
            

        }else if(mysqli_num_rows($result2) > 0 ) {
            echo "<table>";
            echo "<tr>
            <th>Name</th>
            <th>Specialization</th>
            <th>Office Location</th>
            <th>Phone </th>
            <th>Email</th>
          </tr>";

            while ($row = mysqli_fetch_assoc($result2)  ){
              
              echo "<tr><td>" . $row['Name'] . "</a></td><td>" . $row['Specialization'] . "</td><td>" . $row['Office Location'] 
              . "</td><td>" . $row['Phone'] . "</td><td>" . $row['Email'] . "</td></tr>";

              echo "</table>";  
              echo "<br><div>
              <h1 style=text-align:center;>Bio/Education</h1>
              <p>".$row['bio']."</p>
              </div>"; 

              echo "<br><div><h1 style=text-align:center;>Publications</h1></div>";
              
              $sql3 = "SELECT * FROM publications WHERE author_id=".$id;
              $result3 = mysqli_query($connection ,$sql3);
              if (mysqli_num_rows($result3) > 0){
                echo "<table id='publications'><tr><th>Title</th><th>Description</th></tr>";
                while ($row2 = mysqli_fetch_assoc($result3)) {
                    echo "<tr><td>".$row2["title"]."</td><td>".$row2["description"]."</td></tr>";
                }
                echo "</table>";
              } else {
                  echo "<div style='text-align:center;'>None.</div>";
              }
            }
           
        }else{
            echo "0 results.";
          }
      ?>


        </div>
    </div>

</body>

<script src="js/main.js"></script>

</html>