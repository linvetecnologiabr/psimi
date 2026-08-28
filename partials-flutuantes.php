<!-- BOTAO FLUTUANTE DO WHATSAPP -->
<a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="btn-whats-flutuante" aria-label="Falar com a psicóloga pelo WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- MODAL DE SAIDA -->
<div class="exit-modal" id="exitModal" hidden>
    <div class="exit-modal__caixa" role="dialog" aria-modal="true" aria-labelledby="exitModalTitulo">
        <button type="button" class="exit-modal__fechar" id="exitModalFechar" aria-label="Fechar">&times;</button>
        <img src="<?= $img ?>/img-home05.webp" alt="Psicóloga Michely Ciardulo" width="420" height="250" loading="lazy" decoding="async">
        <div class="exit-modal__cont">
            <p class="exit-modal__linha">Não sai antes de falar comigo!</p>
            <h3 id="exitModalTitulo">ESTOU ONLINE</h3>
            <p class="exit-modal__linha">Clique no botão abaixo e agende sua consulta, estou te esperando 😉</p>
            <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="exit-modal__botao">Falar com a psicóloga</a>
        </div>
    </div>
</div>
