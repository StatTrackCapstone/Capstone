<?php

$db = new PDO("mysql:host=localhost;dbname=capstone", "root", "");

$dbs = $db->prepare("INSERT into players (Team = :team, Number = :number, FirstName = :fName, LastName = :lName, "
        . "Position = :pos, Status = :status, Height = :height, Weight = :weight, College = :college, "
        . "Experience = :exp, PositionCategory = :line, Age = :age, BirthDateString = :DOB, "
        . "PhotoUrl = :img, CollegeDraftYear = :draft)");

$dbs->bindParam(':team', $_POST['team'], PDO::PARAM_STR);
$dbs->bindParam(':number', $_POST['number'], PDO::PARAM_STR);
$dbs->bindParam(':fName', $_POST['fName'], PDO::PARAM_STR);
$dbs->bindParam(':lName', $_POST['lName'], PDO::PARAM_STR);
$dbs->bindParam(':pos', $_POST['pos'], PDO::PARAM_STR);
$dbs->bindParam(':status', $_POST['status'], PDO::PARAM_STR);
$dbs->bindParam(':height', $_POST['height'], PDO::PARAM_STR);
$dbs->bindParam(':weight', $_POST['weight'], PDO::PARAM_STR);
$dbs->bindParam(':college', $_POST['college'], PDO::PARAM_STR);
$dbs->bindParam(':exp', $_POST['exp'], PDO::PARAM_STR);
$dbs->bindParam(':line', $_POST['line'], PDO::PARAM_STR);
$dbs->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
$dbs->bindParam(':DOB', $_POST['DOB'], PDO::PARAM_STR);
$dbs->bindParam(':img', $_POST['img'], PDO::PARAM_STR);
$dbs->bindParam(':draft', $_POST['draft'], PDO::PARAM_STR);

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