<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<?php
require_once '../vendor/autoload.php';
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, ['options' => ['default' => 1, 'min_range' => 1]]);
$title = "Pflanzen";

$database = new Referat\Database("../database.db");

$plants = $database->getThreePlants($page);

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
        <div class="fill-red-600 fill-purple-600 fill-primary-600 text-gray-500 text-primary-700"></div>
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="gap-4 mt-8 h-[550px] z-0" id="map"></div>
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
                        $id = $plant['id'];
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
                        $previous = "gray-500";
                        $next = "gray-500";
                        if ($page > 1) {
                            $previous = "primary-700";
                        }
                        if ($page < $database->getCount() / 3) {
                            $next = "primary-700";
                        }
                        ?>
                        <a id="previous" class="col-start-11 flex items-center justify-center" <?php echo $previous == "primary-700" ? 'href="/plants?page=' . $page-1 . '"' : ''; ?>>
                            <svg class="w-6 h-6 text-<?php echo $previous ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                            </svg>
                    </a>
                        <a id="next" class="col-start-12 flex items-center justify-center" <?php echo $next == "primary-700" ? 'href="/plants?page=' . $page+1 . '"' : ''; ?>>
                            <svg class="w-6 h-6 text-<?php echo $next ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                            </svg>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/map.js"></script>
    <?php include "../includes/views/footer.php"; ?>
</body>

</html>