<?php
require_once '../../vendor/autoload.php';

header('Content-Type: application/json');

try {
    $db = new Referat\Database("../../database.db");
    $plantData = $db->getAllPlants();
    echo json_encode($plantData);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>