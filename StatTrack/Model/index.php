<!-- Index Page: Home page for the Application. -->
<?php //Variable Declaration and inclusion statements
include '../View/header.php';

$id;
$team;
$classobj = new funcs();

//DB Prepare Statements dbp is for players dbt is for teams
$dbp = $db->prepare('select * from players where id = :id');
    $dbp->bindParam(':id', $id, PDO::PARAM_INT);
        
$dbt= $db->prepare('select * from teams where id = :id');
    $dbt->bindParam(':id', $id, PDO::PARAM_INT);
?>



<!-- container -->
<div id="container">

<!-- content1 -->
<div id="content1">
    
    <?PHP
    // Additional variable declaration(non global scope)
    $id = $classobj->RndPlyr();
    $Img;
    $FName;
    $LName;
    
    // Code that populates random player on index page
    // Player Image is link to players stat page.
    if($dbp -> execute() && $dbp -> rowCount()> 0)
    {
        $results = $dbp->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($results as $key => $value)
        {
            $FName = $value['FirstName'];
            $LName = $value['LastName'];
            $Img = $value['PhotoUrl'];
        }
        
        echo '<h2 style="color:#D1D1D1">', $FName,' ' ,$LName, '</h2> </br>';
        echo '<a href= "player.php?id=', $id, '" > <img src = " ', $Img ,'"> </a>';
    }
    
    else
    {
        echo "something broke :(";
    }
        
    ?>
    
    
    
    
    
</div><!-- end content1 -->

<!-- content2 -->
<div id="content2"> 

    <?PHP
    
    $id = $classobj->RndTeam();
   
    //code that populates the random team onto index page.
    //Team image is link to team page.
    
    if($dbt -> execute() && $dbt -> rowCount()> 0)
    {
        $results = $dbt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($results as $key => $value)
        {
            $TeamName = $value['TeamName'];
            $Abbr = $value['TeamAbbreviation'];
        }
        
        echo '<h2 style="color:#D1D1D1">', $TeamName,'&nbsp &nbsp', $Abbr, '</h2> </br>';
        echo '<a href= "../Model/team.php?id=', $Abbr ,'" > <img src = "../images/', $Abbr ,'.jpg"> </a>';
    }
    
    else
    {
        echo "something broke :(";
    }
    ?>

</div><!-- end content2 -->


</div><!-- end container -->

<!-- iframe 
<div id="iframe">
<iframe src="http://www.nfl.com" width="960"></iframe>
</div><!-- end iframe -->



</div><!-- end main wrapper -->-->

<?php include '../View/footer.php'; ?>

    </body>
</html>
