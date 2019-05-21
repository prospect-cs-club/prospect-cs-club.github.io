<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <!--<meta http-equiv="refresh" content="5">-->
  <title>Prospect CS Club: Hackathons</title>
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <link href="styles/hackathons_style.css" rel="stylesheet">
  <link href="styles/general_style.css" rel="stylesheet">
  <link href="styles/nav_style.css" rel="stylesheet">
  <link href="styles/footer_style.css" rel="stylesheet">
</head>

<body>

  <?php require 'nav.php';?>

  <div id="container">
    <h1 id="title">Hackathons</h1>
    <div id="subcontainer">
      <h2 id="upcoming">Upcoming Hackathons</h2>
      <table>
        <thead>
          <tr>
            <td>Name of Hackathon</td>
            <td>Date</td>
            <td>Location</td>
            <td>Website</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>BayHacks</td>
            <td>May 11-12</td>
            <td>Fremont</td>
            <td><a href="https://bayhacks.io/">bayhacks.io</a></td>
          </tr>
          <tr>
            <td>OmniHacks</td>
            <td>May 18-19</td>
            <td>Fremont</td>
            <td><a href="omnihacks.tech">omnihacks.tech</a></td>
          </tr>
          <tr>
            <td>CodeDay Bay Area</td>
            <td>May 25-26</td>
            <td>San Francisco</td>
            <td><a href="https://www.codeday.org/ba">codeday.org/ba</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <?php require 'footer.php';?>
  </div>

</body>

</html>
