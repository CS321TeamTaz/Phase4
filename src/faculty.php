<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/faculty.css">
  
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
      <li class="" id="navbar_item"><a href="../index.html">Home</a></li>
      <li id="navbar_item" class="dropdown_button">
        <a href="#">Academics  <span style="font-size:10px;">&#9660;</span></a>
        <div class="dropdown_menu">
          <a href="undergraduate-program.html" class="dropdown_item">Undergraduate</a>
          <a href="graduate-program.html" class="dropdown_item">Graduate</a>
          <a href="./courses.html" class="dropdown_item">Courses</a>
        </div>
      </li>
      <li id="navbar_item"><a href="events.html">Events</a></li>
      <li id="navbar_item"><a href="./news.html">News</a></li>
      <li id="navbar_item" class="active"><a href="faculty.html">Faculty</a></li>
      <li id="navbar_item"><a href="./contact.html">Contact</a></li>
    </ul>
  </div>



  <div id="main_content">
    <div id="content">
        <h1 style="text-align:center;">Historical Studies Faculty</h1>

        <h3> Department Chair and Office Support</h3>

        <?php
        $connection = mysqli_connect('localhost', 'root', 'root', "faculty");
        
        if(!$connection){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM chairs;";
        $result = mysqli_query($connection ,$sql);
        
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

            
            while ($row = mysqli_fetch_assoc($result)){
              
              echo "<tr><td><a href='./indiv-professor.php?id=".$row['Id'] ."'>" . $row['Name'] . "</a></td><td>" . $row['Specialization'] . "</td><td>" . $row['Office Location'] 
              . "</td><td>" . $row['Phone'] . "</td><td>" . $row['Fax'] . "</td><td>" . $row['Email'] . "</td></tr>";
            }
            echo "<table>";
          }else{
            echo "0 results.";
          }
      ?>

    <h3>Historical Studies Faculty</h3> 

    <?php
        $connection = mysqli_connect('localhost', 'root', 'root', "faculty");
        
        if(!$connection){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM professors;";
        $result = mysqli_query($connection ,$sql);
        
          if (mysqli_num_rows($result) > 0){
            echo "<table>";
            echo "<tr>
            <th>Name</th>
            <th>Specialization</th>
            <th>Office Location</th>
            <th>Phone </th>
            <th>Email</th>
          </tr>";

            
            while ($row = mysqli_fetch_assoc($result)){
              
              echo "<tr><td><a href='./indiv-professor.php?id=".$row['Id'] ."'>" . $row['Name'] . "</a></td><td>" . $row['Specialization'] . "</td><td>" . $row['Office Location'] 
              . "</td><td>" . $row['Phone'] . "</td><td>" . $row['Email'] . "</td></tr>";
            }
            echo "<table>";
          }else{
            echo "0 results.";
          }
      ?>

      


     </div>
  </div>

</body>

<script src="js/main.js"></script>

</html>