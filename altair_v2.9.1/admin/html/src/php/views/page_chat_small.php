<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">
            <div class="uk-grid">
                <div class="uk-width-medium-2-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            Click on user to start chat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sidebar_secondary">
        <div class="sidebar_secondary_wrapper uk-margin-remove">
            <ul class="md-list md-list-addon list-chatboxes" id="chatboxes">
                <?php $username = $faker->firstNameFemale.' '.$faker->lastName; ?>
                <li data-user="<?php echo $username; ?>" data-user-avatar="avatar_02">
                    <div class="md-list-addon-element">
                        <span class="element-status element-status-danger"></span>
                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                    </div>
                    <div class="md-list-content">
                        <span class="md-list-heading"><?php echo $username; ?></span>
                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                    </div>
                </li>
                <?php $username = $faker->firstNameMale.' '.$faker->lastName; ?>
                <li data-user="<?php echo $username; ?>" data-user-avatar="avatar_07">
                    <div class="md-list-addon-element">
                        <span class="element-status element-status-success"></span>
                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                    </div>
                    <div class="md-list-content">
                        <span class="md-list-heading"><?php echo $username; ?></span>
                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                    </div>
                </li>
                <?php $username = $faker->firstNameFemale.' '.$faker->lastName; ?>
                <li data-user="<?php echo $username; ?>" data-user-avatar="avatar_06">
                    <div class="md-list-addon-element">
                        <span class="element-status element-status-success"></span>
                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_06_tn.png" alt=""/>
                    </div>
                    <div class="md-list-content">
                        <span class="md-list-heading"><?php echo $username; ?></span>
                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                    </div>
                </li>
                <?php $username = $faker->firstNameMale.' '.$faker->lastName; ?>
                <li data-user="<?php echo $username; ?>" data-user-avatar="avatar_01">
                    <div class="md-list-addon-element">
                        <span class="element-status element-status-danger"></span>
                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_01_tn.png" alt=""/>
                    </div>
                    <div class="md-list-content">
                        <span class="md-list-heading"><?php echo $username; ?></span>
                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                    </div>
                </li>
                <?php $username = $faker->firstNameFemale.' '.$faker->lastName; ?>
                <li data-user="<?php echo $username; ?>" data-user-avatar="avatar_08">
                    <div class="md-list-addon-element">
                        <span class="element-status element-status-warning"></span>
                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_08_tn.png" alt=""/>
                    </div>
                    <div class="md-list-content">
                        <span class="md-list-heading"><?php echo $username; ?></span>
                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                    </div>
                </li>
                <?php $username = $faker->firstNameFemale.' '.$faker->lastName; ?>
                <li data-user="<?php echo $username; ?>" data-user-avatar="avatar_04">
                    <div class="md-list-addon-element">
                        <span class="element-status element-status-success"></span>
                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_04_tn.png" alt=""/>
                    </div>
                    <div class="md-list-content">
                        <span class="md-list-heading"><?php echo $username; ?></span>
                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="chatbox_wrapper"></div>

    <script id="chatbox_template" type="text/x-handlebars-template">
        <div class="chatbox" data-user="{{ username }}">
            <div class="chatbox_header">
                <span class="header_name">
                    {{ username }}
                </span>
                <div class="header_actions">
                    <div class="actions_dropdown" data-uk-dropdown="{pos:'bottom-right',mode:'click'}">
                        <a href="#"><i class="material-icons">&#xE8B9;</i></a>
                        <div class="uk-dropdown uk-dropdown-small">
                            <ul class="uk-nav uk-nav-dropdown">
                                <li><a href="#">Show full conversation</a></li>
                                <li><a href="#">Block messages</a></li>
                                <li><a href="#">Report</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="chatbox_close"><i class="material-icons">&#xE14C;</i></a>
                </div>
            </div>
            <div class="chatbox_content">
                {{> conversation this }}
            </div>
            <div class="chatbox_footer">
                <input type="text" placeholder="Write message..." class="message_input">
            </div>
        </div>
    </script>
    <script id="chatbox_conversation" type="text/x-handlebars-template">
        {{#if conversation }}
            {{#each conversation }}
            <div class="chatbox_message{{#exists own }} own{{/exists}}">
                {{#exists avatarUrl }}
                <a href="#" class="chatbox_avatar">
                    <img src="{{avatarUrl}}" />
                </a>
                {{/exists}}
                <ul class="chatbox_message_content">
                    {{> messages this}}
                </ul>
            </div>
            {{/each}}
        {{/if}}
    </script>
    <script id="chatbox_messages" type="text/x-handlebars-template">
        {{#if messages }}
            {{#each messages }}
            <li><span{{#exists time}} title="{{ dateFormat time format='YYYY-MM-DD' }}" data-uk-tooltip="{pos:'right'}" {{/exists}}>{{ text }}</span></li>
            {{/each}}
        {{/if}}
    </script>
