/* Dependencias que o scripts-j.js do template usa, mas que nao vieram no pacote
   baixado (o pacote e a versao Nuxt, sem os plugins da versao HTML).
   Sem esses stubs o scripts-j.js lanca ReferenceError e para de executar,
   derrubando todos os efeitos que vem depois no mesmo bloco. */

// jquery.scrollIt: rolagem suave por teclado/ancoras do menu.
// Substituido pelo scroll-behavior nativo (definido no CSS).
if (typeof jQuery !== 'undefined' && typeof jQuery.scrollIt !== 'function') {
    jQuery.scrollIt = function () {};
}

// simpleParallax: usado apenas em .thumparallax / .thumparallax-down,
// classes que este site nao utiliza.
if (typeof window.simpleParallax === 'undefined') {
    window.simpleParallax = function () {};
}

if (typeof jQuery !== 'undefined') {
    // bootstrap-validator: valida o formulario de contato do template.
    // Este site nao tem formulario, o contato e por WhatsApp.
    if (typeof jQuery.fn.validator !== 'function') {
        jQuery.fn.validator = function () {
            return this;
        };
    }

    // sticky-kit: usado nas sidebars do template, que este site nao usa.
    if (typeof jQuery.fn.stick_in_parent !== 'function') {
        jQuery.fn.stick_in_parent = function () {
            return this;
        };
    }

    // YouTubePopUp: abre video em lightbox. Este site nao tem video.
    if (typeof jQuery.fn.YouTubePopUp !== 'function') {
        jQuery.fn.YouTubePopUp = function () {
            return this;
        };
    }
}
