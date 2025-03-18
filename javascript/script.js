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

document.addEventListener('scroll', function() {
    const fundo = document.querySelector('.formando-talentos');
    const scrollY = window.scrollY || window.pageYOffset;
    const movimento = scrollY * 0.1;

    fundo.style.backgroundPosition = `center ${movimento}px`;
});

ScrollReveal().reveal('.formando-talentos .reveal', {
    delay: 400,
    distance: '50px',
    duration: 1500,
    easing: 'ease-in-out',
    interval: 200,
    afterReveal: function (domEl) {
        if (domEl.classList.contains('talentos-box')) {
            const contagemAnos = document.getElementById('contagem-anos');
            const contagemAlunos = document.getElementById('contagem-alunos');

            animarContagem(contagemAnos, 32, 1000); // Contagem de 0 a 10 em 1 segundo
            animarContagem(contagemAlunos, 600, 2000); // Contagem de 0 a 100 em 2 segundos
        }
    }
});

function animarContagem(elemento, valorFinal, duracao) {
    let valorInicial = 0;
    const incremento = Math.ceil(valorFinal / (duracao / 16)); // 16ms é o tempo aproximado de um frame

    const intervalo = setInterval(() => {
        valorInicial += incremento;
        if (valorInicial >= valorFinal) {
            elemento.textContent = `+${valorFinal}`;
            clearInterval(intervalo);
        } else {
            elemento.textContent = `+${valorInicial}`;
        }
    }, 16); // Aproximadamente 60 frames por segundo
}
/*formando talentos EM TESTES*/