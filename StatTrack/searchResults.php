<?php include 'header.php'; ?>

<div id="playersdiv">

<?PHP

$dbs;


$rawName = filter_input(INPUT_POST, 'Player');
$nameArray = explode(" ", $rawName);
$count = count($nameArray);
$fName;
$lName;
$id;
    if($rawName != "")
    {
        if($count === 2)
        {
            $fName = $nameArray[0];
            $lName = $nameArray[1];
            $dbs = $db->prepare('select * from players where FirstName = :FirstName && LastName = :LastName');
            
        }
        else if ($count === 1)
        {
            $fName = $nameArray[0];
            $lName = $nameArray[0];
            $dbs = $db->prepare('select * from players where FirstName = :FirstName || LastName = :LastName');
        }
        else 
        {
            header("location:index.php");
        }
    }
    else {header("location:index.php");}
//echo $rawName;
//var_dump($nameArray);
//echo $fName;
//echo $lName;
//echo $count;
    
    $dbs->bindParam(':FirstName', $fName, PDO::PARAM_STR);
    $dbs->bindParam(':LastName', $lName, PDO::PARAM_STR);
       
    /*if ($dbs->execute())
    {
        echo "statement executed";
    }
    
    else {echo "statement did not execute";}
    */
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {

        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        

        echo '<table id = "players" border="1">'; 
        echo '<tr><th>Index</th><th>First Name</th>';
        echo '<th>Last Name</th><th>Team Name</th><th>Player Number</th><th>Position</th> <th>Go To Player</th>';
        foreach ($results as $key => $value) {
            $id = $value['id'];
            echo '<tr>';
             echo '<td>', $key ,'</td>';
             echo '<td>', $value['FirstName'] ,'</td>';
             echo '<td>', $value['LastName'] ,'</td>';
             echo '<td>', $value['Team'] ,'</td>';
             echo '<td>', $value['Number'] ,'</td>';
             echo '<td>', $value['Position'] ,'</td>';
             echo '<td><a href="player.php?id=',$id,'">Go To Player</a></td>';
             echo '</tr>';
        }
        echo '</table>';
    }
    
    else {echo 'Something broke :(';}

?>
</div> 

        <?php include 'footer.php'; ?>

    </body>
</html>
