document.getElementById("introjs").addEventListener("click", function(){
    updataContent("Introduction au JavaScript")
});

document.getElementById("introhtml").addEventListener("click", function(){
    updataContent("Introduction a l'HTML")
});

document.getElementById("introcss").addEventListener("click", function(){
    updataContent("Introduction au CSS")
});

function updataContent(text){
    var newParagraph = document.createElement("p");
    newParagraph.style.marginLeft = "30px"
    newParagraph.style.marginTop = "40px"

    newParagraph.textContent = text;
    var contentDiv = document.querySelector(".rectangle_other_page2");
    contentDiv.innerHTML = '';
    contentDiv.appendChild(newParagraph);
}

