<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/indv-event.css">
  
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
      <li id="navbar_item" class="dropdown_button">
        <a href="#">Academics  <span style="font-size:10px;">&#9660;</span></a>
        <div class="dropdown_menu">
          <a href="./undergraduate-program.html" class="dropdown_item">Undergraduate</a>
          <a href="./graduate-program.html" class="dropdown_item">Graduate</a>
          <a href="./courses.php" class="dropdown_item">Courses</a>
        </div>
      </li>
      <li id="navbar_item" class="active"><a href="#">Events</a></li>
      <li id="navbar_item"><a href="./src/news.html">News</a></li>
      <li id="navbar_item"><a href="./faculty.html">Faculty</a></li>
      <li id="navbar_item"><a href="./contact.html">Contact</a></li>
    </ul>
  </div>


  <div id="main_content">
    <div id="sidebar">
        <h2 class="sidebar_header">Events</h2>
        <ul class="sidebar_list">
            <li><a href="./events.php">Upcoming Events</a></li>
            <li id="break_line"><a href="#">Past Events</a></li>
            <li><a href="./contact.html">Host an event</a></li>
        </ul>
    </div>

    <div id="content">
        <div id="table">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";

            $conn = mysqli_connect($servername, $username, $password, "phase4_db");

            if(!$conn){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $id = $_GET['id'];
            $sql = "SELECT * FROM events WHERE id=".$id;
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='event_card_wrapper'><div class='img_content_wrapper'><div class='event_card_img_wrapper'><img src='data:image/jpeg;base64,".base64_encode($row["img"])."'>";
                    echo "</div><div class='event_card_content'><div class='event_title'><h3><a>".$row["title"]." </a></h3></div>";
                    echo "<div class='event_description'><span>".$row["day_long"].", ".$row["month_long"]." ".$row["day_short"].", ".$row["year"]."</span><br>";
                    echo "<span>".$row["start_time"]." To ".$row["end_time"]."</span><br>";
                    echo "<span>Organized by: ".$row["organization"]."</span><br>";
                    echo "<span>".$row["location"]."</span></div></div></div><br>";
                    echo "<div class='event_card_description'><h3>Event Description:</h3><p>".$row["description"]."</p></div></div>";
                }
            }
            mysqli_close($conn);
        ?> 
        </div>
    </div>    
  </div>

</body>

</html>