<!-- Page for displaying search results from search bar -->
<?php //Search Results page outputs results from search query to table for user to access.

//Variable Declaration and Include Statements

include '../View/header.php'; ?>

<div id="playersdiv">

<?PHP

//Additional Variable Declaration (non global scope)
$dbs;


$rawName = filter_input(INPUT_POST, 'Player'); //take input from post and set to local variable.
$nameArray = explode(" ", $rawName); //Takes input string and converts to an array for First and Last Name accessing.
$count = count($nameArray); //Used to determine whether there is a first and last name in the array.
$fName;
$lName;
$id;
    if($rawName != "") // checks whether there is data in variable of if its blank.
    {
        if($count === 2)// if there is a first and last name.
        {
            $fName = $nameArray[0];
            $lName = $nameArray[1];
            $dbs = $db->prepare('select * from players where FirstName = :FirstName && LastName = :LastName');
            
        }
        else if ($count === 1)// if only one value is present fName and lName get set to the first value in array
            //the sql statement then checks whether the input value is = to a first or last name in the DB
        {
            $fName = $nameArray[0];
            $lName = $nameArray[0];
            $dbs = $db->prepare('select * from players where FirstName = :FirstName || LastName = :LastName');
        }
        else //if more than 2 words are put into the search box it prints out the error below and stops loading the page
        {
            echo "<p style='color:white;'>The value entered in search box was invalid. Check your entry then try again!</p>";
            exit();
        }
    }
    else 
        { // If the search box has no value in it the error below is output and page loading stops.
        echo "<p style='color:white;'>No Value was entered in search box please try again!</p>";
        exit();
        }
    
//echo $rawName;
//var_dump($nameArray);
//echo $fName;
//echo $lName;
//echo $count;
    
    //Bind Paramaters
    $dbs->bindParam(':FirstName', $fName, PDO::PARAM_STR);
    $dbs->bindParam(':LastName', $lName, PDO::PARAM_STR);
       
    /*if ($dbs->execute())
    {
        echo "statement executed";
    }
    
    else {echo "statement did not execute";}
    */
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) { //executes query and populates table if data is present.

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

        <?php include '../View/footer.php'; ?>

    </body>
</html>
