<?php 
    include 'Database.php';

        $dbh = new Database();
        $dbh->connection();
        $db = $dbh->getDb()
?>