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
        <div class="gap-16 justify-center py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <h1 style="text-align:center"><strong>Kontakt</strong></h1>
            <div class="gap-16 justify-center py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <?php include "../contact/Formular.php"; ?>
                <h2 style="text-align:center"><strong>Impressum</strong></h2> <br>
                <div style="display: flex; justify-content: center">
                    <?php include "../contact/impressum.php"; ?>
                </div>
                <h2 style="text-align:center"><strong>Datenschutz</strong></h2> <br>
                <div style="display: flex; justify-content: center">
                    <?php include "../contact/datenschutz.php"; ?>
                </div>
            </div>
            <?php include "../includes/views/footer.php"; ?>
        </div>
        </div>
    </section>
</body>

</html>