<?php include 'header.php'; ?>

<?php 
    $Team = filter_input(INPUT_GET, 'id');
    $dbs = $db-> prepare('select * from players where Team = :Team');
    $dbt = $db-> prepare('select TeamName from teams where TeamAbbreviation = :Team');
    $dbs->bindParam(':Team', $Team, PDO::PARAM_STR);
    $dbt->bindParam(':Team', $Team, PDO::PARAM_STR);
    
    $TeamFull;
    
   if ( $dbt->execute() && $dbt->rowCount() > 0 )
   {
       $resultsT = $dbt->fetchAll(PDO::FETCH_ASSOC);
       
       //var_dump($resultsT);
             
       
       foreach($resultsT as $key => $value)
       {
           $TeamFull = $value['TeamName'];
       }
       
        
   }
    
echo '<h2 id="TeamName">',$TeamFull,'</h2>';
?>

<div id="TeamImage">

<?PHP echo '<img style="width:200; height:100;" src="images/',$Team,'.jpg"/>' ?>

</div>


<div id="TeamPlayers" style="margin-right: 50px;">
<?PHP
if ( $dbs->execute() && $dbs->rowCount() > 0 ) {

        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);


        echo '<table id = "players" border="1">'; 
        echo '<tr><th>Index</th><th>First Name</th>';
        echo '<th>Last Name</th><th>Player Number</th><th>Position</th> <th>Go To Player</th>';
        foreach ($results as $key => $value) {
            echo '<tr>';
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['Number'] ,'</td>';
             echo '<td>', $value['Position'] ,'</td>';
             echo '<td><a href="player.php?id=',$value['id'],'">Go To Player</a></td>';
             echo '</tr>';
        }
        echo '</table>';
    }
    
    else {echo 'Something broke :(';}
?>
</div>


<?php include 'footer.php'; ?>