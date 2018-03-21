<?php defined('safe_access') or die('Restricted access!'); ?>

<div id="page_content">
    <div id="page_content_inner">

        <div class="md-card uk-margin-large-bottom">
            <div class="md-card-content">
                <h3 class="heading_a uk-margin-bottom">Default Slider</h3>
                <div class="uk-slidenav-position" data-uk-slider="{autoplay: true,autoplayInterval: '5000'}">

                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid uk-grid-small uk-grid-width-medium-1-4 uk-grid-width-small-1-2">
<?php for($i=1;$i<=12;$i++) { ?>
                            <li style="max-height: 200px"><img src="assets/img/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" alt=""></li>
<?php } ?>
                        </ul>
                    </div>

                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>

                </div>
            </div>
        </div>

        <h3 class="heading_a uk-margin-bottom">Center Mode</h3>
        <div class="uk-slidenav-position uk-margin-large-bottom" data-uk-slider="{center:true,autoplay: true,autoplayInterval: '3000'}">

            <div class="uk-slider-container">
                <ul class="uk-slider uk-slider-center uk-grid-width-medium-1-5 uk-grid-width-small-1-2">
<?php for($i=14;$i<=24;$i++) { ?>
                    <li style="padding:10px;">
                        <div class="md-card">
                            <div style="height: 180px;">
                                <img src="assets/img/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" alt="" style="height:100%;width:100%;">
                            </div>
                            <div class="md-card-content">
                                <strong>Lorem ipsum</strong><br>
                                <span class="uk-text-muted">dolor sit</span>
                            </div>
                        </div>
                    </li>
<?php } ?>
                </ul>
            </div>

            <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
            <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>

        </div>

        <div class="md-card uk-margin-large-bottom">
            <div class="md-card-content">
                <h3 class="heading_a uk-margin-bottom">Textual Slider</h3>
                <div class="uk-slidenav-position" data-uk-slider>

                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid uk-grid-medium uk-grid-width-medium-1-3 uk-grid-width-small-1-2">
<?php for($i=1;$i<=10;$i++) { ?>
                                <li>
                                    <?php echo $faker->sentence(80); ?>
                                </li>
<?php } ?>
                        </ul>
                    </div>

                    <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
                    <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>

                </div>
            </div>
        </div>

    </div>
</div>