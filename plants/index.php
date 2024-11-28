<?php
require_once '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<?php
$page = 1;
$title = "Pflanzen";

$database = new Referat\Database("../database.db");
$plants = $database->getThreePlants();

/* Examples
$plants = 
[
    [
        'name' => 'Rose',
        'current_temperature' => 10,
        'min_temperature' => 15,
        'max_temperature' => 25,
        'current_water' => 50,
        'min_water' => 30,
        'max_water' => 60,
    ],
    [
        'name' => 'Tulip',
        'current_temperature' => 18,
        'min_temperature' => 10,
        'max_temperature' => 20,
        'current_water' => 40,
        'min_water' => 20,
        'max_water' => 50,
    ],
    [
        'name' => 'Sunflower',
        'current_temperature' => 25,
        'min_temperature' => 20,
        'max_temperature' => 30,
        'current_water' => 80,
        'min_water' => 40,
        'max_water' => 70,
    ]
];
*/

include "../includes/views/head.php";
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin="" />

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
</head>

<body>
    <?php include "../includes/views/navbar.php"; ?>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="gap-4 mt-8 h-[550px] z-0" id="map"></div>
            <script src="../js/map.js"></script>

            <div class="lg:grid-rows-4">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Liste von Pfanzen</h2>
                    <?php

                        function getPlantStatus($current, $min, $max)
                        {
                            if ($current < $min) {
                                return "red";
                            } elseif ($current > $max) {
                                return "purple";
                            } else {
                                return "primary";
                            }
                        }

                        foreach ($plants as $plant) {
                            $status_temperature = getPlantStatus($plant['current_temperature'], $plant['min_temperature'], $plant['max_temperature']);
                            $status_water = getPlantStatus($plant['current_water'], $plant['min_water'], $plant['max_water']);
                            $name = $plant['name'];
                            include "../includes/views/plantcard.php";
                        }
                    ?>
                    <div class="mt-6 grid grid-column-12 gap-4">
                        <div class="col-start-1 col-span-2 flex items-center justify-center">
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mr-2">Ideal:</p>
                            <?php
                            $status = "primary";
                            include "../includes/views/status.php";
                            ?>
                        </div>
                        <div class="col-start-4 col-span-2 flex items-center justify-center">
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mr-2">Zu niedrig:</p>
                            <?php
                            $status = "red";
                            include "../includes/views/status.php";
                            ?>
                        </div>
                        <div class="col-start-7 col-span-2 flex items-center justify-center">
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mr-2">Zu hoch:</p>
                            <?php
                            $status = "purple";
                            include "../includes/views/status.php";
                            ?>
                        </div>
                        <?php
                        $previous = "gray";
                        $next = "gray";
                        if ($page > 1) {
                            $previous = "primary";
                        }
                        if ($page < $database->getCount() / 3) {
                            $next = "primary";
                        }
                        ?>
                        <a id="previous" class="col-start-11 flex items-center justify-center" <?php echo $previous == "primary" ? 'href="/plants"' : ''; ?>>
                            <svg class="w-6 h-6 text-<?php $previous ?>-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                            </svg>
                        </a>
                        <a id="next" class="col-start-12 flex items-center justify-center" <?php echo $next == "primary" ? 'href="/plants"' : ''; ?>>
                            <svg class="w-6 h-6 text-<?php $next ?>-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "../includes/views/footer.php"; ?>
</body>

</html>