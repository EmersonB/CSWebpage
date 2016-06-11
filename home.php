<!DOCTYPE html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <title> TJ Computer Science </title>

	   	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	   	
	  	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  	
  		
	</head>
	<body>


  <?php
  $username = "XXXXXXXXXXXXXXXXXX"; 
  $password = "XXXXXXXXXXXXXXXXXX";
  $dbname = "XXXXXXXXXXXXXXXXXX";

  $conn = new mysqli($servername, $username, $password, $dbname);

  //echo "<br />attempting connection";
  if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
  }

  ?>


	<nav class ="white">

		<div class ="navbar-wrapper container">
			<a href ="https://tjhsst.edu/" class = "brand-logo">TJCS</a>
			<ul class = "right">
                 <li>
                        <a class="page-scroll" href="#opportunities">Opportunities</a>
                 </li>
                 <li>
                        <a class="page-scroll" href="#events">Events</a>
                 </li>
                 <li>
                        <a class="page-scroll" href="#projects">Projects</a>
                 </li>
                 <li>
                        <a class="page-scroll" href="#contests">Contests</a>
                 </li>
         

                 <!--Should include areas to post information about: accomplishments, announcements, scholarships, internships, summer camps, CS Education Week, Labs/senior research, contests and hackathons, internships, organizations, nonprofits, TJ clubs (CLC, Dev Club, etc), TJ Competition Teams, TJ Faculty, TJ CS Courses. -->
			</ul>
		</div>
	</nav>
		 <div id="index-banner" class="parallax-container">
    		<div class="section no-pad-bot">
     	 		<div class="container">
        		<br><br>
        			<h1 class="header center black-text text-lighten-2">TJ Computer Science</h1>
        			<div class="row center">
        			  <h5 class="header col s12 light black-text">TJ computer science information all in one place</h5>
        			</div>
        			<div class="row center">
        	 		 <a href="#submit" id="download-button" 	class="btn-large waves-effect waves-light black lighten-1 page-scroll">Make Entry</a>
        			</div>
       				 <br><br>

     	 		</div>
   	 		</div>
   	 <div class="parallax"><img src="bridge.png" alt=""></div>
  	</div>
    <div id="opportunities" class = "container">
  	<h1 class="header center black-text text-lighten-2">Opportunities</h1>
  	<table class="highlight responsive-table"> 
        <thead>
          <tr>
              <th data-field="name" width="25%">Name</th>
              <th data-field="description">Description</th>
             
          </tr>
        </thead>

        <tbody>
          <?php
            $result = $conn->query("SELECT * FROM csinfo WHERE type=1 ORDER BY submit_date DESC");
            if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
		if($row["urllink"] == "") {
                  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		} else {
                  echo "<tr><td><a href = '" . $row["urllink"] . "'>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		}
              }
            }
          ?>
        </tbody>
      </table>
      </div>
      <br>
      <br>
      <div id="events" class = "container">
  	<h1 class="header center black-text text-lighten-2">Events</h1>
  	<table class="highlight responsive-table"> 
        <thead>
          <tr>
              <th data-field="name" width="25%">Name</th>
              <th data-field="description">Description</th>
             
          </tr>
        </thead>

        <tbody>
          <?php
            $result = $conn->query("SELECT * FROM csinfo WHERE type=2 ORDER BY submit_date DESC");
            if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
		if($row["urllink"] == "") {
                  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		} else {
                  echo "<tr><td><a href = '" . $row["urllink"] . "'>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		}
              }
            }
          ?>
        </tbody>
      </table>
      </div>
      <br>
      <br>
      <div id="projects" class = "container">
  	<h1 class="header center black-text text-lighten-2">Projects</h1>
  	<table class="highlight responsive-table"> 
        <thead>
          <tr>
              <th data-field="name" width="25%">Name</th>
              <th data-field="description">Description</th>
             
          </tr>
        </thead>

        <tbody>
          <?php
            $result = $conn->query("SELECT * FROM csinfo WHERE type=3 ORDER BY submit_date DESC");
            if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
		if($row["urllink"] == "") {
                  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		} else {
                  echo "<tr><td><a href = '" . $row["urllink"] . "'>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		}
              }
            }
          ?>
        </tbody>
      </table>
      </div>
      <br>
      <br>
      <div id="contests" class = "container">
  	    <h1 class="header center black-text text-lighten-2">Contests</h1>
  	    <table class="highlight responsive-table"> 
          <thead>
            <tr>
              <th data-field="name" width="25%">Name</th>
              <th data-field="description">Description</th>
            </tr>
        </thead>

        <tbody>
          <?php
            $result = $conn->query("SELECT * FROM csinfo WHERE type=4 ORDER BY submit_date DESC");
            if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
		if($row["urllink"] == "") {
                  echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		} else {
                  echo "<tr><td><a href = '" . $row["urllink"] . "'>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
		}
              }
            }
          ?>
        </tbody>
      </table>
      </div>
      <br>
      <br>
      <div id="submit" class = container>
        <h1 class = "header center black-text text-lighten-2">Submit Entry</h1>
        <div class="row">
          <form class="col s12" action="submit.php" method="post">
            <div class="row">
              <div class="input-field col s12">
                <input id="entryname" name="entryname" type="text" class="validate">
                <label for="entryname">Entry Name</label>
              </div>
            </div>
             <div class="row">
              <div class="input-field col s12">
                <input id="link" name="urllink" type="text" class="validate">
                <label for="link">Link</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" name="description" class="materialize-textarea" length="120"></textarea>
                <label for="textarea1">Description</label>
              </div>
            </div>
            <label>Entry Type</label>
            <select class="browser-default" name="itemtype">
              <option value="" disabled selected>Type</option>
              <option value="1">Opportunities</option>
              <option value="2">Events</option>
              <option value="3">Projects</option>
              <option value="4">Contests</option>
            </select><br>
            <div class="row center">
            <input type="submit" id="download-button" class="btn-large waves-effect waves-light black lighten-1 page-scroll" value="Submit">
            <!--<a href="#" id="download-button"  class="btn-large waves-effect waves-light black lighten-1 page-scroll">Submit Entry</a>-->
            </div>
          </form>
              </div>
      </div>

		<footer class="page-footer white">
     		 <div class="footer-copyright black">
        	    <div class="container">
           			 2016 Emerson Berlik & Neil Thistlethwaite
          	  </div>
         	 </div>
        </footer>

      	<!-- Materialize -->
      	<script src="js/jquery.js"></script>	
  		<script src="js/materialize.js"></script>
  		<script src="js/init.js"></script>
        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>
	</body>  
</html>
  
