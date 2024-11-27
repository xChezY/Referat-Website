<?php
require_once '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<?php
$title = "Pflanzen";
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
    <section class="bg-white dark:bg-gray-900 my-10">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="gap-4 mt-8 h-[550px] z-0" id="map"></div>
            <script>
                var map = L.map('map').setView([51.505, -0.09], 13);
                var Jawg_Light = L.tileLayer('https://tile.jawg.io/jawg-light/{z}/{x}/{y}{r}.png?access-token=8UsGXrnys5mnswuRb3DlEMpE4tDnm9kGNv0FIzQ6UKrMFkcKxu4tMLRFmF4IFnE7', {
                    attribution: 'Plant Monitor',
                    minZoom: 0,
                    maxZoom: 22,
                    accessToken: "8UsGXrnys5mnswuRb3DlEMpE4tDnm9kGNv0FIzQ6UKrMFkcKxu4tMLRFmF4IFnE7"
                });
                Jawg_Light.addTo(map);
                var marker = L.marker([51.5, -0.09]).addTo(map);
                marker.bindPopup("<b>Hello world!</b><br>I am a popup.");
            </script>

            <div class="lg:grid-rows-4">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Schaue dir
                        eine
                        Pflanze an</h2>

                    <div
                        class="mt-8 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="rounded-full object-cover h-36 w-36 p-4"
                            src="https://www.olerum.de/content/files/41316/Cucurbita-pepo-930x600-proportionalsmallest.webp"
                            alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sprössling
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far.</p>
                        </div>
                    </div>
                </div>
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">

                    <div
                        class="mt-8 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="rounded-full object-cover h-36 w-36 p-4"
                            src="https://www.olerum.de/content/files/41316/Cucurbita-pepo-930x600-proportionalsmallest.webp"
                            alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sprössling
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far.</p>
                        </div>
                    </div>
                </div>
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <div
                        class="mt-8 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="rounded-full object-cover h-36 w-36 p-4"
                            src="https://www.olerum.de/content/files/41316/Cucurbita-pepo-930x600-proportionalsmallest.webp"
                            alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sprössling
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                                technology acquisitions of 2021 so far.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "../includes/views/footer.php"; ?>
</body>

</html>