<!DOCTYPE html>
<html lang="de">
<?php
$title = "Kontakt";
include "../includes/views/head.php";
?>
</head>

<body>
    <?php include "../includes/views/navbar.php"; ?>
    <section class="bg-white dark:bg-gray-900 my-10">
        <div class="py-8 px-4 lg:py-16 lg:px-6">
            <h1 class="flex justify-center"><strong>Kontakt</strong></h1>
            <?php include "../contact/Formular.php"; ?>
        </div>
    </section>
    <hr id="impressum" class="w-48 h-1 mx-auto my-8 bg-gray-200 rounded md:my-14 dark:bg-gray-700">
    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-xl">
            <h2 class="mt-8 mb-2 flex justify-center"><strong>Impressum</strong></h2>
            <?php include "../contact/impressum.php"; ?>
        </div>
    </section>
    <hr id="datenschutz" class="w-48 h-1 mx-auto my-8 bg-gray-200 rounded md:my-16 dark:bg-gray-700">
    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-xl">
            <h2 class="mt-8 mb-2 flex justify-center"><strong>Datenschutz</strong></h2>
            <?php include "../contact/datenschutz.php"; ?>
        </div>
    </section>
    <?php include "../includes/views/footer.php"; ?>
</body>

</html>