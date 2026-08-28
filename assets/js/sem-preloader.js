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

    if (typeof jQuery !== 'undefined') {
        // Registrado depois do handler do template, roda depois dele.
        jQuery(descartarPreloader);
    } else {
        document.addEventListener('DOMContentLoaded', descartarPreloader);
    }
})();
