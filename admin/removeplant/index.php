<!DOCTYPE html>
<html lang="en">
<?php
require_once '../../vendor/autoload.php';
$title = "Insert Plant";
include "../../includes/views/head.php";
?>
<body>
    <h1>Pflanze entfernen</h1>
    <?php
    $db = new Referat\Database("../../database.db");

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['plant_id'])) {
        $plantID = intval($_POST['plant_id']);
        $plant = $db->getPlant($plantID);

        if ($plant) {
            $db->removePlant($plantID);
            echo "<p style='color: green;'>Die Pflanze \"{$plant['name']}\" wurde erfolgreich entfernt.</p>";
        } else {
            echo "<p style='color: red;'>Die Pflanze konnte nicht gefunden werden.</p>";
        }
    }

    $plants = $db->getAllPlants();

    if (empty($plants)) {
        echo "<p>Es gibt keine Pflanzen in der Datenbank.</p>";
    } else {
        echo "<h2>Vorhandene Pflanzen</h2>";
        echo "<form method='post' action=''>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Min. Temperatur</th>
                <th>Max. Temperatur</th>
                <th>Akt. Temperatur</th>
                <th>Min. Wasser</th>
                <th>Max. Wasser</th>
                <th>Akt. Wasser</th>
                <th>Breitengrad</th>
                <th>Längengrad</th>
                <th>Aktion</th>
              </tr>";

        foreach ($plants as $plant) {
            echo "<tr>
                    <td>{$plant['id']}</td>
                    <td>{$plant['name']}</td>
                    <td>{$plant['min_temperature']}</td>
                    <td>{$plant['max_temperature']}</td>
                    <td>{$plant['current_temperature']}</td>
                    <td>{$plant['min_water']}</td>
                    <td>{$plant['max_water']}</td>
                    <td>{$plant['current_water']}</td>
                    <td>{$plant['latitude']}</td>
                    <td>{$plant['longitude']}</td>
                    <td>
                        <button type='submit' name='plant_id' value='{$plant['id']}'>Entfernen</button>
                    </td>
                  </tr>";
        }
        echo "</table>";
        echo "</form>";
    }
    ?>
</body>
</html>
