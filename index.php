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
//$sql = "INSERT INTO pets(name, type, color)
//        VALUES (:name, :type, :color)";
//
////prepare the statement
//$statement = $dbh->prepare($sql);
//
////Bind the parameters
//$type = 'snake';
//$name = 'Slitherin';
//$color = 'green';
//
//$statement ->bindParam(':name', $name, PDO::PARAM_STR);
//$statement ->bindParam(':type', $type, PDO::PARAM_STR);
//$statement ->bindParam(':color', $color, PDO::PARAM_STR);
//
////execute
//$statement->execute();
//$id = $dbh ->lastInsertId();
//echo "<p>Pet $id inserted successfully.</p>";
//
////add a few more pets
//$type = 'dog';
//$name = 'oscar';
//$color = 'blue';
//$statement->execute();
//$id = $dbh ->lastInsertId();
//echo "<p>Pet $id inserted successfully.</p>";
//
//$type = 'mouse';
//$name = 'mickey';
//$color = 'orange';
//$statement->execute();
//$id = $dbh ->lastInsertId();
//echo "<p>Pet $id inserted successfully.</p>";

//define the update query
//$sql = "UPDATE pets SET color = :new WHERE color = :old";
//
////Prepare the statement
//$statement = $dbh ->prepare($sql);
//
////Bind the parameters
//$old = 'pink';
//$new = 'brown';
//$statement ->bindParam(':old', $old, PDO::PARAM_STR);
//$statement ->bindParam(':new', $new, PDO::PARAM_STR);
//
////Execute
//$statement ->execute();

//Define the query
$sql = "SELECT * FROM petOwners
        INNER JOIN pets ON petOwners.petId = pets.id;";

//prepare the statement
$statement = $dbh->prepare($sql);

//execute the statement
$statement->execute();

//process result
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
echo "<th>id</th><th>first</th><th>last</th><th>petId</th><th>name</th><th>type</th><th>color</th>";
foreach ($result as $row)
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td><td>" . $row['first'] .
        "</td><td>" . $row['last'] . "</td><td>" . $row['petId'] . "</td>" .
        "<td>" . $row['name'] . "</td><td>" . $row['type'] . "</td><td>" . $row['color'] . "</td>";
    echo "<tr>";
}

echo "</table>";