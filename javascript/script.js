let count = 1;
document.getElementById("radio1").checked = true;


setInterval(function() {
    nextImage();
}, 4000);

function nextImage() {
    count++;
    if (count > 4) {
        count = 1;
    }
    document.getElementById("radio" + count).checked = true;
}

/*formando talentos EM TESTES*/

window.EfeitoScroll = ScrollReveal({reset:true})
EfeitoScroll.script('.efeito-box',{
    duration: 2000,
    distance: '90px'
})

/*formando talentos EM TESTES*/