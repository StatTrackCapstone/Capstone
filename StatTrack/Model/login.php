<?php include '../View/header.php' ;
if($_SESSION['state'] === true)
{
    header('location:../Model/admin.php');
}
?>
    <body>
        <form action="../Controller/chklogin.php" Method="Post" style="margin-top:5px; color:white;">
                <fieldset>
                    <label>Username: </label>
                    <input type="text" name="Username" value=""/> <br>
                    <br>
                    <label>Password: </label>
                    <input type="password" name="Password" value=""/> <br>
                    <br>
                    
                    <input type="submit" value="Login">
                </fieldset>
            
            </form>
        <button action="<?PHP session_destroy()?>" value="Destroy Session"></button>
        
    </body>
    <?php include '../View/footer.php'; ?>
</html>
