<?php include 'header.php'; ?>

<div id="playersdiv">

<?PHP

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
             echo '<td><a href="player.php?id=',$key + 1,'">Go To Player</a></td>';
             echo '</tr>';
        }
        echo '</table>';
    }
    
    else {echo 'Something broke :(';}
            
?>
</div> 


<!-- back to top -->
<a href="" style="float:right;" class="nav-bar">Back to Top</a>

        <?php
        // put your code here
        ?>

        <?php include 'footer.php'; ?>

    </body>
</html>
