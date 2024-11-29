<!DOCTYPE html>
<html lang="en">
<?php
require_once '../../vendor/autoload.php';
$title = "Insert Plant";
include "../../includes/views/head.php";
?>
<body>
    <h1>Neue Pflanze hinzufügen</h1>
    <form method="post" action="">
        <label for="name">Name der Pflanze:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="min_temperature">Minimale Temperatur (°C):</label><br>
        <input type="number" step="0.1" id="min_temperature" name="min_temperature" required><br><br>

        <label for="max_temperature">Maximale Temperatur (°C):</label><br>
        <input type="number" step="0.1" id="max_temperature" name="max_temperature" required><br><br>

        <label for="current_temperature">Aktuelle Temperatur (°C):</label><br>
        <input type="number" step="0.1" id="current_temperature" name="current_temperature"><br><br>

        <label for="min_water">Minimale Bodenfeuchtigkeit (%):</label><br>
        <input type="number" step="0.1" id="min_water" name="min_water" required><br><br>

        <label for="max_water">Maximaler Bodenfeuchtigkeit (%):</label><br>
        <input type="number" step="0.1" id="max_water" name="max_water" required><br><br>

        <label for="current_water">Aktueller Bodenfeuchtigkeit (%):</label><br>
        <input type="number" step="0.1" id="current_water" name="current_water"><br><br>

        <label for="latitude">Breitengrad:</label><br>
        <input type="number" step="0.0001" id="latitude" name="latitude"><br><br>

        <label for="longitude">Längengrad:</label><br>
        <input type="number" step="0.0001" id="longitude" name="longitude"><br><br>

        <button type="submit">Pflanze hinzufügen</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = [
            'name' => $_POST['name'],
            'min_temperature' => floatval($_POST['min_temperature']),
            'max_temperature' => floatval($_POST['max_temperature']),
            'current_temperature' => isset($_POST['current_temperature']) ? floatval($_POST['current_temperature']) : null,
            'min_water' => floatval($_POST['min_water']),
            'max_water' => floatval($_POST['max_water']),
            'current_water' => isset($_POST['current_water']) ? floatval($_POST['current_water']) : null,
            'latitude' => isset($_POST['latitude']) ? floatval($_POST['latitude']) : null,
            'longitude' => isset($_POST['longitude']) ? floatval($_POST['longitude']) : null,
        ];

        $db = new Referat\Database("../../database.db");

        if ($db->insertPlant($data)) {
            echo "<p style='color: green;'>Die Pflanze wurde erfolgreich hinzugefügt.</p>";
        } else {
            echo "<p style='color: red;'>Fehler beim Hinzufügen der Pflanze.</p>";
        }
    }
    ?>
</body>
</html>
