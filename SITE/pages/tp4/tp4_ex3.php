<!DOCTYPE html>
<html>
<?php $pageTitle = "TP 4 : LES TABLEAUX"; include '../../../SITE/elements/head.html'; ?>
    <body>
        <?php include '../../../SITE/elements/header.html'; ?>
        <?php include '../../../SITE/elements/side_btn_show.html'; ?>
        <main>
            <?php include '../../../SITE/elements/side_menu.html'; ?>
            <div id="content">
                <h1>TP 4 : LES TABLEAUX - Exercice 3</h1>
                <p>Dans ce dernier exercice, il nous était demandé de créer une page HTML permettant d'afficher un calendrier dynamique.</p>
                <iframe src="/files/TP4/EX3/ex3.html"></iframe>
                <?php $download_path = "../../../SITE/files/TP4.7z"; $download_name = "TP4.7z"; include '../../../SITE/elements/download_btn.html'; ?>
            </div>
        </main>
        <?php include '../../../SITE/elements/footer.html'; ?>
        <script>
            var menu_left = document.getElementById('menu_left');

            for (var i = 1; i <= 3; i++) {
                var btn = document.createElement('a');
                var currentId = "tp4_ex" + i;
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