<?php

    $database= new mysqli("localhost","root","","SQL_Database_edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>