/* Modal de saida: aparece uma vez por sessao quando o ponteiro deixa a
   janela pela parte de cima. Mesmo comportamento do site atual (psimi). */
(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('exitModal');
        if (!modal) return;

        var fechar = document.getElementById('exitModalFechar');
        var jaMostrou = false;

        try {
            if (sessionStorage.getItem('exitModalShown')) return;
        } catch (e) {
            // navegacao privada ou storage bloqueado: segue sem memoria de sessao
        }

        function abrir() {
            if (jaMostrou) return;
            jaMostrou = true;
            modal.hidden = false;
            modal.classList.add('is-open');
            try {
                sessionStorage.setItem('exitModalShown', '1');
            } catch (e) {}
        }

        function fecharModal() {
            modal.classList.remove('is-open');
            modal.hidden = true;
        }

        document.addEventListener('mouseout', function (e) {
            if (e.relatedTarget || e.toElement) return;
            if (e.clientY > 10) return;
            abrir();
        });

        if (fechar) fechar.addEventListener('click', fecharModal);

        modal.addEventListener('click', function (e) {
            if (e.target === modal) fecharModal();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal.hidden) fecharModal();
        });
    });
})();
