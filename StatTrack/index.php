<?php include 'header.php';
$id;
$team;
$dbp = $db->prepare('select * from players where id = :id');
        $dbp->bindParam(':id', $id, PDO::PARAM_INT);
        
$dbt = $db->prepare('select * from players where Team = :team');
        $dbt->bindParam(':team', $team, PDO::PARAM_INT);
        
$classobj = new funcs();

?>



<!-- container -->
<div id="container">

<!-- content1 -->
<div id="content1">
    
    <?PHP
    $id = $classobj->RndPlyr();
    $FName;
    $LName;
    $Img;
    
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
        echo '<a href= "player.php?id=',$id,'" > <img src = " ', $Img ,'"> </a>';
    }
    
    else
    {
        echo "something broke :(";
    }
        
    ?>
    
    
    
    
    
</div><!-- end content1 -->

<!-- content2 -->
<div id="content2">

	<h2 style="color:#D1D1D1">Team Name...</h2>

</div><!-- end content2 -->


</div><!-- end container -->

<!-- iframe 
<div id="iframe">
<iframe src="http://www.nfl.com" width="960"></iframe>
</div><!-- end iframe -->

<!-- back to top -->
<a href="#" style="float:right;" class="nav-bar">Back to Top</a>

</div><!-- end main wrapper -->-->

<?php include 'footer.php'; ?>

    </body>
</html>
