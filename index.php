<?php

require '/home/mprelesn/config.php';
//CONNECT TO DB
try {
    //instantiate a db object
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    //echo "Connected to database!";
}
catch (PDOException $e)
{
    echo $e->getMessage();
}

//define query
$sql = "INSERT INTO pets(name, type, color)
        VALUES (:name, :type, :color)";

//prepare the statement
$statement = $dbh->prepare($sql);

//Bind the parameters
$type = 'snake';
$name = 'Slitherin';
$color = 'green';

$statement ->bindParam(':name', $name, PDO::PARAM_STR);
$statement ->bindParam(':type', $type, PDO::PARAM_STR);
$statement ->bindParam(':color', $color, PDO::PARAM_STR);

//execute
$statement->execute();
$id = $dbh ->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";

//add a few more pets
$type = 'dog';
$name = 'oscar';
$color = 'blue';
$statement->execute();
$id = $dbh ->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";

$type = 'mouse';
$name = 'mickey';
$color = 'orange';
$statement->execute();
$id = $dbh ->lastInsertId();
echo "<p>Pet $id inserted successfully.</p>";