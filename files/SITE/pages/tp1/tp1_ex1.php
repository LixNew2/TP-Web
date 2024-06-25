<!DOCTYPE html>
<html>
    <?php $pageTitle = "TP 1 : HTML"; include '../../../SITE/elements/head.html'; ?>
    <body>
        <?php include '../../../SITE/elements/header.html'; ?>
        <?php include '../../../SITE/elements/side_btn_show.html'; ?>
        <main>
            <?php include '../../../SITE/elements/side_menu.html'; ?>
            <div id="content">
                <h1 id="tp_title">TP 1 : HTML - Exercice 1</h1>
                <p>Le premier exercice du TP consistait à inspecter le code HTML d'un site pour apprendre et comprendre le fonctionnement des balise primaire et la structure d'un site.</p>
                <img src="/files/SITE/images/tp1_ex1.png" id="tp_image"></img>
                <?php $download_path = "../../../SITE/files/TP3.7z"; $download_name = "TP3.7z"; include '../../../SITE/elements/download_btn.html'; ?>
            </div>
        </main>
        <?php include '../../../SITE/elements/footer.html'; ?>
        <script>
            var menu_left = document.getElementById('menu_left');

            for (var i = 1; i <= 3; i++) {
                var btn = document.createElement('a');
                var currentId = "tp1_ex" + i;
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