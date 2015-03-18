<?php
    
    $dbt = $db->prepare('select * from players');

        
    if ( $dbt->execute())// && $dbs->rowCount() > 0 ) 
        {

        $results = $dbt->fetchAll(PDO::FETCH_ASSOC);


        echo '<table id = "players" border="1">'; 
        echo '<tr><th>Index</th><th>First Name</th>';
        echo '<th>Last Name</th><th>Team Name</th><th>Update Player</th><th>Delete Player</th>';
        foreach ($results as $key => $value) {
             $id = $value['id'];
             echo '<tr>';
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['Team'] ,'</td>';
             echo '<td><a href="../Model/admin.php?id=', $id,'&pageid=2"> Update </a></td>';
             echo '<td><a href="../Controller/deletePlayer.php?id=', $id,'"> Delete </a></td>';
             echo '</tr>';
        }
        echo '</table>';
    }
    
    else {echo 'Something broke :(';}
            

