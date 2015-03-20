<?php
session_id('admin');
session_start();
$_SESSION['state'] = false;

header('location: ../Model/index.php');