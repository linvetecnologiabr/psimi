/* O scripts-j.js do template termina com a timeline do preloader, e o ultimo
   passo dela e um gsap.from('main', { y: 100, opacity: 0 }) com delay.
   Como o preloader foi removido do HTML, o <main> ficava invisivel por alguns
   segundos ate esse passo rodar - a tela preta na abertura.

   A timeline e criada dentro do $(function(){...}) do template, entao este
   arquivo precisa agir no DOM ready (depois daquele handler), nunca durante o
   parse. O arquivo do template nao e alterado. */
(function () {
    'use strict';

    function descartarPreloader() {
        if (typeof gsap === 'undefined') return;

        var main = document.querySelector('main');
        if (!main) return;

        gsap.globalTimeline.getChildren(true, true, true).forEach(function (tween) {
            var alvos = typeof tween.targets === 'function' ? tween.targets() : [];

            var mexeNoMain = alvos.indexOf(main) !== -1;
            var mexeNoLoader = alvos.some(function (alvo) {
                return alvo && alvo.classList && alvo.classList.contains('loader-wrap');
            });

            if (mexeNoMain || mexeNoLoader) {
                tween.kill();
            }
        });

        gsap.set(main, { clearProps: 'opacity,transform' });
    }

    /* O empilhamento dos cards de especialidade (pin do ScrollTrigger, criado
       pelo scripts-j.js) so faz sentido no desktop. No celular os cards ficam
       sobrepostos e gigantes, escondendo imagem e texto. Aqui o pin e desligado
       abaixo de 992px, sem tocar no arquivo do template. */
    function desligarPinNoMobile() {
        if (typeof ScrollTrigger === 'undefined') return;
        if (window.innerWidth > 991) return;

        ScrollTrigger.getAll().forEach(function (st) {
            var alvo = st.trigger;
            if (alvo && alvo.classList && alvo.classList.contains('card-item')) {
                st.kill(true);
            }
        });

        if (typeof gsap === 'undefined') return;

        // O scale que acompanha o pin fica aplicado mesmo depois do kill
        gsap.globalTimeline.getChildren(true, true, true).forEach(function (tween) {
            var alvos = typeof tween.targets === 'function' ? tween.targets() : [];
            var mexeNoCard = alvos.some(function (alvo) {
                return alvo && alvo.classList && alvo.classList.contains('card-item');
            });
            if (mexeNoCard) tween.kill();
        });

        gsap.set('.cards .card-item', { clearProps: 'all' });
    }

    /* O template so adiciona .nav-scroll no evento de scroll. Quando a pagina
       abre ja rolada (link com #ancora, F5 no meio), a navbar ficava sem o
       fundo e o menu branco sumia sobre as secoes claras. */
    function marcarNavbarSeJaRolado() {
        var navbar = document.querySelector('.navbar');
        if (!navbar) return;

        if (window.scrollY > 300) {
            navbar.classList.add('nav-scroll');
        }
    }

    function ajustar() {
        descartarPreloader();
        desligarPinNoMobile();
        marcarNavbarSeJaRolado();
        window.addEventListener('load', marcarNavbarSeJaRolado);
    }

    if (typeof jQuery !== 'undefined') {
        // Registrado depois do handler do template, roda depois dele.
        jQuery(ajustar);
    } else {
        document.addEventListener('DOMContentLoaded', ajustar);
    }
})();
