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
            <script src="../js/map.js"></script>

            <div class="lg:grid-rows-4">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Liste von Pfanzen</h2>

                    <div
                        class="mt-4 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
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
                    <div
                        class="mt-3 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
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
                    <div
                        class="mt-3 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
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
                    <div class="mt-6 grid grid-column-12 gap-4">
                        <a class="col-start-11 flex items-center justify-center" href="/">
                        <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
                        </svg>
                        </a>
                        <a class="col-start-12 flex items-center justify-center"  href="/">
                        <svg class="w-6 h-6 text-primary-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
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