<footer class="clean-footer crev">
    <div class="container pb-40 pt-40 ontop">
        <div class="row justify-content-between">
            <div class="col-lg-3">
                <div class="logo icon-img-100 md-mb80">
                    <img src="<?= $img ?>/logo-white.png" alt="Michely Ciardulo" width="100" height="76" loading="lazy" decoding="async">
                </div>
                <p class="fz-14 mt-20 opacity-7">Esteja por dentro das últimas novidades, insights e compartilhamentos sobre psicologia, psicanálise e bem-estar.</p>
            </div>
            <div class="col-lg-4">
                <div class="column md-mb50">
                    <h6 class="sub-title mb-30">Entre em contato</h6>
                    <address class="p-color fw-400 fz-16">
                        <?= $contato['endereco_linha1'] ?><br>
                        <?= $contato['endereco_linha2'] ?><br>
                        <?= $contato['cep'] ?>
                    </address>
                    <h6 class="mt-30 mb-15"><a href="mailto:<?= $contato['email'] ?>"><?= $contato['email'] ?></a></h6>
                    <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="underline">
                        <span class="fz-22 main-color"><?= $contato['telefone'] ?></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="column md-mb50">
                    <h6 class="sub-title mb-30">Menu</h6>
                    <ul class="rest fz-14 opacity-7">
                        <li class="mb-15"><a href="<?= $base_url ?>/sobre">Sobre mim</a></li>
                        <li class="mb-15"><a href="<?= $base_url ?>/formacoes">Formações</a></li>
                        <li class="mb-15"><a href="<?= $base_url ?>/especialidades/">Especialidades</a></li>
                        <li><a href="<?= $base_url ?>/blog/">Blog</a></li>
                        <li class="mt-15"><a href="<?= $base_url ?>/politica-de-privacidade">Política de Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="column">
                    <h6 class="sub-title mb-30">Redes sociais</h6>
                    <ul class="rest social-icon d-flex align-items-center">
                        <li class="hover-this cursor-pointer">
                            <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="hover-anim" aria-label="WhatsApp da Psicóloga Michely Ciardulo">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="hover-this cursor-pointer ml-10">
                            <a href="<?= $instagram_url ?>" target="_blank" rel="noopener nofollow" class="hover-anim" aria-label="Instagram da Psicóloga Michely Ciardulo">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pt-30 pb-30 mt-80 bord-thin-top">
            <div class="text-center">
                <p class="fz-14">&copy; <?= date('Y') ?> <?= $site['nome'] ?> — <?= $site['crp'] ?> — CNPJ <?= $site['cnpj'] ?>. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
    <div class="circle-blur">
        <img src="<?= $assets ?>/imgs/patterns/blur1.png" alt="" loading="lazy" decoding="async">
    </div>
</footer>

