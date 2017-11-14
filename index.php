<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Department of Historical Studies - SIUe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Department of Historical Studies - SIUe">
  <meta name="author" content="Taz">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/index.css">
  
</head>

<style>
.carousel_slide {display: none;}
</style>

<body>

  <header id="header">
    <div id="header_content">
      <img id="header_logo" src="img/hs_logo.png" alt="Home">
    </div>
  </header>

  <div id="navbar">
    <ul id="navbar_content">
      <li class="active" id="navbar_item"><a href="index.html">Home</a></li>
      <li id="navbar_item" class="dropdown_button">
        <a href="#">Academics  <span style="font-size:10px;">&#9660;</span></a>
        <div class="dropdown_menu">
          <a href="src/undergraduate-program.html" class="dropdown_item">Undergraduate</a>
          <a href="src/graduate-program.html" class="dropdown_item">Graduate</a>
          <a href="./src/courses.php" class="dropdown_item">Courses</a>
        </div>
      </li>
      <li id="navbar_item"><a href="./src/events.html">Events</a></li>
      <li id="navbar_item"><a href="./src/news.html">News</a></li>
      <li id="navbar_item"><a href="./src/faculty.html">Faculty</a></li>
      <li id="navbar_item"><a href="./src/contact.html">Contact</a></li>
    </ul>
  </div>

  <div id="carousel_container">
      <div id="carousel">
          <img class="carousel_slide" src="img/slide1.jpg">
          <img class="carousel_slide" src="img/slide2.jpg">
          <img class="carousel_slide" src="img/slide3.jpg">
      </div>
      <div id="carousel_controller">
        <label class="carousel_indicator" onclick="rotate_carousel(1)"></label>
        <label class="carousel_indicator" onclick="rotate_carousel(2)"></label>
        <label class="carousel_indicator" onclick="rotate_carousel(3)"></label>
      </div>
  </div>

  <div id="main_content">

    <div>
      <div id="news_card" class="generic_card">
        <h2 class="topic_header"><a href="./src/news.html">News</a></h2>
        <div class="card_content">
          <div class="news_post">
            <a href="#">Link to news article</a></br>
            <label class="news_card_date">Sunday Oct. 15, 2017</label>
            <div class="news_card_desc">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna 
                aliqua. 
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <div id="events_card" class="generic_card">
        <h2 class="topic_header" ><a href="./src/events.html">Upcoming Events</a></h2>
        <div class="card_content">
          <div class="event_post">
            <div class="event_image_wrapper">
              <div class="event_image_month">Aug</div>
              <div class="event_image_day">24</div>
            </div>
            <div class="event_content">
              <p>
                <a href="./src/indv-event.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
              </p>
            </div>
          </div>
                
          <div class="event_post">
            <div class="event_image_wrapper">  
              <div class="event_image_month">Dec</div>
              <div class="event_image_day">16</div>  
            </div>
            <div class="event_content">
              <p>
                <a href="./src/indv-event.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div id="featured_person_card" class="generic_card">
        <h2 class="topic_header"><a href="./src/events.html">Featured Student</a></h2>
        <div class="card_content">
          <div class="student_card">
            <div id="featured_student_image_wrapper">
                <img id="featured_student_image" src="./img/featured_student.jpg">
            </div>
            <h2><a href="./src/indv-featured-student.html">Karlie James</a></h2>
            <div id="featured_student_desc">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div>
      <div id="student_resources_card" class="generic_card">
          <h2 class="topic_header"><a href="./src/events.html">Student Resources</a></h2>
          <ul id="resource_list">
            <li><a href="./src/advising.html">Advising</a></li>
            <li><a href="./src/tutoring-services.html">Tutoring Services</a></li>
            <li><a href="./src/study-abroad.html">Study Abroad</a></li>
            <li id="break_line"><a href="./src/contact.html">Contact us</a></li>
            <li id="break_line_lower"><a href="http://www.siue.edu/lovejoylibrary/">Lovejoy Library</a></li>
            <li><a href="http://siue.kanopystreaming.com/">Kanopy</a></li>
          </ul>
      </div>
      <div id="combo_card">
        <div id="publications_card" class="generic_card">
          <h2 class="topic_header"><a href="./src/events.html">Publications</a></h2>
          <div id="table_wrapper">
            <table>
              <tr>
                <th>Title</th>
                <th>Author</th> 
              </tr>
            </table>
          </div>  
        </div>
        <div id="location_card" class="generic_card">
            <h2 class="topic_header"><a href="./src/events.html">Where are we?</a></h2>
        </div>
      </div>
        
      <div id="minor_card" class="generic_card">
        <h2 class="topic_header"><a href="./src/history-minor.html">Interested in a History Minor?</a></h2>
      </div>
    </div>
    
        
  </div>

</body>

<script src="js/main.js"></script>

</html>

