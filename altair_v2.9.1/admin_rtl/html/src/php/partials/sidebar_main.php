    <!-- main sidebar -->
    <aside id="sidebar_main">
        <?php if($sPage !== "layout_header_full") { ?>

        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="assets/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="assets/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="assets/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
        <?php }; ?>

        <div class="menu_section">
            <ul>
                <?php $json_data = file_get_contents('./php/data/pages.json'); foreach (json_decode($json_data, true) as $item) { ?><li<?php if ($sPage == $item['url']) { echo ' class="current_section"'; }; ?> title="<?php echo $item['title']; ?>">
                    <a href="<?php if (!isset($item['submenu'])) { echo $item['url'] . '.html'; } else { echo '#'; } ?>">
                        <span class="menu_icon"><i class="material-icons"><?php echo $item['icon']; ?></i></span>
                        <span class="menu_title"><?php echo $item['title']; ?></span>
                    </a>
                    <?php if (isset($item['submenu'])) { ?><ul>
                <?php foreach ($item['submenu'] as $submenu_item) { ?>
        <?php if (isset($submenu_item['items'])) { ?><li class="menu_subtitle"><?php echo $submenu_item['section_title']; ?></li>
                        <?php foreach ($submenu_item['items'] as $section_item) { ?><li<?php if ($sPage == $section_item['url']) { echo ' class="act_item"'; }; ?>><a href="<?php echo $section_item['url']; ?>.html"><?php echo $section_item['title']; ?></a></li>
                        <?php }; ?><?php } else { ?><li<?php if ($sPage == $submenu_item['url']) { echo ' class="act_item"'; }; ?>><a href="<?php echo $submenu_item['url']; ?>.html"><?php echo $submenu_item['title']; ?></a></li>
                <?php }; ?><?php } ; ?>
    </ul>
                <?php }; ?>

                </li>
                <?php }; ?>

                <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE241;</i></span>
                        <span class="menu_title">Multi level</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">First level</a>
                            <ul>
                                <li>
                                    <a href="#">Second Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Long title to test</a>
                                    <ul>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Even longer title multi line</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->