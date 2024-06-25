<!DOCTYPE html>
<html>
    <?php $pageTitle = "TP 1 : HTML"; include '../../../SITE/elements/head.html'; ?>
    <body>
        <?php include '../../../SITE/elements/header.html'; ?>
        <?php include '../../../SITE/elements/side_btn_show.html'; ?>
        <main>
            <?php include '../../../SITE/elements/side_menu.html'; ?>
            <div id="content">
                <h1 id="tp_title">TP 1 : HTML - Exercice 2</h1>
                <p>Le deuxième exercice avait pour objectif de nous apprendre les bases du langage HTML.<br>Il nous était demandé de créer une page HTML avec un titre, un paragraphe, des listes à puces, etc.</p>
                <iframe src="/files/TP1/EX2/cours1.html"></iframe>
                <?php $download_path = "../../../SITE/files/TP1.7z"; $download_name = "TP1.7z"; include '../../../SITE/elements/download_btn.html'; ?>
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