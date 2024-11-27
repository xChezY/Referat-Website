<?php
require_once '../vendor/autoload.php' ;
?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<?php
$title = "Pflanzen";
include "../includes/views/head.php";

use Dotenv\Dotenv; //TODO Warum wird die Klasse nicht gefunden?
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();
$api_key = $_ENV['GOOGLE_MAPS_API_KEY']

?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key ?><?php
 ?>">
</script>
<script>
    const mapStyle = [
        {
            "featureType": "all",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "weight": "2.00"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#9c9c9c"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#f2f2f2"
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "all",
            "stylers": [
                {
                    "saturation": -100
                },
                {
                    "lightness": 45
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#eeeeee"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#7b7b7b"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#46bcec"
                },
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#c8d7d4"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#070707"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        }
    ];

    function initMap() {
        const mapCenter = { lat: 51.5074, lng: -0.1278 };

        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: mapCenter,
            styles: mapStyle
        });

        const marker = new google.maps.Marker({
            position: mapCenter,
            map: map,
            title: "Hier ist London!"
        });
    }
</script>
</head>

<body onload="initMap()">
    <?php include "../includes/views/navbar.php"; ?>
    <section class="bg-white dark:bg-gray-900 my-10">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="gap-4 mt-8" id="map"></div>
            <div class="lg:grid-rows-4">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Schaue dir
                        eine
                        Pflanze an</h2>

                    <div
                        class="mt-8 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="rounded-full object-cover h-48 w-48 p-4"
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
                        <img class="rounded-full object-cover h-48 w-48 p-4"
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
                        <img class="rounded-full object-cover h-48 w-48 p-4"
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