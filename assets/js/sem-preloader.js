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
    /* O template so mostra a barra depois de 300px de rolagem. Aqui o limite
       cai para 90px. Este listener e registrado depois do handler do template,
       entao e ele que decide o estado final a cada evento de scroll. */
    var LIMITE_NAVBAR = 90;

    function atualizarNavbar() {
        var navbar = document.querySelector('.navbar');
        if (!navbar) return;

        // Classe propria: o handler do template tambem mexe na .nav-scroll e os
        // dois se atropelavam, fazendo a barra piscar entre 90px e 300px.
        if (window.scrollY > LIMITE_NAVBAR) {
            navbar.classList.add('nav-visivel');
        } else {
            navbar.classList.remove('nav-visivel');
        }
    }

    function marcarNavbarSeJaRolado() {
        atualizarNavbar();
        window.addEventListener('scroll', atualizarNavbar, { passive: true });
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
