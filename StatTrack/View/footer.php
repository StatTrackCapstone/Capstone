<!-- footer -->
<div id="footer">
    <!-- back to top -->
<a href="#" style="float:right;" class="nav-bar">Back to Top</a>

</br>   
<p>&copy; 2015 <?PHP if($_SESSION['state'] === false) {echo '<a style="background-color: white" href="../Model/login.php">Admin</a>'; } 
                     else if ($_SESSION['state'] === true)
                    {echo '<a style="background-color: white" href="../Controller/logout.php" > Logout </a>';}?>
</p>

</div><!-- end footer -->
