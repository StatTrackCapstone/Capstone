<?php
$id = $_GET['id'];
$pgid = $id;
$db = new PDO("mysql:host=localhost;dbname=capstone", "root", "");
$dbt= $db->prepare('UPDATE players '
                . 'SET '
                . 'id = :id'
                . 'Team = :team,'
                . 'Number = :number, '
                . 'FirstName = :fName, '
                . 'LastName = :lName,'
                . 'Position = :pos,'
                . 'Status = :status, '
                . 'Height = :height, '
                . 'Weight = :weight, '
                . 'College = :college, '
                . 'Experience = :exp,'
                . 'PositionCategory = :line, '
                . 'Age = :age, '
                . 'BirthDateString = :DOB, '
                . 'PhotoUrl = :img, '
                . 'CollegeDraftYear = :draft'
                . 'WHERE id = :id');
        
        $dbt->bindParam(':fName', $_POST['fName'], PDO::PARAM_STR);
        $dbt->bindParam(':lName', $_POST['lName'], PDO::PARAM_STR);
        $dbt->bindParam(':number', $_POST['number'], PDO::PARAM_STR);
        $dbt->bindParam(':team', $_POST['team'], PDO::PARAM_STR);
        $dbt->bindParam(':pos', $_POST['pos'], PDO::PARAM_STR);
        $dbt->bindParam(':height', $_POST['height'], PDO::PARAM_STR);
        $dbt->bindParam(':weight', $_POST['weight'], PDO::PARAM_STR);
        $dbt->bindParam(':college',$_POST['college'], PDO::PARAM_STR);
        $dbt->bindParam(':DOB', $_POST['DOB'], PDO::PARAM_STR);
        $dbt->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
        $dbt->bindParam(':status', $_POST['status'], PDO::PARAM_STR);
        $dbt->bindParam(':line', $_POST['line'], PDO::PARAM_STR);
        $dbt->bindParam(':draft', $_POST['draft'], PDO::PARAM_STR);
        $dbt->bindParam(':exp', $_POST['exp'], PDO::PARAM_STR);
        $dbt->bindParam(':id', $id, PDO::PARAM_INT);
        $dbt->bindParam(':img', $_POST['img'], PDO::PARAM_STR);
        
        if($dbt->execute())
        {
            header('location: ../Model/admin.php?response="success"');
        }
        
        else
        {
            echo "an error occured Please Try again. <br>";
            echo "<a href=../Model/admin.php> Back to Admin page </a><br>";
            echo $id;
            var_dump($_POST);
            
        }

