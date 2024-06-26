<?php
require "../../vendor/autoload.php";

function getDBConnection()
{
    $databaseConnection = new MongoDB\Client();
    $DB = $databaseConnection->appleStore;

    return $DB;
}
