<!-- MARQUEE CTA -->
<section class="call-marq section-padding o-hidden">
    <div class="main-marq lrg sub-bg pt-20 pb-20">
        <div class="slide-har st1">
            <div class="box">
                <?php for ($i = 0; $i < 12; $i++): ?>
                    <div class="item">
                        <h4 class="d-flex align-items-center">
                            <span>Agendar consulta</span>
                            <span class="icon-img-50 ml-40"><img src="<?= $assets ?>/imgs/star.png" alt="" width="50" height="50" loading="lazy" decoding="async"></span>
                        </h4>
                    </div>
                <?php endfor; ?>
            </div>
            <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="overlay-link" aria-label="Agendar consulta pelo WhatsApp"></a>
        </div>
    </div>
    <div class="main-marq bord-item">
        <div class="slide-har st2">
            <?php for ($b = 0; $b < 2; $b++): ?>
                <div class="box">
                    <?php for ($i = 0; $i < 6; $i++): ?>
                        <div class="item">
                            <h4 class="d-flex align-items-center"><span>Falar com a psicóloga</span></h4>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="overlay-link" aria-label="Falar com a psicóloga pelo WhatsApp"></a>
        </div>
    </div>
</section>
