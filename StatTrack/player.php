<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
        include 'header.php';
        $results;
        $id = filter_input(INPUT_GET, 'id');
        //$id = $id + 1;
        //echo $id;
        $dbs = $db->prepare('select * from players where id = :id');
        $dbs->bindParam(':id', $id, PDO::PARAM_INT);
        
        $FName = "";
        $Img = "";
        $LName = "";
        $Number;
        $Team;
        $Pos;
        $Height;
        $Weight;
        $College;
        $DOB;
        $Age;
        $Status;
        $Line;
        $Draft;
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($results as $key=> $value)
            {
                $FName = $value["FirstName"];
                $Img = $value["PhotoUrl"];
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
            }
        }
                
        else
        {
            echo 'did not work';
        }
        
        
        
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
<div id="playerImage">
<?PHP echo '<Img src ="', $Img , '" height = "202px" width = "145px">'; ?>

</div>

<div id="personalInfo">
	
	<div id="column1">
		<ul>
			<li>First Name: <?php echo $FName; ?></li>
			<br />
			<li>Last Name: <?php echo $LName; ?></li>
			<br />
			<li>DOB: <?php echo $DOB; ?></li>
			<br />
			<li>Height: <?php echo $Height; ?></li>
			<br />
			<li>Weight: <?php echo $Weight; ?></li>	
		</ul>
	</div>
	
	<div id="column2">
		<ul>
			<li>Team: <?php echo $Team; ?></li>
			<br />
			<li>Jersey: <?php echo $Number; ?></li>
			<br />
			<li>POS: <?php echo $Pos; ?></li>
			<br />
			<li>Age: <?php echo $Age; ?></li>	
		</ul>
	</div>
	
</div>

	<div id="restOfInfo">
		<ul  style="background-color:black;">
			<li>Status: <?php echo $Status; ?></li>
			<br />
			<li>College: <?php echo $College; ?></li>
			<br />
			<li>Experience: <?php echo $Exp, ' years'; ?></li>
			<br />
			<li>Def/Off: <?php echo $Line; ?></li>	
			<br />
			<li>Draft: <?php echo $Draft; ?></li>
		</ul>

</div>
        
        <?PHP// var_dump($results); ?>

<!-- back to top -->
<a href="#" style="float:right;" class="nav-bar">Back to Top</a>
    </body>
</html>
