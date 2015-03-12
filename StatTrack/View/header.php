<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../Controller/style.css"/>
        <script src="../Controller/scripts.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
        <title>StatTrack</title>
    </head>
    
    <body>                


        
<?php //File inclusion and variable declaration.
include '../Controller/funcs.php';

$db = new PDO("mysql:host=localhost;dbname=capstone", "root", ""); ?>
<!-- persistant header keeps a random team image populated in both boxes on either side of page logo. -->       
<!-- main wrapper -->
<div id="main-wrapper">

<!-- afcTeam -->
<div id="afcTeam">
	<label id="randomImage1"></label>
</div><!-- end afcTeam -->

<!-- nfcteam-->
<div id="nfcTeam">
	<label id="randomImage2"></label>
</div><!-- end nfcTeam -->

<!-- logo -->
<div id="logo">
    <a href = "../Model/index.php"> <img src="../images/title.jpg" alt="" title="StatTrack" /> </a>
</div> <!-- end logo -->

<!-- nav -->
<div id="nav">
    <a class="nav-bar" href="../Model/index.php" title="Home">Home</a>
	<a class="nav-bar" href="../Model/about.php" title="About">About</a>
	<a class="nav-bar" href="../Model/players.php" title="View Players">View Players</a>
        <a class="nav-bar" href="../Model/teams.php" title="View Teams">View Teams</a>
	
<!-- search box -->
	<div style="float:right; height:50px; margin:auto;" >
            <form action="../Model/searchResults.php" Method="Post" style="margin-top:5px; color:white;">
                <fieldset>
                    <label>Player Search</label>
                    <input type="text" name="Player" value=""/>
                    <input type="submit" value="Search">"
                </fieldset>
            </form>
	</div><!-- end search box -->
	
</div><!-- end nav -->