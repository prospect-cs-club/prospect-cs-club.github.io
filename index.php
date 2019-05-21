<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <!--<meta http-equiv="refresh" content="5">-->
  <title>Prospect CS Club: Home</title>
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <link href="styles/index_style.css" rel="stylesheet">
  <link href="styles/general_style.css" rel="stylesheet">
</head>

<body>

  <?php require 'nav.php';?>

  <div id="mainTitle">
    <h1 id="clubName">Prospect Computer Science Club</h1>
    <p id="motto">Club Motto :D</p>
  </div>
  <div class="gradient"></div>
  <div id="container">
    <div id="sideBar">
        <h1>Upcoming events</h1>
        <div id="events">
          <table>
            <tbody>
              <tr>
                <td>Event 1</td>
              </tr>
              <tr>
                <td>Event 2</td>
              </tr>
              <tr>
                <td>Event 3</td>
              </tr>
              <tr>
                <td>Event 4</td>
              </tr>
              <tr>
                <td>Event 5</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="featuredProject">
          <h1>Featured Project</h1>
          <img src="#" alt="Featured project">
          <br>
          <a href="#">To learn more about this project, click here!</a>
        </div>
    </div>
    <div id="mainContent">
      <div id="about">
        <h1>About Us</h1>
        <p>We are a club geared towards those who are interested in pursuing
          the field of computer science or exploring opportunities that are
          related to computer science. As a part of the club, you will:</p>
          <ul style="text-align: left;">
            <li>Access to desktop computers within the classroom (not chromebooks)</li>
            <li>Collaborate with others in coding projects</li>
            <li>Get access to a multitude of programming and Computer Science
              resources</li>
            <li>Discover opportunities to participate in coding competitions,
              mainly hackathons (we may participate in online coding competitions
              as small groups or individually)</li>
            <li>Get help with tutoring or help with programming or AP CS
              homework (currently in the works of being set up)</li>
          </ul>

          <br>

          <h1>Meetings:</h1>
          <p>We meet every Thursday during lunch in Room 42 (see map below for
            details). In the future, we may have two meetings per week.</p>
        <img id="campusMap" src="images/CampusMapLabeledRoom42.jpg" alt="Campus map with Room 42 highlighted in
        a red circle.">
      </div>
    </div>

    <div id="c1" class="circle"></div>
    <div id="c2" class="circle"></div>
    <div id="c3" class="circle"></div>
    <div id="c4" class="circle"></div>

    <?php require 'footer.php';?>
  <div>

</body>

</html>
