<!DOCTYPE html>
<html>
<?php $pageTitle = "TP 7 : RENDRE DYNAMIQUES SES PAGES WEB"; include '../../../SITE/elements/head.html'; ?>
    <body>
        <?php include '../../../SITE/elements/header.html'; ?>
        <?php include '../../../SITE/elements/side_btn_show.html'; ?>
        <main>
            <?php include '../../../SITE/elements/side_menu.html'; ?>
            <div id="content">
                <h1>TP 6 : MISE EN PAGE DU SITE - Exercice 1</h1>
                <p>Ce premier exercice du dernier TP avait pour but de créer du contenu dynamique comme la plupart des site web que nous connaissons.<br>Il nous était demandé de créer une page HTML avec du texte. Dès que la souris passait sur un mot, cela affichait une pop-up avec la définition du mot.</p>
                <iframe src="/files/TP6/EX1/ex1.html"></iframe>
                <?php $download_path = "../../../SITE/files/TP6.7z"; $download_name = "TP6.7z"; include '../../../SITE/elements/download_btn.html'; ?>
            </div>
        </main>
        <?php include '../../../SITE/elements/footer.html'; ?>
        <script>
            var menu_left = document.getElementById('menu_left');

            for (var i = 1; i <= 3; i++) {
                var btn = document.createElement('a');
                var currentId = "tp6_ex" + i;
                btn.id = currentId;
                btn.href = "#";
                btn.textContent = "Exercice " + i;
                btn.onclick = (function(id) {
                    return function() {
                        document.location.href = "./" + id + ".php";
                    };
                })(currentId);
                menu_left.appendChild(btn);
            }
        </script>
    </body>
</html>