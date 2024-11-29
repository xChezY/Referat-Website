<!DOCTYPE html>
<html lang="en">
<?php
require_once '../../vendor/autoload.php';
$title = "Insert Plant";
include "../../includes/views/head.php";
?>
<body>
    <h1>Pflanze aktualisieren</h1>

    <?php
    $db = new Referat\Database("../../database.db");

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['plant_id'])) {
        $plantID = intval($_POST['plant_id']);
        $plant = $db->getPlant($plantID);

        if (!$plant) {
            echo "<p style='color: red;'>Die Pflanze wurde nicht gefunden.</p>";
            exit;
        }

        $data = [
            'name' => $_POST['name'],
            'min_temperature' => floatval($_POST['min_temperature']),
            'max_temperature' => floatval($_POST['max_temperature']),
            'current_temperature' => floatval($_POST['current_temperature']),
            'min_water' => floatval($_POST['min_water']),
            'max_water' => floatval($_POST['max_water']),
            'current_water' => floatval($_POST['current_water']),
            'latitude' => floatval($_POST['latitude']),
            'longitude' => floatval($_POST['longitude']),
        ];

        $db->updatePlant($plantID, $data);
        echo "<p style='color: green;'>Die Pflanze wurde erfolgreich aktualisiert.</p>";
        $plant = $db->getPlant($plantID);
    }

    $plants = $db->getAllPlants();

    if (isset($_GET['plant_id'])) {
        $plantID = intval($_GET['plant_id']);
        $plant = $db->getPlant($plantID);
    }
    ?>

    <form method="get" action="">
        <label for="plant_id">Wähle eine Pflanze aus:</label>
        <select id="plant_id" name="plant_id" onchange="this.form.submit()">
            <option value="">Pflanze auswählen</option>
            <?php foreach ($plants as $p): ?>
                <option value="<?php echo $p['id']; ?>" <?php if (isset($plantID) && $plantID == $p['id']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($p['name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <?php if (isset($plant)): ?>
        <form method="post" action="">
            <input type="hidden" name="plant_id" value="<?php echo htmlspecialchars($plant['id']); ?>">
            
            <label for="name">Name der Pflanze:</label><br>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($plant['name']); ?>" required><br><br>

            <label for="min_temperature">Minimale Temperatur (°C):</label><br>
            <input type="number" step="0.1" id="min_temperature" name="min_temperature" value="<?php echo htmlspecialchars($plant['min_temperature']); ?>" required><br><br>

            <label for="max_temperature">Maximale Temperatur (°C):</label><br>
            <input type="number" step="0.1" id="max_temperature" name="max_temperature" value="<?php echo htmlspecialchars($plant['max_temperature']); ?>" required><br><br>

            <label for="current_temperature">Aktuelle Temperatur (°C):</label><br>
            <input type="number" step="0.1" id="current_temperature" name="current_temperature" value="<?php echo htmlspecialchars($plant['current_temperature']); ?>" required><br><br>

            <label for="min_water">Minimaler Bodenfeuchtigkeit (%):</label><br>
            <input type="number" step="0.1" id="min_water" name="min_water" value="<?php echo htmlspecialchars($plant['min_water']); ?>" required><br><br>

            <label for="max_water">Maximaler Bodenfeuchtigkeit (%):</label><br>
            <input type="number" step="0.1" id="max_water" name="max_water" value="<?php echo htmlspecialchars($plant['max_water']); ?>" required><br><br>

            <label for="current_water">Aktueller Bodenfeuchtigkeit (%):</label><br>
            <input type="number" step="0.1" id="current_water" name="current_water" value="<?php echo htmlspecialchars($plant['current_water']); ?>" required><br><br>

            <label for="latitude">Breitengrad:</label><br>
            <input type="number" step="0.0001" id="latitude" name="latitude" value="<?php echo htmlspecialchars($plant['latitude']); ?>" required><br><br>

            <label for="longitude">Längengrad:</label><br>
            <input type="number" step="0.0001" id="longitude" name="longitude" value="<?php echo htmlspecialchars($plant['longitude']); ?>" required><br><br>

            <button type="submit">Pflanze aktualisieren</button>
        </form>
    <?php endif; ?>
</body>
</html>
