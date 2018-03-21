<?php defined('safe_access') or die('Restricted access!'); ?>

<div id="page_content">
    <div id="page_content_inner">

        <ul class="uk-tab uk-tab-double-header uk-margin-bottom" data-uk-tab="{connect:'#tabs_search_content', animation:'slide-left'}" id="tabs_search">
            <li class="uk-active"><a href="#">All</a></li>
            <li><a href="#">Images (22)</a></li>
            <li><a href="#">News</a></li>
            <li class="tab_maps"><a href="#">Maps</a></li>
        </ul>
        <ul id="tabs_search_content" class="uk-switcher">
            <li>
                <div class="md-card">
                    <div class="md-card-content">
                        <p class="uk-text-small uk-text-muted">About 124 results (0.70 seconds)</p>
                        <ul class="search_list">
<?php
    $json_data = json_decode(file_get_contents('./php/data/pages.json'), true);
    for($i=0;$i<20;$i++) {
?>
                            <li>
                                <h3 class="search_list_heading"><a href="http://altair.tzdthemes.com/<?php echo $json_data[10]['submenu'][$i]['url'] ?>.html"><?php echo $json_data[10]['submenu'][$i]['title'] ?></a></h3>
                                <span class="search_list_link uk-text-truncate">http://altair.tzdthemes.com/<?php echo $json_data[10]['submenu'][$i]['url'] ?>.html</span>
                                <p><?php echo $faker->sentence(60); ?></p>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                </div>
                <ul class="uk-pagination uk-margin-medium-top">
                    <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><span>&hellip;</span></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                </ul>
            </li>
            <li>
                <div class="md-card">
                    <div class="md-card-content">
                        <p class="uk-text-small uk-text-muted">About 64 results (0.54 seconds)</p>
                        <div data-uk-check-display class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-5" data-uk-grid="{gutter: 4}">
<?php for($i=1;$i<=24;$i++) { ?>
                        <div>
                            <a href="<?php echo $img_path?>/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" data-uk-lightbox="{group:'user-photos'}">
                                <img src="<?php echo $img_path?>/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" alt=""/>
                            </a>
                        </div>
<?php } ?>
                        </div>
                    </div>
                </div>
                <ul class="uk-pagination uk-margin-medium-top">
                    <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><span>&hellip;</span></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                </ul>
            </li>
            <li>
                <div class="md-card">
                    <div class="md-card-content">
                        <p class="uk-text-small uk-text-muted">About 242 000 results (0.22 seconds)</p>
                        <ul class="search_list">
<?php for ($i = 5; $i < 18; $i++) { ?>
                            <li>
                                <img src="<?php echo $img_path?>/gallery/Image<?php if($i < 10) { echo '0';}; echo $i; ?>.jpg" alt="" class="search_list_thumb">
                                <div class="search_list_content">
                                    <h3 class="search_list_heading"><a href="#"><?php echo $faker->sentence(4); ?></a></h3>
                                    <span class="search_list_link"><?php echo $faker->company; ?><span class="md-color-grey-500 uk-text-small uk-margin-small-left"><?php echo $faker->date('d-m-Y','now')?></span></span>
                                    <p><?php echo $faker->sentence(60); ?></p>
                                </div>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                </div>
                <ul class="uk-pagination uk-margin-medium-top">
                    <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><span>&hellip;</span></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                </ul>
            </li>
            <li class="full_height">
                <div class="map_search_wrapper" data-uk-check-display>
                    <span id="map_search_list_toggle"><img src="<?php echo $img_path?>/md-images/ic_place_black.png" alt=""></span>
                    <div id="map_search" class="gmap"></div>
                    <div class="map_search_list_wrapper">
                        <p class="uk-text-small uk-text-muted uk-margin-left uk-margin-right">About 62 results (1.19 seconds)</p>
                        <ul class="md-list gmap_list" id="map_search_list">
<?php
    $company_pos = [
        ['38.35894188', '-92.8538577'],
        ['41.05874774', '-92.26713263'],
        ['42.30281602','-92.06810153'],
        ['41.68463522','-91.3404159'],
        ['41.04467876','-90.08450673'],
        ['40.26186925','-91.03261997'],
        ['39.09442555',' -96.19775663'],
        ['42.54209076','-95.22660793'],
        ['38.50327702','-91.50773766'],
        ['41.40112452','-90.10399142'],
        ['42.12120442','-92.29305971'],
        ['39.88599415','-96.61950196'],
    ];
    for($i=0;$i<10;$i++) {
        $company = $faker->company;
        $company_address = $faker->address;
?>
                            <li data-gmap-lat="<?php echo $company_pos[$i][0]; ?>"  data-gmap-lon="<?php echo $company_pos[$i][1]; ?>" data-gmap-company="<?php echo $company; ?>" data-gmap-company-address="<?php echo $company_address; ?>">
                                <div class="md-list-content">
                                    <span class="md-list-heading"><?php echo $company; ?></span>
                                    <span class="uk-text-small uk-text-muted"><?php echo $company_address; ?></span>
                                    <span class="uk-text-small uk-text-muted uk-margin-small-top">Opening hours: 8.00-20.00</span>
                                </div>
                            </li>
<?php }; ?>
                        </ul>
                        <ul class="uk-pagination uk-margin-medium-top">
                            <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                            <li><span>1</span></li>
                            <li class="uk-active"><a href="#">2</a></li>
                            <li><span>&hellip;</span></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>