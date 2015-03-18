<?php

$dbDU = $db->prepare('delete from players where id = :id');
$dbsDU -> bindParam(':id', $id, PDO::PARAM_INT);

$id = filter_input(INPUT_GET, $id);

if($dbsDU->execute())
{
    header("../Model/admin.php");
}