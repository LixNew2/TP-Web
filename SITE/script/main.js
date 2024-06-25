var top_tp_btns = document.querySelectorAll('#top_menu a');
var menu_left = document.getElementById('menu_left');

var content = document.getElementById('content');
var logo = document.getElementById('logo');

var side_bar = document.getElementById('side_menu');
var side_bar_show_btn = document.getElementById('side_bar_button');

var content = "";

if(document.getElementById('content')){
    content = document.getElementById('content');
}else{
    content = document.getElementById('home_content');
}

side_bar.style.width = "10%";
side_bar.style.transition = "width 0.5s ease";

const sidebarState = localStorage.getItem('sidebarState');

if (sidebarState === 'hidden') {
    side_bar.style.width = "0%";
    content.style.width = "100%";
}

var zonning_iframe = document.getElementById('zonning_iframe');

//Functions
function connect_display_button(id){
    document.location.href = "/files/SITE/pages/tp" + id + "/tp" + id + "_ex1.php";
}

function connect_tp_button(){
    for(let btn in top_tp_btns){
        top_tp_btns[btn].onclick = function() {
            connect_display_button(top_tp_btns[btn].id.replace("tp", ""))
        };
    }

    logo.onclick = () => {
        document.location.href = "/files/SITE/index.php";
    }

    side_bar_show_btn.onclick = () => {
        if(parseInt(side_bar.style.width) > 0){
            side_bar.style.width = "0%";
            content.style.width = "100%";
            localStorage.setItem('sidebarState', 'hidden');
            menu_left.style.display = "none";
        }else{
            side_bar.style.width = "10%";
            content.style.width = "90%";
            localStorage.removeItem('sidebarState');
            
        }
    }
}

side_bar.addEventListener('transitionend', function(event) {
    if (parseInt(side_bar.style.width) > 0) {
        menu_left.style.display = "flex";
    }
});

connect_tp_button();