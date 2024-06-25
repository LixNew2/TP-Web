<!DOCTYPE html>
<html>
<?php $pageTitle = "TP 3 : LES IMAGES"; include '../../../SITE/elements/head.html'; ?>
    <body>
        <?php include '../../../SITE/elements/header.html'; ?>
        <?php include '../../../SITE/elements/side_btn_show.html'; ?>
        <main>
            <?php include '../../../SITE/elements/side_menu.html'; ?>
            <div id="content">
                <h1>TP 3 : LES IMAGES</h1>
                <p>Ce TP avait pour but de nous initier au langage JAVA SCRIPT et aux images.<br>Il nous était demandé de créer le jeu du Memory.</p>
                <iframe id="dragon_memory" src="/files/TP3/index.html"></iframe>
                <?php $download_path = "../../../SITE/files/TP3.7z"; $download_name = "TP3.7z"; include '../../../SITE/elements/download_btn.html'; ?>
            </div>
        </main>
        <?php include '../../../SITE/elements/footer.html'; ?>
    </body>
</html>