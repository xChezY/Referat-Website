<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<?php include "includes/views/head.php"; ?>

<body>
    <?php include "includes/views/navbar.php"; ?>
    <section
        class="flex flex-col min-h-screen bg-slate-800 text-white bg-center bg-cover bg-blend-overlay bg-fixed bg-black/30"
        style="background-image: url('https://img.freepik.com/premium-photo/smart-garden-sensors-monitoring-plant-health-soil-conditions-sun-exposure-solid-color-background-4k-ultra-hd_964851-117123.jpg?w=1150')">
        <div class="flex-1 flex items-center">
            <div class="text-center mx-auto">
                <h1 class="text-6xl font-semibold">PlantMonitor</h1>
                <p class="font-light text-3xl mt-5">The land of opportunity.</p>
                <a href="#about" class="inline-flex items-center justify-center px-5 py-3 mr-3 mt-10 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            </div>
        </div>
    </section>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded md:my-10 dark:bg-gray-700">
    <section id="about" class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Über uns</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small
                    enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                    Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                    need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be
                    simple and quick.</p>
            </div>
            <div class="gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://mitwirkportal.de/sites/default/files/styles/free_format_1280/public/images/20240315-0a2a6482.jpg.webp"
                    alt="office content 1">
            </div>
        </div>
    </section>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-200 rounded md:my-10 dark:bg-gray-700">
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Schaue dir eine
                    Pflanze an</h2>

                <a href="/plants"
                    class="mt-8 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="rounded-full object-cover h-48 w-48 p-4"
                        src="https://www.olerum.de/content/files/41316/Cucurbita-pepo-930x600-proportionalsmallest.webp"
                        alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Sprössling</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far.</p>
                    </div>
                </a>

            </div>
            <div class="gap-4 mt-8 font-light text-gray-500 lg:text-right sm:text-lg dark:text-gray-400">
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small
                    enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                    Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                    need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be
                    simple and quick.</p>
            </div>
        </div>
    </section>
    <?php include "includes/views/footer.php"; ?>
</body>

</html>