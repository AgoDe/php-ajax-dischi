<?php

include 'database.php';

$filter = '';
$dischiFiltrati = [];

if(key_exists("filter", $_GET)) {
    $filter = $_GET['filter'];
    
    foreach ($dischi as $disco) {
        if($disco['genre'] === $filter) {
            $dischiFiltrati[] = $disco;
        } 
    }
    
} else {
    $dischiFiltrati = $dischi;
}


header('Content-Type: application/json');

echo json_encode($dischiFiltrati);
?>
