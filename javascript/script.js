let currentIndex = 0;
const slides = document.querySelectorAll(".slide");
const totalSlides = slides.length;
const slider = document.querySelector(".slider");
const manualBtns = document.querySelectorAll(".manual-btn");

// Função para avançar os slides automaticamente
function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlide();
}

// Atualiza a posição do carrossel e os botões ativos
function updateSlide() {
    slider.style.transform = `translateX(-${currentIndex * 100}vw)`;

    // Remove a classe ativa de todos os botões
    manualBtns.forEach(btn => btn.classList.remove("active"));

    // Adiciona a classe ativa ao botão correspondente
    manualBtns[currentIndex].classList.add("active");
}

// Configura timer para mudar o slide a cada 3 segundos
let autoSlide = setInterval(nextSlide, 3000);

// Função para mover o slide manualmente
function moveSlide(index) {
    clearInterval(autoSlide); // Para o autoplay
    currentIndex = index;
    updateSlide();
    autoSlide = setInterval(nextSlide, 3000); // Reinicia autoplay
}



/*formando talentos EM TESTES*/

window.EfeitoScroll = ScrollReveal({reset:true})
EfeitoScroll.script('.efeito-box',{
    duration: 2000,
    distance: '90px'
})

/*formando talentos EM TESTES*/