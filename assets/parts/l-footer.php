<section class="s-locations">
    <div class="u-container">
        <ul>
            <li>
                <?php
                    $cClinicAddressFull = array(
                            'modifiers' => '',
                            'city' => 'Criciúma',
                            'phone' => '48 3411.6706',
                            'phoneLink' => 'tel:4834116706',
                            'address' => 'Centro Clínico Luiz Zanette <br>Rua Antônio de Lucca, 91 <br>Salas 805, 806 e 807 . Pio Corrêa',
                            'mapSrc' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.878244673776!2d-6.26686868402047!3d53.34543568248022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e9cb559ea73%3A0x2600c7a819c83012!2sTemple%20Bar%2C%20Dublin!5e0!3m2!1spt-BR!2sie!4v1676998407940!5m2!1spt-BR!2sie'
                    );
                include('assets/parts/c-clinicAddressFull.php'); ?>
            </li>
            <li>
                <?php
                $cClinicAddressFull = array(
                    'modifiers' => '',
                    'city' => 'Araranguá',
                    'phone' => '48 3524.3620',
                    'phoneLink' => 'tel:4835243620',
                    'address' => 'Rua Caetano Lummertz, 456<br>Sala 311 . Centro',
                    'mapSrc' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.878244673776!2d-6.26686868402047!3d53.34543568248022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e9cb559ea73%3A0x2600c7a819c83012!2sTemple%20Bar%2C%20Dublin!5e0!3m2!1spt-BR!2sie!4v1676998407940!5m2!1spt-BR!2sie'
                );
                include('assets/parts/c-clinicAddressFull.php'); ?>
            </li>
        </ul>
    </div>
</section>

<footer class="l-footer">
    <div class="l-footer__effect"></div>
    <div class="u-container">
        <div class="l-footer__row">
            <div class="l-footer__col --company">
                <?php $cCardProctomais = array('modifiers' => '--light');
                include('assets/parts/c-cardProctomais.php'); ?>
            </div>
            <div class="l-footer__col --sitemap">
                <?php $cSitemap = array('modifiers' => '--cols');
                include('assets/parts/c-sitemap.php'); ?>
            </div>
        </div>
    </div>
    <div class="u-container">
        <div class="l-footer__row">
            <div class="l-footer__col --copy">
                <div class="c-copyright">
                    <p>Diretor Técnico: João Cláudio Wasniewski - CRM 16146 - RQE 8022</p>
                    <p>©2023 - Todos os direitos reservados à Proctomais. </p>
                </div>
            </div>
            <div class="l-footer__col --neuro">
                <div class="c-neurodigital">
                    <a href="http://www.neuro.digital/" target="_blank" title="Neurodigital">
                        <i><?php include('assets/media/icons/icon_heart.svg');?></i>
                        <span>by <strong>Neurodigital</strong></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>