<?php 
        $id= filter_input(INPUT_GET, 'id');
        $dbs = $db->prepare('select * from players where id = :id');
        $dbs->bindParam(':id', $id, PDO::PARAM_INT);
       
        //Query Execution and value setting to variables for output.
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($results as $key=> $value)
            {
                $FName = $value["FirstName"];
                $LName = $value["LastName"];
                $Number = $value["Number"];
                $Team = $value["Team"];
                $Pos = $value["Position"];
                $Height = $value["Height"];
                $Weight = $value["Weight"];
                $College = $value["College"];
                $DOB = $value["BirthDateString"];
                $Age = $value["Age"];
                $Status = $value["Status"];
                $Line = $value["PositionCategory"];
                $Draft = $value["CollegeDraftYear"];
                $Exp = $value["Experience"];
                $Img = $value["PhotoUrl"];
            }
            
        }
        
        
?>

<form id="updatePlayer" method="post" action="../Controller/updatePlayer.php?id=<?php echo $id ?>" style="background-color: black; color:white;">
    
    <fieldset>
        <label>First Name: </label>
        <input type="text" name="fName" value="<?php echo $FName?>"/> <br>
        <label>Last Name: </label>
        <input type="text" name="lName" value="<?php echo $LName?>"/> <br>
        <label>Number: </label>
        <input type="text" name="number" value="<?php echo $Number?>"/> <br>
        <label>Team: </label>
        <input type="text" name="team" value="<?php echo $Team?>"/> <br>
        <label>Position: </label>
        <input type="text" name="pos" value="<?php echo $Pos?>"/> <br>
        <label>Height: </label>
        <input type="text" name="height" value="<?php echo $Height?>"/> <br>
        <label>Weight: </label>
        <input type="text" name="weight" value="<?php echo $Weight?>"/> <br>
        <label>College: </label>
        <input type="text" name="college" value="<?php echo $College?>"/> <br>
        <label>DOB: </label>
        <input type="text" name="DOB" value="<?php echo $DOB?>"/> <br>
        <label>Age: </label>
        <input type="text" name="age" value="<?php echo $Age?>"/> <br>
        <label>Status: </label>
        <input type="text" name="status" value="<?php echo $Status?>"/> <br>
        <label>Line: </label>
        <input type="text" name="line" value="<?php echo $Line?>"/> <br>
        <label>Draft Year: </label>
        <input type="text" name="draft" value="<?php echo $Draft?>"/> <br>
        <label>Experience: </label>
        <input type="text" name="exp" value="<?php echo $Exp?>"/> <br>
        <label>Image: </label>
        <input type="text" name="img" value="<?php echo $Img?>"/> <br>
        
        <input type="submit" value="Update"/>       
    </fieldset>
    
</form>