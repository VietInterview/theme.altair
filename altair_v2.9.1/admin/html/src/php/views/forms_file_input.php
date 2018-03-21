<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">
                Dropify
                <span class="sub-heading">input files with style</span>
            </h3>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Default
                            </h3>
                            <input type="file" id="input-file-a" class="dropify" />
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Default value
                            </h3>
                            <input type="file" id="input-file-b" class="dropify" data-default-file="assets/img/gallery/Image08.jpg"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Disabled
                            </h3>
                            <input type="file" id="input-file-c" class="dropify" disabled />
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                French messages
                            </h3>
                            <input type="file" id="input-file-d" class="dropify-fr" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">
                                Max size (200 KB)
                            </h3>
                            <input type="file" id="input-file-e" class="dropify" data-max-file-size="200K" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
