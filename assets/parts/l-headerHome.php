<header class="l-headerHome">
    <div class="l-headerHome__bgEffect"></div>
    <div class="u-container">
        <div class="l-headerHome__content">
            <h1>Lorem ipsum sit dollor consectur adiscipling</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget diam diam. Suspendisse potenti.</p>
            <?php $cCta = array('modifiers' => '--default');
            include('assets/parts/c-cta.php'); ?>
            <span>Ou através do telefone <strong><a href="tel:48991316762">48 99131-6762</a></strong></span>
            <ul class="l-headerHome__clinics">
                <li>
                    <?php $cClinicAddress = array(
                        'phone' => '48 99999.9999',
                        'city' => 'Criciúma',
                        'link' => 'contato',
                        'modifiers' => ''
                    );
                    include('assets/parts/c-clinicAddress.php'); ?>
                </li>
                <li>
                    <?php $cClinicAddress = array(
                        'phone' => '48 99999.9999',
                        'city' => 'Araranguá',
                        'link' => 'contato',
                        'modifiers' => ''
                    );
                    include('assets/parts/c-clinicAddress.php'); ?>
                </li>
            </ul>
        </div>
        <div class="l-headerHome__picture">
            <img src="assets/media/img/casal-feliz-e-saudavel.png" alt="">
        </div>
        <div class="l-headerHome__brandEffect">
            <img src="assets/media/img/brand_curve.svg" alt="">
        </div>
    </div>
    <div class="l-headerHome__curve">
        <!--        <img src="assets/media/img/effect_white_2.svg" alt="">-->
    </div>
</header>