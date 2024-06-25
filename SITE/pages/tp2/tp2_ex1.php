<!DOCTYPE html>
<html>
    <?php $pageTitle = "TP 2 : LES LIENS HYPERTEXTE"; include '../../../SITE/elements/head.html'; ?>
    <body>
        <?php include '../../../SITE/elements/header.html'; ?>
        <?php include '../../../SITE/elements/side_btn_show.html'; ?>
        <main>
            <?php include '../../../SITE/elements/side_menu.html'; ?>
            <div id="content">
                <h1>TP 2 : LES LIENS HYPERTEXTE</h1>
                <p>Ce TP nous a permis d'apprendre à faire des liens hypertexte en HTML avec les balises "a" et leurs "href".<br>Il nous était demandé de créer une page HTML avec des redirections vers les cours que nous avions réalisés jusque-là.</p><br><br>
                <iframe src="/files/TP2/pages/index.html"></iframe>
                <?php $download_path = "../../../SITE/files/TP2.7z"; $download_name = "TP2.7z"; include '../../../SITE/elements/download_btn.html'; ?>
            </div>
        </main>
        <?php include '../../../SITE/elements/footer.html'; ?>
    </body>
</html>