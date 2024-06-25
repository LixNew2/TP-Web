<!DOCTYPE html>
<html>
<?php $pageTitle = "TP 5 : ZONING D'UNE PAGE WEB"; include '../../../SITE/elements/head.html'; ?>
    <body>
        <?php include '../../../SITE/elements/header.html'; ?>
        <?php include '../../../SITE/elements/side_btn_show.html'; ?>
        <main>
            <?php include '../../../SITE/elements/side_menu.html'; ?>
            <div id="content">
                <h1>TP 5 : ZONING D'UNE PAGE WEB</h1>
                <p>Dans ce TP nous devions mettre en pratique nos connaissance en HTML, et en CSS pour apprendre le système de zonnage.<br>Il nous était demandé de faire différent type de zonnage, plus ou moins difficile.</p>
                <iframe id="zonning_iframe" src="/files/TP5/z1/index.html"></iframe>
                <?php $download_path = "../../../SITE/files/TP5.7z"; $download_name = "TP5.7z"; include '../../../SITE/elements/download_btn.html'; ?>
            </div>
        </main>
        <?php include '../../../SITE/elements/footer.html'; ?>
        <script>
            var menu_left = document.getElementById('menu_left');
            var zonning_iframe = document.getElementById('zonning_iframe');

            for (var i = 1; i <= 7; i++) {
                var zonning_btn = document.createElement('a');
                var currentId = "z" + i;
                zonning_btn.id = currentId;
                zonning_btn.href = "#";
                zonning_btn.textContent = "Zonnage " + i;
                zonning_btn.onclick = (function(id) {
                    return function() {
                        zonning_iframe.src = "../../../TP5/" + id + "/index.html";
                    };
                })(currentId);
                menu_left.appendChild(zonning_btn);
            }
        </script>
    </body>
</html>