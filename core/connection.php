<?php
 try {
    $pdo = new PDO('mysql:host=localhost;dbname=users-database', 'root', '');
     
} catch (PDOException $e) {
    print "Connetion Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
