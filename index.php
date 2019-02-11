<?php

require '/home/mprelesn/config.php';
//CONNECT TO DB
try {
    //instantiate a db object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
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
//$statement->execute();
$id = $dbh ->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";