<?php

require '/home/prelesn/config.php';
//CONNECT TO DB
try {
    //instantiate a db object
    $dbh = new PDO("mysql:dbname=mprelesn_grc", "prelesn", "u5ny1Y6m:*BFP6");
    echo "Connected to database!";
}
catch (PDOException $e)
{
    echo $e->getMessage();
}

//Bind the parameters
$type = 'snake';
$name = 'Slitherin';
$color = 'green';

$statement ->bindParam(':type', $type, PDO::PARAM_STR);
$statement ->bindParam(':name', $name, PDO::PARAM_STR);
$statement ->bindParam(':color', $color, PDO::PARAM_STR);

//execute
$statement->execute();