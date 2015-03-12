<!-- Players Page: Creates a table populated with every player in the DB. -->
<?php 
//The players page populates all players in the DB into a table for quick viewing
//Each player has a link in their row to navigate to players stat page.

// Inclusion Statements
include '../View/header.php'; ?>

<div id="playersdiv">

<?PHP

//Code to create and populate the table with players from DB
$dbs = $db->prepare('select * from players');

        
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {

        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);


        echo '<table id = "players" border="1">'; 
        echo '<tr><th>Index</th><th>First Name</th>';
        echo '<th>Last Name</th><th>Team Name</th><th>Player Number</th><th>Position</th> <th>Go To Player</th>';
        foreach ($results as $key => $value) {
            echo '<tr>';
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['Team'] ,'</td>';
             echo '<td>', $value['Number'] ,'</td>';
             echo '<td>', $value['Position'] ,'</td>';
             echo '<td><a href="../Model/player.php?id=',$key + 1,'">Go To Player</a></td>'; //Key + 1 is required due to discrepency between Array index value and DB index value
             echo '</tr>';
        }
        echo '</table>';
    }
    
    else {echo 'Something broke :(';}
            
?>
</div> 

        <?php include '../View/footer.php'; ?>

    </body>
</html>
