<?php
    require_once('config.php');

    $allData = '';
   

    $stmt = $conn->prepare('SELECT * FROM tareas');
    $stmt->execute();
    $allData = $stmt->fetchAll();

    ?>