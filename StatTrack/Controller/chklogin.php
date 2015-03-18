<?php
include '../View/header.php';
$db = new PDO("mysql:host=localhost;dbname=capstone", "root", "");
$dbs = $db->prepare('select * from users where uid = :uid');
$dbs->bindParam(':uid', $uid, PDO::PARAM_STR);
$uid = filter_input(INPUT_POST, 'Username');
$pwd = hash('Sha256',  filter_input(INPUT_POST, 'Password'));




if ($dbs->execute() && $dbs->rowCount() > 0)
{
    $results = $dbs->fetchAll(PDO::FETCH_ASSOC);                
   foreach ($results as $key => $value)
    {
        $dbHash = $value["pwd"];
    }
                
        if ($dbHash === $pwd)
        {
            $_SESSION['state'] = true;
            header('location: ../Model/admin.php');
        }
        
        else
        {
            echo 'you have entered invalid credentials. Please try again';
            echo '<a href="../Model/login.php"> Back to login </a>';
        }        
}           
else 
{
     echo "something broke";
}
 
        