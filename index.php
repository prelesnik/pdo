<?php
//CONNECT TO DB
try {
    //instantiate a db object
    $dbh = new PDO("mysq:dbname=mprelesn_grc", "prelesn", "u5ny1Y6m:*BFP6");
    echo "Connected to database!";
}
catch (PDOException $e)
{
    echo $e->getMessage();
}