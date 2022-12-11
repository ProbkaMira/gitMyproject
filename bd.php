<?php
    $mysql = new mysqli("Localhost", "root","", "calc");
    $mysql->query("SET NAMES'utf8'");

    if ($mysql->connect_errno) {
    echo 'Error Number: ' . $mysql->connect_errno.'<br>';
    echo 'Error:' . $mysql->connect_error;

    } 
    else{
      $mysql->query("CREATE TABLE `table1.calc`(
    id INT(11) NOT NULL,
    name VARCHAR(20) NOT NULL,
    bio TEXT NOT NULL,
    PRIMARY KEY(id)
    )");
        }

    $mysql->close();

?>