<header class="l-headerInner <?php echo $lHeaderInner["modifiers"] ?>">
    <div class="l-headerInner__bgEffect" style="background-image: url(<?php echo $lHeaderInner["background"] ?>)"></div>
    <div class="l-headerInner__content">
        <div class="u-container">
            <h1><?php echo $lHeaderInner["title"] ?></h1>
            <p><?php echo $lHeaderInner["description"] ?></p>
            <div class="c-scrollLink">
                <a href="<?php echo $lHeaderInner["link"] ?>">
                    <?php include('assets/media/icons/icon_arrow.svg');?>
                </a>
            </div>
        </div>
    </div>
    <div class="l-headerInner__brandEffect">
        <img src="assets/media/img/brand_curve.svg" alt="">
    </div>
    <div class="l-headerInner__curve"></div>
    <div class="l-headerInner__breadcrumb">
        <div class="u-container">
            <?php $cBreadCrumb = array('modifiers' => '');
            include('assets/parts/c-breadcrumb.php'); ?>
        </div>
    </div>
</header>