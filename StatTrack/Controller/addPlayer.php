<?php

$db = new PDO("mysql:host=localhost;dbname=capstone", "root", "");

$dbs = $db->prepare("INSERT into players SET Team = :team, Number = :number, FirstName = :fName, LastName = :lName, "
        . "Position = :pos, Status = :status, Height = :height, Weight = :weight, College = :college, "
        . "Experience = :exp, PositionCategory = :line, Age = :age, BirthDateString = :DOB, "
        . "PhotoUrl = :img, CollegeDraftYear = :draft");

extract($_POST);
        
        $dbt->bindParam(':fName', $FirstName, PDO::PARAM_STR);
        $dbt->bindParam(':lName', $LastName, PDO::PARAM_STR);
        $dbt->bindParam(':number', $Number, PDO::PARAM_STR);
        $dbt->bindParam(':team', $Team, PDO::PARAM_STR);
        $dbt->bindParam(':pos', $Position, PDO::PARAM_STR);
        $dbt->bindParam(':height', $Height, PDO::PARAM_STR);
        $dbt->bindParam(':weight', $Weight, PDO::PARAM_STR);
        $dbt->bindParam(':college',$College, PDO::PARAM_STR);
        $dbt->bindParam(':DOB', $BirthDateString, PDO::PARAM_STR);
        $dbt->bindParam(':age', $Age, PDO::PARAM_STR);
        $dbt->bindParam(':status', $Status, PDO::PARAM_STR);
        $dbt->bindParam(':line', $PositionCategory, PDO::PARAM_STR);
        $dbt->bindParam(':draft', $CollegeDraftYear, PDO::PARAM_STR);
        $dbt->bindParam(':exp', $Experience, PDO::PARAM_STR);
        $dbt->bindParam(':img', $PhotoUrl, PDO::PARAM_STR);

if($dbs->execute())
        {
            header('location: ../Model/admin.php?response="success"');
        }
        
        else
        {
            echo "an error occured Please Try again. <br>";
            echo "<a href=../Model/admin.php> Back to Admin page </a><br>";
            //echo $id;
            var_dump($_POST);
            
        }