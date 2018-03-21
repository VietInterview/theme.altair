<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid">
                <div class="uk-width-medium-3-5">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate toolbar_fixed">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav">
                                            <li><a href="#">Action 1</a></li>
                                            <li><a href="#">Action 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Heading
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <?php echo $faker->sentence(180); ?>
                            <div class="md-card-fullscreen-content">
                                <h4 class="heading_a uk-margin-bottom">Fullscreen content</h4>
                                <form class="uk-margin-medium-top">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-4">
                                            <label>Label</label>
                                            <input type="text" class="md-input" />
                                        </div>
                                        <div class="uk-width-medium-1-4">
                                            <select id="select_fs" class="selectize_fs" data-md-selectize>
                                                <option value="">Select...</option>
                                                <optgroup label="Group 1">
                                                    <option value="a">Item A</option>
                                                    <option value="b">Item B</option>
                                                    <option value="c">Item C</option>
                                                </optgroup>
                                                <optgroup label="Group 2">
                                                    <option value="a">Item A</option>
                                                    <option value="b">Item B</option>
                                                    <option value="c">Item C</option>
                                                    <option value="d">Item D</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="uk-width-medium-1-4">
                                            <div class="uk-input-group">
                                                <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                                <label for="uk_dp_fs">Select date</label>
                                                <input class="md-input" type="text" id="uk_dp_fs" data-uk-datepicker="{format:'DD.MM.YYYY', addClass: 'dropdown-fs'}">
                                            </div>
                                        </div>
                                        <div class="uk-width-medium-1-4">
                                            <input type="checkbox" data-switchery checked id="switch_fs" />
                                            <label for="switch_fs" class="inline-label">Checkbox</label>
                                            <span class="uk-form-help-block">Checked</span>
                                        </div>
                                    </div>
                                </form>
                                <p class="uk-margin-large-top"><?php echo $faker->sentence(800); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-5">
                    <div class="md-card md-card-fullscreen-activate">
                        <div class="md-card-fullscreen-hide">
                            <img src="assets/img/gallery/Image02.jpg" alt="">
                            <div class="md-card-content">
                                <strong>Clickable card</strong><br>
                                <span class="uk-text-muted">Click on this card to activate fullscreen.</span>
                            </div>
                        </div>
                        <div class="md-card-fullscreen-content">
                            <h4 class="heading_a uk-margin-bottom">Fullscreen content</h4>
                            <form class="uk-margin-medium-top">
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-4">
                                        <label>Label</label>
                                        <input type="text" class="md-input" />
                                    </div>
                                    <div class="uk-width-medium-1-4">
                                        <select id="select_fs" class="selectize_fs" data-md-selectize>
                                            <option value="">Select...</option>
                                            <optgroup label="Group 1">
                                                <option value="a">Item A</option>
                                                <option value="b">Item B</option>
                                                <option value="c">Item C</option>
                                            </optgroup>
                                            <optgroup label="Group 2">
                                                <option value="a">Item A</option>
                                                <option value="b">Item B</option>
                                                <option value="c">Item C</option>
                                                <option value="d">Item D</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="uk-width-medium-1-4">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                            <label for="uk_dp_fs_2">Select date</label>
                                            <input class="md-input" type="text" id="uk_dp_fs_2" data-uk-datepicker="{format:'DD.MM.YYYY', addClass: 'dropdown-fs'}">
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-4">
                                        <input type="checkbox" data-switchery checked id="switch_fs_2" />
                                        <label for="switch_fs_2" class="inline-label">Checkbox</label>
                                        <span class="uk-form-help-block">Checked</span>
                                    </div>
                                </div>
                            </form>
                            <p class="uk-margin-large-top"><?php echo $faker->sentence(800); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-width-medium-1-2" data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <a href="#" class="md-btn md-btn-small md-btn-flat md-btn-flat-primary uk-float-right uk-margin-small-left"><i class="material-icons">&#xE163;</i></a>
                                <div class="uk-float-right">
                                    <select id="select_toolbar" data-md-selectize>
                                        <option value="">Select...</option>
                                        <option value="a">Item A</option>
                                        <option value="b">Item B</option>
                                        <option value="c">Item C</option>
                                    </select>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Heading
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <?php echo $faker->sentence(80); ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-color-blue-grey-500">&#xE0C8;</i>
                                <i class="md-icon material-icons md-color-light-blue-500">&#xE88F;</i>
                                <i class="md-icon material-icons md-color-red-500">&#xE80E;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Heading
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <?php echo $faker->sentence(60); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-width-medium-1-2" data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <a href="#" class="md-btn md-btn-small md-btn-flat">Button</a>
                                <a href="#" class="md-btn md-btn-small md-btn-flat md-btn-flat-primary">Button</a>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Heading
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <?php echo $faker->sentence(80); ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <div class="uk-margin-small-top">
                                    <input type="checkbox" data-switchery data-switchery-size="small" data-switchery-color="#d32f2f" checked id="switch_demo_card" />
                                    <label for="switch_demo_card" class="inline-label">Label</label>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Heading
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <?php echo $faker->sentence(60); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-width-1-1">
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                </ul>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Heading
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <ul id="card_tabs" class="uk-switcher uk-margin">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequatur dolore doloribus ducimus est ex facere fugiat impedit ipsum iure laborum magni minus nam nostrum optio pariatur quisquam, sapiente ut?</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam animi aspernatur dolore dolorem doloribus eius fugiat id impedit ipsum nam nemo, nisi nulla obcaecati odio officiis placeat quasi quia repellat tempore veritatis vero, voluptas? Facilis incidunt odit quam similique.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet atque beatae consequuntur delectus deleniti dolor eaque eligendi enim, et eum, exercitationem fugit, harum ipsam iure minus necessitatibus neque officiis optio quaerat quam quasi recusandae vitae voluptas voluptates? Ad aspernatur atque autem beatae, blanditiis cupiditate debitis doloribus et excepturi laborum magnam porro praesentium quae quaerat quisquam sapiente sint? Dicta, fugiat!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-width-medium-1-3" data-uk-grid-margin>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Lorem ipsum dolor sit amet
                                </h3>
                            </div>
                            <p class="truncate-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur, consequuntur deleniti dolor doloremque dolores fugit illum in incidunt laboriosam maxime nulla pariatur, quo rerum saepe sint ut veniam?</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Lorem ipsum dolor sit amet
                                </h3>
                            </div>
                            <p class="truncate-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur, consequuntur deleniti dolor doloremque dolores fugit illum in incidunt laboriosam maxime nulla pariatur, quo rerum saepe sint ut veniam?</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                        <div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                                <h3>
                                    Lorem ipsum dolor sit amet
                                </h3>
                            </div>
                            <p class="truncate-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consectetur, consequuntur deleniti dolor doloremque dolores fugit illum in incidunt laboriosam maxime nulla pariatur, quo rerum saepe sint ut veniam?</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-width-medium-1-3" data-uk-grid-margin>
                <div>
                    <div class="md-card md-card-primary">
                        <div class="md-card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-success">
                        <div class="md-card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-danger">
                        <div class="md-card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-warning">
                        <div class="md-card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-grid-width-medium-1-3" data-uk-grid-margin>
                <div>
                    <div class="md-card" id="random_progress">
                        <div class="md-card-toolbar" data-toolbar-progress="12" data-toolbar-progress-steps="true">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Progress <span id="progress_value">12</span>%
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <a href="#" class="md-btn md-btn-small md-btn-success md-btn-wave-light" id="randomize">Update</a>
                            <p class="uk-margin-top">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus
                                repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam
                                voluptates.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar md-bg-light-green-100" data-toolbar-progress="62">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Progress 62%
                            </h3>
                        </div>
                        <div class="md-card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar md-bg-deep-orange-100" data-toolbar-progress="33">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons">&#xE5D5;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Card Progress 33%
                            </h3>
                        </div>
                        <div class="md-card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad at dolor, explicabo labore quaerat quibusdam quisquam quos, repellendus repudiandae sunt, tempora temporibus. Aliquam deleniti et necessitatibus omnis quibusdam voluptates.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
