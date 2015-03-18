<?php
session_start();
$_SESSION['state'] = false;
session_destroy();

header('location: ../Model/index.php');