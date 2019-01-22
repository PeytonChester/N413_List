<?php
require_once("php/n413connect.php");

$query = "SELECT id, city, name, logo from nfl_teams";
$result = mysqli_query($link, $query);

$teams = Array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){

    $teams[] = Array( 	"id" => $row["id"],
							"city" => $row["city"],
							"name" => $row["name"],
							"logo" => $row["logo"] );
}
?>

<DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/n413_roster.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>NFL Teams</title>

        <!-- normal JS to declare a function -->
        <script type="text/javascript">
			function click_me(name, city){
				alert("You clicked on the " + name + ", a football team from "+ city);
			}
		</script>
    </head>
    
    <body>
    	<!-- BEGIN Bootstrap Navbar -->
    	<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">NFL Teams</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <!-- END Bootstrap Navbar -->
        <div class="container">
          <div class="row">
            <div class="col-xs-1"></div> <!-- 1-column spacer -->
            <div class="col-xs-11"> <!-- column for content -->
    <?php
    foreach ($teams as $team){
        echo '
				<div id="team_'.$team["id"].'" class="student" onclick="javascript:click_me(\''.$team["name"].'\', \''.$team["city"].'\');">
					<img src="'.$team["logo"].'" height="30"> '.$team["city"].' '.$team["name"].'
				</div>';
    }

    // an escaped single quote (\') will allow you to use single quotes inside of another single quote
    // on click, find the js function called "click_me" and run it with this data
    ?>
    		</div> <!-- /col-xs-10 -->
    	  </div> <!-- /.row -->
    	</div>  <!-- /.container -->
    </body>
</html>