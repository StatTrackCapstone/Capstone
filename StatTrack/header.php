<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script src="scripts.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
        <title>StatTrack</title>
    </head>
    
    <body>                


        
<?php 
$host = 'sql.neit.edu';
$dbname = 'mytable';
$username = 'SE255_KBaez';
$password = '001332308';

include 'funcs.php';

$db = new PDO("mysql:host=localhost;dbname=capstone", "root", ""); ?>
        
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
	<img src="images/title.jpg" alt="" title="StatTrack" />
</div> <!-- end logo -->

<!-- nav -->
<div id="nav">
	<a class="nav-bar" href="index.php" title="Home">Home</a>
	<a class="nav-bar" href="about.php" title="About">About</a>
	<a class="nav-bar" href="players.php" title="View Players">View Players</a>
	<a class="nav-bar" href="teams.php" title="View Teams">View Teams</a>
	<a class="nav-bar" href="help.php" title="View Stats">Help</a>
	
<!-- search box -->
	<div style="float:right; height:50px; margin:auto;" >
		<label style="color:#D1D1D1; float:left; margin-top:15px">Search: </label><input type="text" name="search" placeholder="Player or Team" style="float:left; margin-top:15px" /> 
		<input type="button" value="Go" id="search" style="margin-top:15px" />
	</div><!-- end search box -->
	
</div><!-- end nav -->