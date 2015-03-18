<?PHP 
include '../View/header.php';

    if($_SESSION['state'] === false ) {
           header('Location: ../Model/login.php'); 
        }?>
    <body>
        <?PHP var_dump($_SESSION['state']); ?>
        <?php
        
        include '../View/Commands.php';
        
        if(filter_input(INPUT_GET, 'pageid') == 1)
        {
            include '../View/playerList.php';
        }
        
        if(filter_input(INPUT_GET, 'pageid') == 2)
        {
            include '../View/updatePlayerPg.php';
        }
        
        if(filter_input(INPUT_GET, 'pageid') == 3)
        {
            include '../View/addPlayerPg.php';
        }
        
        if(filter_input(INPUT_GET, 'pageid') == 4)
        {
            include '../view/teamUpdate.php';
        }
            
 ?>
    </body>
    <?PHP include '../View/footer.php'; ?>
</html>
