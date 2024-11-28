<div class="mt-4 flex flex-col items-center bg-white border border-gray-200 rounded-xl shadow lg:flex-row lg:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="rounded-full object-cover h-36 w-36 p-4"
        src="https://www.olerum.de/content/files/41316/Cucurbita-pepo-930x600-proportionalsmallest.webp"
        alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $name; ?>
        </h5>
        <div class="grid grid-row-2">
            <div class="row-start-1 flex items-center">
                <p class="font-normal text-gray-700 dark:text-gray-40 mr-2">Temperatur:</p>
                <?php
                    $status = $status_temperature;
                    include "status.php"
                ?>
            </div>
            <div class="row-start-2 flex items-center">
                <p class="font-normal text-gray-700 dark:text-gray-400 mr-2">Bodenfeuchtigkeit:</p>
                <?php
                    $status = $status_water;
                    include "status.php"
                ?>
            </div>
        </div>
    </div>
</div>