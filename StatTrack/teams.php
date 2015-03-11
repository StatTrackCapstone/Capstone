    <?PHP include 'header.php'; ?>

<div id="PlayersContainer">
<?PHP 
    $dbs = $db->prepare('select * from teams');
        
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {

        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        
        echo '<table id = "teams" border="1">'; 
        echo '<tr><th>Index</th><th>Team Name</th><th>Number of Players</th><th>Go To Team';
        foreach ($results as $key => $value) {
            echo '<tr>';
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['TeamName'] ,'</td>';
             echo '<td>', $value['NumPlayers'] ,'</td>';
             echo '<td> <a href = "team.php?id=', $value['TeamAbbreviation'],'">Go To Team</a>';
             echo '</tr>';
        }
        echo '</table> </br>';
    }
?>
</div>
</body>


    

<?php include "footer.php"; ?>


