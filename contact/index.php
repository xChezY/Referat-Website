<!DOCTYPE html>
<html lang="de">
<?php include "../includes/views/head.php"; ?>

<body>
    <?php include "../includes/views/navbar.php"; ?>
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 justify-center py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <h1 style="text-align:center"><strong>Kontakt</strong></h1>
            <form action="mailto:Carlo.niermann@iu-study.org" method="post">
                <div class="mb-6">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Large
                        input</label>
                    <input type="text" id="large-input"
                        class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </form>
            <h2 style="text-align:center"><strong>Datenschutz</strong></h2> <br>
            <div style="display: flex; justify-content: center">
                <?php include "../contact/datenschutz.php"; ?>
            </div>
        </div>
        <h2 style="text-align:center"><strong>Impressum</strong></h2> <br>
        <div style="display: flex; justify-content: center">
            <p>adsfoif</p>

            <?php include "../includes/views/footer.php"; ?>
        </div>
        </div>
    </section>
</body>

</html>